<html>
<head>
<title> Beauty and the Bread </title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- cdn icon link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

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

.contactus{
	width: 100%;
	padding: 100px 0px;
	background: url(images/bnbbackground.jpg) no-repeat;
}
.title h2{
	color: #703409;
	font-size: 50px;
	width: 1000px;
	margin: 3px auto;
	text-align: center;
}
.container{
	font-family: 'Belleza';
	display: flex;
    margin-top: 5%;
}
.iframe-wrapper{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-left: 13%;
}
.iframe-wrapper iframe{
    height: 125%;
    width: 500px;
}
.card{
    height: 300px;
    width: 300px;
    padding: 20px 35px;
    background: #ebca94;
    border-radius: 20px;
    margin: 15px;
    position: relative;
    overflow: hidden;
    text-align: left;
}
.card h3{
    font-family: 'Belleza';
	color: #703409;
	letter-spacing: 2px;
	font-size: 30px;
    text-align: center;
    margin-bottom: 20px;
}
.contacts h4{
    font-family: 'Belleza';
	color: #703409;
	letter-spacing: 2px;
	font-size: 20px;
}
.contacts p{
    color: #703409;
	font-size: 15px;
	line-height: 27px;
    margin-bottom: 10px;
}

.aboutus{
	width: 100%;
	padding: 5px 0px;
	background: url(images/bnbbackground.jpg) no-repeat;
}
.title h2{
	color: #703409;
	font-size: 50px;
	width: 1000px;
	margin: 3px auto;
	text-align: center;
}
.box{
	font-family: 'Belleza';
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 300px;
}
.card{
	height: 300px;
	width: 300px;
	padding: 20px 35px;
	background: #ebca94;
	border-radius: 20px;
	margin: 15px;
	position: relative;
	overflow: hidden;
	text-align: left;
}
.card i{
	font-size: 50px;
	display: block;
	text-align: center;
	margin: 30px 0px;
}
h4{
	font-family: 'Belleza';
	color: #703409;
	letter-spacing: 2px;
	font-size: 22px;
}
.pra p{
	color: #703409;
	font-size: 15px;
	line-height: 27px;
	margin-bottom: 10px;
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
    <!--header starts-->
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
	</header>
	<!--header ends-->

	<!--contact us starts-->
    <div class="contactus" id="contactus">
        <div class="title">
            <h2>Contact Us</h2>
        </div>
        <div class="container">
        <div class="iframe-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61732.10029897134!2d120.96087105820315!3d14.754586899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1cc9c9c83e9%3A0x303a03298da24ddb!2sUniversity%20of%20Caloocan%20City%20-%20Congressional%20Campus!5e0!3m2!1sen!2sph!4v1679652625680!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" onload="resizeIframe(this)"></iframe>
        </div>
			<div class="card">
				<h3>Simply Notify Us</h3>
				<div class="contacts">
                    <h4>PHONE</h4>
					<p>+63 999 999 9999</p>
                    <h4>EMAIL</h4>
					<p>beautyandthebread@gmail.com</p>
                    <h4>SOCIAL MEDIA ACCOUNTS</h4>
					<p>Facebook: Beauty and the Bread<br>Instagram: @beautyandthebread<br>Twitter: @beautyandthebread</p>
                </div>
            </div>
        </div>
    </div>
    <!--contact us ends-->

    <!--about us starts-->
	<div class="aboutus" id="aboutus">
		<div class="title">
			<h2>About Us</h2>
		</div>

		<div class="box">
			<div class="creators-row">
			<div class="card">
				<img src="images/angelica.jpg" class="profile" alt="Image" style="width:190px;height:190px;">
				<h4>Angelica Jean A. Balane</h4>
				<div class="pra">
					<p>Age: 20 years old<br>Course: BS Information System<br>School: University of Caloocan City</p>
				</div>
			</div>

			<div class="card">
				<img src="images/maryjoy.jpg" class="profile" alt="Image" style="width:190px;height:190px;">
				<h4>Mary Joy M. Bonganay</h4>
				<div class="pra">
					<p>Age: 21 years old<br>Course: BS Information System<br>School: University of Caloocan City</p>
				</div>
			</div>

            <div class="card">
				<img src="images/marinela.jpg" class="profile" alt="Image" style="width:190px;height:190px;">
				<h4>Marinela Joy A. Ibay</h4>
				<div class="pra">
					<p>Age: 20 years old<br>Course: BS Information System<br>School: University of Caloocan City</p>
				</div>
			</div>
			</div>
			<div class="creators-row">
            <div class="card">
				<img src="images/jurilaine.jpg" class="profile" alt="Image" style="width:190px;height:190px;">
				<h4>Jurilaine Anne H. Pacamara</h4>
				<div class="pra">
					<p>Age: 20 years old<br>Course: BS Information System<br>School: University of Caloocan City</p>
				</div>
			</div>
            <div class="card">
				<img src="images/daisy.jpg" class="profile" alt="Image" style="width:190px;height:190px;">
				<h4>Daisy G. Pajares</h4>
				<div class="pra">
					<p>Age: 20 years old<br>Course: BS Information System<br>School: University of Caloocan City</p>
				</div>
			</div>

            <div class="card">
				<img src="images/aubrey.jpeg" class="profile" alt="Image" style="width:190px;height:190px;">
				<h4>Aubrey Kate M. Quinonez</h4>
				<div class="pra">
					<p>Age: 20 years old<br>Course: BS Information System<br>School: University of Caloocan City</p>
				</div>
			</div>
			</div>
		</div>
	</div>
	<!--about us ends-->

    <!--footer starts-->
    <footer>
		<p>Beauty and the Bread</p>
		<div class="social">
			<a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
            <a href="https://twitter.com/" class="fab fa-twitter"></a>
		</div>
		<p class="end"><span>Copyright By Beauty and the Bread. All Rights Reserved.</span></p>
	</footer>
    <!--footer ends-->
</body>
</html>