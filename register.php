<?php

include 'config.php';

if(isset($_POST['submit'])){

   $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
   $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
   $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
   $birthday = mysqli_real_escape_string($conn, $_POST['birthday']);
   $age = mysqli_real_escape_string($conn, $_POST['age']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $contactnumber = mysqli_real_escape_string($conn, $_POST['contactnumber']);
   $housenumber = mysqli_real_escape_string($conn, $_POST['housenumber']);
   $streetname = mysqli_real_escape_string($conn, $_POST['streetname']);
   $barangay = mysqli_real_escape_string($conn, $_POST['barangay']);
   $city = mysqli_real_escape_string($conn, $_POST['city']);
   $region = mysqli_real_escape_string($conn, $_POST['region']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `users`(firstname, middlename, lastname, birthday, age, gender, contactnumber, housenumber, streetname, barangay, city, region, email, password, user_type) VALUES('$firstname', '$middlename', '$lastname', '$birthday', '$age', '$gender', '$contactnumber',
'$housenumber', '$streetname', '$barangay', '$city', '$region', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
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
   <title>User Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>



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
   
<div class="form-container">

      <form action="" method="post">
      <h3>User Register</h3>
      <input type="text" id="firstname" name="firstname" placeholder="First Name" required class="box">
      <input type="text" id="middlename" name="middlename" placeholder="Middle Name" class="box">
      <input type="text" id="lastname" name="lastname" placeholder="Last Name" required class="box">
      <input type="date" id="birthday" name="birthday" placeholder="Birthday" required class="box">
      <input type="number" id="age" name="age" placeholder="Age" required class="box">
      <select name="gender" id="gender" class="box">
				<option value="sg">Select Gender</option>
				<option value="f">Female</option>
				<option value="m">Male</option>
				<option value="r">Rather not say</option>
		</select>
      <input type="text" name="contactnumber" id="contactnumber" placeholder="Contact Number" required class="box">

      <input type="text" name="housenumber" id="housenumber" placeholder="House Number" required class="box">
		<input type="text" name="streetname" id="streetname" placeholder="Street Name" required class="box">
		<input type="number" name="barangay" id="barangay" placeholder="Barangay" required class="box">
		<input type="text" name="city" id="city" placeholder="City" required class="box">
      <select name="region" id="region" class="box">
				<option value="sr">Select Region</option>
				<option value="one">Region I</option>
				<option value="two">Region II</option>
				<option value="three">Region III</option>
            <option value="ncr">NCR</option>
            <option value="foura">Region IV-A</option>
            <option value="fourb">Region IV-B</option>
            <option value="five">Region V</option>
            <option value="six">Region VI</option>
            <option value="seven">Region VII</option>
            <option value="eight">Region VIII</option>
            <option value="nine">Region IX</option>
            <option value="ten">Region X</option>
            <option value="eleven">Region XI</option>
            <option value="twelve">Region XII</option>
            <option value="thirteen">Region XIII</option>
            <option value="car">CAR</option>
            <option value="barmm">BARMM</option>
		</select>
   
      <input type="email" name="email" id="email" placeholder="Email" required class="box">
      <input type="password" name="password" id="password" placeholder="Password" pattern="^.{8,}$" title="Password must contain at least 8 characters." required class="box">
      <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" pattern="^.{8,}$" title="Password must contain at least 8 characters." required class="box">
      <select name="user_type" id="user_type" class="box">
         <option value="ut">User Type</option>
         <option value="user">User</option>
      </select>
      <input type="submit" name="submit" value="register now" class="btn">
      <p>Already have an account? <a href="login.php">Login Now</a></p>
      </form>

</div>

<script>
   function country_code() {
		var val = document.getElementById("country").value;
		
		if(val === "select country") {
			document.getElementById("contactnumber").value = "";
		}
		else if(val === "ph") {
			document.getElementById("contactnumber").value = "63";
		}
		else if(val === "bn") {
			document.getElementById("contactnumber").value = "673";
		}
		else if(val === "kh") {
			document.getElementById("contactnumber").value = "855";
		}
		else if(val === "tl") {
			document.getElementById("contactnumber").value = "670";
		}
		else if(val === "id") {
			document.getElementById("contactnumber").value = "62";
		}
		else if(val === "la") {
			document.getElementById("contactnumber").value = "856";
		}
		else if(val === "my") {
			document.getElementById("contactnumber").value = "60";
		}
		else if(val === "mm") {
			document.getElementById("contactnumber").value = "95";
		}
		else if(val === "sg") {
			document.getElementById("contactnumber").value = "65";
		}
		else if(val === "th") {
			document.getElementById("contactnumber").value = "66";
		}
		else if(val === "vn") {
			document.getElementById("contactnumber").value = "84";
		}
	}
</script>

</body>
</html>