<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
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

    <!-- UniIcon CDN Link  -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

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

.main{
    width: 100%;
    height: 50vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: pop;
    flex-direction: column;
}
.head{
    text-align: center;
}
.head_1{
    font-size: 30px;
    font-weight: 600;
    color: #703409;
}
.head_1 span{
    color: #703409;
}
.head_2{
    font-size: 16px;
    font-weight: 600;
    color: #703409;
    margin-top: 3px;
}
ul{
    display: flex;
    margin-top: 80px;
}
ul li{
    list-style: none;
    display: flex;
    flex-direction: column;
    align-items: center;
}
ul li .icon{
    font-size: 35px;
    color: #703409;
    margin: 0 60px;
}
ul li .text{
    font-size: 14px;
    font-weight: 600;
    color: #703409;
}

/* Progress Div Css  */

ul li .progress{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: rgba(68, 68, 68, 0.781);
    margin: 14px 0;
    display: grid;
    place-items: center;
    color: #fff;
    position: relative;
    cursor: pointer;
}
.progress::after{
    content: " ";
    position: absolute;
    width: 125px;
    height: 5px;
    background-color: rgba(68, 68, 68, 0.781);
    right: 30px;
}
.one::after{
    width: 0;
    height: 0;
}
ul li .progress .uil{
    display: none;
}
ul li .progress p{
    font-size: 13px;
}

/* Active Css  */

ul li .active{
    background-color: #341b09;
    display: grid;
    place-items: center;
}
li .active::after{
    background-color: #341b09;
}
ul li .active p{
    display: none;
}
ul li .active .uil{
    font-size: 20px;
    display: flex;
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
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>your orders</h3>
   <p> <a href="index.php">home</a> / orders </p>
</div>

<section class="placed-orders">

   <h1 class="title">Placed Orders</h1>

   <div class="box-container">

      <?php

         $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE user_id = '$user_id'") or die('query failed');
         if(mysqli_num_rows($order_query) > 0){
            while($fetch_orders = mysqli_fetch_assoc($order_query)){
      ?>
      <div class="box">
         <p>Placed On: <span><?php echo $fetch_orders['placed_on']; ?></span> </p>
         <p>Order Number: <span><?php echo $fetch_orders['id']; ?></span> </p>
         <p>Payment Method: <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p>Your Orders: <span><?php echo $fetch_orders['total_products']; ?></span> </p>
         <p>Total: <span>₱<?php echo $fetch_orders['total_price']; ?></span> </p>
         <p>Payment Status: <span style="color:<?php if($fetch_orders['payment_status'] == 'pending'){ echo 'red'; }else{ echo 'green'; } ?>;"><?php echo $fetch_orders['payment_status']; ?></span> </p>
         </div>
      <?php
       }
      }else{
         echo '<p class="empty">No orders placed yet!</p>';
      }
      ?>
   </div>

</section>

<footer>
    <p>Beauty and the Bread</p>
	<div class="social">
      <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
      <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
      <a href="https://twitter.com/" class="fab fa-twitter"></a>
	</div>
	<p class="end"><span>Copyright By Beauty and the Bread. All Rights Reserved.</span></p>
</footer>

</body>
</html>