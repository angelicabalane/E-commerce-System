<header class="header">
        <div class="logoContent">
            <a href="index.php" class="logo"><img src="bnblogo.png" alt=""></a>
            <h1 class="logoName">Beauty and the Bread</h1>
        </div>
		<nav class="navbar">
			<ul>
				<li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
				<li><a href="orders.php">Orders</a></li>
				<li><a href="aboutus.php">About Us</a></li>
			</ul>
		</nav>
	    </div>

		<div class="icons">
            
            <?php
               $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
               $cart_rows_number = mysqli_num_rows($select_cart_number); 
            ?>
            <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
         </div>

         <div class="user-box">
            <p>Email: <span><?php echo $_SESSION['user_email']; ?></span></p>
            <a href="logout.php" class="delete-btn">logout</a>
         </div>
</header>