<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

if (isset($_POST['update_cart'])) {
    $cart_id = $_POST['cart_id'];
    $cart_quantity = $_POST['cart_quantity'];
    mysqli_query($conn, "UPDATE `cart` SET quantity = '$cart_quantity' WHERE id = '$cart_id'") or die('query failed');
    $message[] = 'cart quantity updated!';
}

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$delete_id'") or die('query failed');
    header('location:cart.php');
}

if (isset($_GET['delete_all'])) {
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
    header('location:cart.php');
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
        <h3>Shopping Cart</h3>
        <p><a href="index.php">Home</a> / Cart </p>
    </div>

    <section class="shopping-cart">
        <h1 class="title">Products Added</h1>

        <div class="box-container">
            <?php
$grand_total = 0;
$sub_total = 0;
$shipping_fee = 60.00;

$select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
if (mysqli_num_rows($select_cart) > 0) {
    while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
        $sub_total += $fetch_cart['quantity'] * $fetch_cart['price'];
        $grand_total += $sub_total;
?>
                    <div class="box">
                        <a href="cart.php?delete=<?php echo $fetch_cart['id']; ?>" class="fas fa-times" onclick="return confirm('Delete this from the cart?');"></a>
                        <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" alt="">
                        <div class="name"><?php echo $fetch_cart['name']; ?></div>
                        <div class="price">₱<?php echo $fetch_cart['price']; ?></div>
                        <form action="" method="post">
                            <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                            <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
                            <input type="submit" name="update_cart" value="Update" class="option-btn">
                        </form>
                        <div class="sub-total">Subtotal: <span>₱<?php echo number_format($sub_total, 2); ?></span></div>
                    </div>
            <?php
                }
            } else {
                echo '<p class="empty">Your cart is empty</p>';
            }
            ?>
        </div>

        <div style="margin-top: 2rem; text-align:center;">
            <a href="cart.php?delete_all" class="delete-btn <?php echo ($grand_total > 1) ? '' : 'disabled'; ?>" onclick="return confirm('Delete all from the cart?');">Delete All</a>
        </div>

        <div class="cart-total">
    <p>Sub Total: <span>₱<?php echo number_format($sub_total, 2); ?></span></p>
    <p>Tax (10%): <span>₱<?php echo number_format($sub_total * 0.10, 2); ?></span></p>
    <p>Shipping Fee: <span>₱<?php echo $shipping_fee; ?></span></p>
    <hr>
    <p>Total: <span>₱<?php echo number_format($grand_total + ($sub_total * 0.10) + $shipping_fee, 2); ?></span></p>
    <div class="flex">
        <a href="products.php" class="option-btn">Continue Shopping</a>
        <a href="checkout.php" class="btn <?php echo ($sub_total > 1) ? '' : 'disabled'; ?>">Proceed to Checkout</a>
    </div>
</div>
    </section>

    <?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>