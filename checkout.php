<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

// Fetch user information from the database
$user_query = mysqli_query($conn, "SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
$user_data = mysqli_fetch_assoc($user_query);

// Define user details variables
$firstname = $user_data['firstname'] ?? '';
$lastname = $user_data['lastname'] ?? '';
$contactnumber = $user_data['contact_number'] ?? '';
$email = $user_data['email'] ?? '';
$housenumber = $user_data['house_number'] ?? '';
$streetname = $user_data['street_name'] ?? '';
$barangay = $user_data['barangay'] ?? '';
$city = $user_data['city'] ?? '';
$region = $user_data['region'] ?? '';

$tax_rate = 0.1;
$subtotal = 0;
$tax = 0;
$shipping_fee = 45;
$grand_total = 0;

if (isset($_POST['order_btn'])) {

    $method = mysqli_real_escape_string($conn, $_POST['method']);
    $placed_on = date('d-M-Y');

    $cart_total = 0;
    $cart_products = array();

    $cart_query = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    if (mysqli_num_rows($cart_query) > 0) {
        while ($cart_item = mysqli_fetch_assoc($cart_query)) {
            $cart_products[] = $cart_item['name'] . ' (' . $cart_item['quantity'] . ') ';
            $sub_total = ($cart_item['price'] * $cart_item['quantity']);
            $cart_total += $sub_total;
            $sub_total += $sub_total;
        }
    }

    $total_products = implode(', ', $cart_products);

    $free_shipping_threshold = 1000;

    if ($order_total >= $free_shipping_threshold) {
        $shipping_fee = 0;
    } else {
        $shipping_fee = 45.00;
    }

    $tax = $sub_total * $tax_rate;

    $order_total = $sub_total + $tax;

    $grand_total = $sub_total + $tax + $shipping_fee;

    $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE method = '$method' AND total_products = '$total_products' AND total_price = '$cart_total'") or die('query failed');

    if ($cart_total == 0) {
        $message[] = 'your cart is empty';
    } else {
        if (mysqli_num_rows($order_query) > 0) {
            $message[] = 'order already placed!';
        } else {
            mysqli_query($conn, "INSERT INTO `orders`(user_id, method, total_products, total_price, placed_on) VALUES('$user_id', '$method', '$total_products', '$cart_total', '$placed_on')") or die('query failed');
            $message[] = 'order placed successfully!';
            mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beauty and the Bread</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
@import url('https://fonts.googleapis.com/css2?family=Belleza:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
	padding: 0;
	font-family: 'Belleza';
    color: #703409;
    background-repeat: none;	
}

html{
    font-size: 62.5%;   
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}
html::-webkit-scrollbar{
    width: .8rem;
}
html::-webkit-scrollbar-track{
    background: transparent;
}
html::-webkit-scrollbar-thumb{
    background-color: #341b09;
    border-radius: 5rem;
}

.header{
    top: 0;right: 0;left: 0;
    background-color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    padding: 1.4rem 7%;
    z-index: 999;
}
.logoContent{
    display: flex;
    align-items: center;
}
.logo img{
    height: 5rem;
}
.logoName{
    font-size: 2rem;
    font-weight: bolder;
    padding: 10px;
}

.navbar ul{
    float: right;
    list-style-type: none;
}
.navbar ul li{
    display: inline-block;
}
.navbar ul li a{
    font-size: 2rem;
    margin-right: 3rem;
    text-decoration: none;
	font-weight: bold;
	text-transform: capitalize;
}
.navbar ul li a:hover{
    color: #b37435;
    transition: .4s;
}

.cart-total{
    font-size: 2rem;
}

.pastries{
	background: url(bnbbackground.jpg) no-repeat;
	width: 100%;
	padding: 120px 0px;
}
.title h2{
	color: #703409;
	font-size: 50px;
	width: 1130px;
	margin: 3px auto;
	text-align: center;
}

footer{
	font-family: 'Belleza';
	position: relative;
	width: 100%;
	height: 300px;
	background-color: #ffffff;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}
footer p:nth-child(1){
	font-family: 'Belleza';
	font-size: 30px;
	color: #703409;
	margin-bottom: 20px;
	font-weight: bold;
}
footer p:nth-child(2){
	font-family: 'Belleza';
	color: #703409;
	font-size: 17px;
	width: 500px;
	text-align: center;
	line-height: 26px;
}
.social{
	display: flex;
}
.social a{
	width: 45px;
	height: 45px;
	display: flex;
	align-items: center;
	justify-content: center;
	background: #703409;
	border-radius: 50%;
	margin: 22px 10px;
    color: #ebca94;
	text-decoration: none;
	font-size: 20px;
}
.social a:hover{
	transform: scale(1.3);
	transition: .3s;
}
.end{
	position: absolute;
	color: #703409;
	bottom: 35px;
	font-size: 14px; 
}


/* media queries for web responsive */

@media (max-width:991px){
    html{
        font-size: 55%;
    }
    .header{
        padding: 1.3rem 3rem;
    }
    .aboutus{
        margin-left: 0;
        width: 80%;
    }
}

@media (max-width:768px) {
    #menu-bar{
        display: inline-block;
    }
    ul li{
        position: absolute;
        top: 100%;
        right: -100%;
        width: 25rem;
        background-color: #ffffff;
        height: 80vh;
    }
    ul li.active{
        right: 0;
    }
    ul li a{
        display: block;
        font-size: 2rem;
        color: black;
        margin: 1.5rem;
    }

    .aboutus{
        margin-left: 0;
        width: 90%;
    }
}

@media (max-width:600px){
    html{
        font-size: 50%;
    }
}
</style>
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>checkout</h3>
        <p><a href="home.php">home</a> / checkout</p>
    </div>

    <section class="display-order">

        <?php
        $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
        if (mysqli_num_rows($select_cart) > 0) {
            while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                $sub_total = $fetch_cart['quantity'] * $fetch_cart['price'];
                $grand_total =+ $sub_total + $tax + $shipping_fee;
        ?>
                <p><?php echo $fetch_cart['name']; ?> <span>(<?php echo '₱' . $fetch_cart['price'] . ' x ' . $fetch_cart['quantity']; ?>)</span></p>
        <?php
            }
        } else {
            echo '<p class="empty">your cart is empty</p>';
        }
        ?>

        <div class="cart-total">
        <div class="subtotal">Sub Total: <span>₱<?php echo number_format($sub_total, 2); ?></span></div>
        <div class="tax">Tax (<?php echo ($tax_rate * 100) . '%'; ?>): <span>₱<?php echo number_format($sub_total * 0.10, 2); ?></span></div>
        <div class="shipping_fee">Shipping Fee: ₱<?php echo $shipping_fee; ?></div>
        <div class="grand_total">Total: <span>₱<?php echo number_format($grand_total + ($sub_total * 0.10 + $shipping_fee), 2); ?></span></div>
        </div>

    </section>

    <section class="checkout">
        <form action="" method="post">
            <h3>place your order</h3>
            <div class="flex">
         <div class="inputBox">
            <span>Payment Method</span>
            <select name="method">
               <option value="cash on delivery">Cash on Delivery</option>
               <option value="credit card">Credit Card</option>
               <option value="gcash">GCash</option>
               <option value="Maya">Maya</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Shipping Method</span>
            <select name="method">
               <option value="standard shipping">Standard Shipping</option>
               <option value="free shipping">Free Shipping</option>
            </select>
         </div>
      </div>
      <input type="submit" value="order now" class="btn" name="order_btn">
   </form>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>