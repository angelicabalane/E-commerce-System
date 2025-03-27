<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      
      
      <a href="admin_page.php" class="logo">Beauty<span>andthe</span>Bread | <span>ADMIN</span></a>

      <nav class="navbar">
         <a href="admin_page.php">HOME</a>
         <a href="admin_products.php">PRODUCTS</a>
         <a href="admin_orders.php">ORDERS</a>
         <a href="admin_users.php">USERS</a>
         
      </nav>

      

      

      <div class="account-box">
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="admin_logout.php" class="delete-btn">logout</a>
      </div>

   </div>

</header>