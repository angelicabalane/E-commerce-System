<html>
<head>
<title> Beauty and the Bread </title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- swiper link  -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

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

.home{
    min-height: 100vh;
    display: flex;
    align-items: center;
    background: url(bnbbackdrop.jpg) no-repeat;
    background-size: cover;
    background-position: center center;
}
.homeContent{
    width: 50%;
    float: left;
    text-align: center;
    padding: 4rem;
}
.homeContent h2{
    font-size: 7rem;
    font-weight: bolder;
    margin-bottom: 2rem;
    line-height: 7rem;
    text-shadow: var(--box-shadow);
}
.homeContent p{
    font-size: 1.8rem;
    line-height: 2;
    margin-bottom: 2rem;
}
.home-btn{
    height: 3rem;
}
.home-btn button{
    font-size: 1.8rem;
    background-color: #703409;
    color: #ebca94;
    border-color: #703409;
    border-radius: .7rem;
    padding: .7rem 2.4rem;
    cursor: pointer;
}
.home-btn button:hover{
    font-size: 2rem;
}

.obp h3{
    font-size: 4.5rem;
    font-weight: bolder;
    margin-top: 2rem;
    margin-bottom: 2rem;
    line-height: 5rem;
    text-align: center;
}
.products{
    background-color: #ffffff;
}
.products .products-row .box{
    display: flex;
    align-items: center;
    background-color: #ffffff;
    flex-wrap: wrap;
}
.products .products-row .box .img{
    flex: 1 1 45rem;
}
.products .products-row .box .img img{
    width: 90%;
    padding: 5rem;
}
.products .products-row .box .content{
    flex: 1 1 45rem;
    padding: 2rem;
}
.products .products-row .box .content h3{
    font-size: 3.5rem;
}
.products .products-row .box .content p{
    font-size: 1.6rem;
    padding: 1rem 0;
    line-height: 1.8;
}
.products-btn{
    height: 3rem;
    margin-top: 2rem;
    margin-bottom: 3rem;
}
.products-btn button{
    font-size: 1.5rem;
    background-color: #703409;
    color: #ebca94;
    border-color: #703409;
    border-radius: .7rem;
    padding: .7rem 2rem;
    cursor: pointer;
}
.products-btn button:hover{
    font-size: 2rem;
}
.swiper-pagination-bullet{
  background-color: #ebca94;
}
.swiper-pagination-bullet-active{
  background-color: #703409;
}
.swiper-button-next,
.swiper-button-prev{
  color: #703409;
}

.newsletter{
    background: url(images/breadd.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.newsletter form{
    max-width: 50rem;
    text-align: center;
    padding: 5rem 0;
    margin-left: 5rem;
}
.newsletter form h4{
    font-size: 3rem;
    color: #e3dfdb;
    padding-bottom: .7rem;
}
.newsletter form p{
    font-size: 1.8rem;
    color: #e3dfdb;
    padding-bottom: .7rem;
}
.email .box{
    width: 100%;
    margin: .7rem 0;
    padding: 1rem 1.2rem;
    color: #e3dfdb;
    border: none;
    border-radius: .5rem;
}
.newsletter-btn{
    height: 3rem;
}
.newsletter-btn button{
    width: 30%;
    font-size: 1.8rem;
    background-color: #e3dfdb;
    color: #341b09;
    border: none;
    border-radius: 3rem;
    padding: .5rem .5rem;
    cursor: pointer;
}
.newsletter-btn button:hover{
    font-size: 2rem;
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

.swiper-pagination-bullet{
    background-color: var(--black);
}
.swiper-button-next{
    color: var(--black);
}
.swiper-button-prev{
    color: var(--black);
}


/* media queries for web responsive */

@media (max-width:991px){
    html{
        font-size: 55%;
    }
    .header{
        padding: 1.3rem 3rem;
    }
    .home .homeContent{
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

    .home .homeContent{
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

	<!--home starts-->
	<section class="home" id="home">
        <div class="homeContent">
            <h2>Beauty and the Bread</h2>
            <p>Gourmet cakes, pastries, and bread with every flavor imaginable.</p>
        <div class="home-btn">
        <a href="aboutus.php"><button>Learn More</button></a>
        </div>
        </div>
    </section>
	<!--home ends-->

    <!--products starts-->
    <section class="products" id="products">
        <div class="obp">
            <h3>Our Best-selling Pastries</h3>
        </div>

        <div class="swiper products-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                        <img src="images/ubecheese.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Ube Cheese Pandesal</h3>
                        <p>Ube pandesal is your favourite Filipino bread roll but ube flavoured! Make it plain, with cheese, with ube 
                            halaya, with cheese and ube halaya, or with a mouthwatering coconut topping. Have it for breakfast, dip 
                            it in coffee Filipino-style, enjoy.</p>
                        <p>Looking for something sweeter? Try these ube bread rolls.</p>
                        <div class="products-btn">
                        <a href="products.php"><button>Buy Now</button></a>
                        </div>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/garlictoast.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Garlic Toast</h3>
                        <p>Consists of bread (usually a baguette, sour dough, or bread such as ciabatta), topped with garlic and olive 
                            oil or butter and may include additional herbs, such as oregano or chives. It is then either grilled until 
                            toasted or baked in a conventional or bread oven.</p>
                        <p>Looking for distinct, smokey taste? Try these garlic toast.</p>
                        <div class="products-btn">
                        <a href="products.php"><button>Buy Now</button></a>
                        </div>
                    </div>
                </div>
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="images/cheesemonay.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Cheese Monay</h3>
                        <p>Love the aroma and taste of freshly baked bread? Monay is a slightly sweet, hearty bread roll perfect for 
                            breakfast or merienda. Delicious with butter, jam, or your favorite spread! Nothing beats the warmth of 
                            fresh bread hot out of the oven.</p>
                        <p>Looking for cheesy bread? Try these cheese monay.</p>
                        <div class="products-btn">
                        <a href="products.php"><button>Buy Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--swiper js link-->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".products-row", {
    spaceBetween: 30,
    loop:true,
    centeredSlides:true,
    autoplay:{
        delay:9500,
        disableOnInteraction:false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation:{
        nextE1 :".swiper-button-next",
        prevE1 :".swiper-button-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1024: {
        slidesPerView: 1,
      },
    },
    });
    </script>
    <!--products ends-->

    <!--newsletter starts-->
    <section class="newsletter">
        <form action="" method="post">
            <h4>Sign up for our Newsletter</h4>
            <p>Get the most recent updates and specials directly to your inbox.<br>Subscribe now!</p>
            <div class="email">
            <input type="email" name="email" id="email" placeholder="Enter Your Email" class="box">
            </div>
            <div class="newsletter-btn">
            <a href="#"><button>Subscribe</button></a>
            </div>
        </form>
    </section>
    <!-- newsletter ends-->
    
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

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>
</html>