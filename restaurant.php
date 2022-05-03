<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food 4U</title>
    <link rel="stylesheet" href="css/MainCss.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="node_modules/aos/dist/aos.css" rel="stylesheet">

</head>
<body>
<!-- MENU -->
<section class="nd-flex justify-content-end avbar custom-navbar navbar-fixed-top navbarStyle fixed-top " role="navigation">

    <div  class="navbar navbar-expand-lg main-nav px-0 ">
        <div class="container ">
            <a class="navbar-brand" href="Index.php">
                Food<span style="color: #26e07f;font-size: 30px">4</span>U
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav text-uppercase">
                    <li class="nav-item"><a href="#homeSection" class="nav-link ">home</a></li>
                    <li class="nav-item"><a href="#aboutUsSection" class="nav-link ">about us</a></li>
                    <li class="nav-item"><a href="#customersSection" class="nav-link ">Customers</a></li>
                    <li class="nav-item"><a href="#downloadSection" class="nav-link ">download</a></li>
                    <li class="nav-item"><a href="#TeamSection" class="nav-link ">team</a></li>
                    <li class="nav-item"><a href="#ContactUsSection" class="nav-link ">Contact Us</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link ">LogIn</a></li>
                </ul>
        </div>
    </div>

    </div>
</section>

<div class="container homeSection box " id="homeSection">
    <video autoplay muted loop id="myVideo" preload="auto" poster="images/pexels-cottonbro-4604599.jpg">
        <source  src="media/production%20ID_4605386.mp4" type="video/mp4">
    </video>
    <div class="blackDiv"></div>
    <div class="homeContent container d-flex">
        <div class="row h-100">
            <div class="col-md-8 align-self-center">
                <h1 class="text-start h1" data-aos="fade-right" data-aos-duration="500" data-aos-delay="500">Food 4U</h1>
                <p class="text-start display-4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800">We offer a variety of services with the best quality, you can explore many restaurants in your area and order your favorite meals to your door</p>
                <p class="text-start display-4" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">Order your meal now!</p>
                <div class="row">
                    <div class="col-md-3">
                        <button class="buttonTransparent" onclick="window.location.href='login.php'" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="1000">Get Started</button>
                    </div>
                    <div class="col-md-3">
                        <button class="buttonBorderd" onclick="window.location.href='#aboutUsSection'" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="1000">Learn More</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="h-auto d-inline-block aboutUsSection box" id="aboutUsSection">
<div class=" aboutUsContent container"  >
    <div class="row">
        <div class="col-sm-6">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Many delicious meals are waiting for you!</h1>
            <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700">Food4U website was established in 2022, the site has many restaurants with different meals from all over Palestine, you can create an account and start browsing the menu of restaurants around you and order the most delicious meals to have it delivered to your door</p>
            <p data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900">Many offers and discounts await you when you order through our website, in addition to many other features such as cash on delivery and bookmark restaurants / meals</p>
        </div>
        <div class="col-sm-6">
            <div class="container " data-aos="fade-left" data-aos-duration="500" data-aos-delay="50">
                <div class="row g-1" >
                    <div class="col-sm-6">
                        <img src="images/pexels-polina-tankilevitch-4109074.jpg" class="foodImages fImage1" alt="food Image">
                    </div>
                    <div class="col-sm-6 g-1">
                        <div class="row" style="margin-bottom: 3px;">
                            <div class="col-sm-12">
                                <img src="images/pexels-rajesh-tp-1633578.jpg" class=" foodImages fImage2" alt="food Image">
                            </div>
                        </div>
                        <div class="row " style="margin-top: 3px;">
                            <div class="col-sm-12">
                                <img src="images/pexels-julie-aagaard-2097090.jpg" class="foodImages fImage2 " alt="food Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<div class="customersSection box h-auto d-inline-block  " id="customersSection">
    <div class=" customersContent container">
        <div class="row">
            <div class="col-lg-6" >
                <div class="customerReview" data-aos="fade-right" data-aos-duration="500" data-aos-delay="100" data-aos-easing="ease-in-out">
                    <p><span data-aos="zoom-out" data-aos-duration="500" data-aos-delay="500">❝</span>I get a lot of discounts through this site, it contains many meals and restaurants that I like to order from.<br>I recommend everyone to use it<span data-aos="zoom-out" data-aos-duration="500" data-aos-delay="500">❞</span></p>
                    <div>
                        <img src="images/person1.jpg" alt="Person">
                        <h5>Abdullah Obaid</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="customerReview" data-aos="fade-left" data-aos-duration="500" data-aos-delay="100" data-aos-easing="ease-in-out">
                        <p><span data-aos="zoom-out" data-aos-duration="500" data-aos-delay="500">❝</span>I get a lot of discounts through this site, it contains many meals and restaurants that I like to order from.<br>I recommend everyone to use it<span data-aos="zoom-out" data-aos-duration="500" data-aos-delay="500">❞</span></p>
                        <div>
                            <img src="images/person2.jpg" alt="Person">
                            <h5>Moahmmad Nassar</h5>
                        </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="customerReview" data-aos="fade-right" data-aos-duration="500" data-aos-delay="200" data-aos-easing="ease-in-out">
                    <p><span data-aos="zoom-out" data-aos-duration="500" data-aos-delay="500">❝</span>I get a lot of discounts through this site, it contains many meals and restaurants that I like to order from.<br>I recommend everyone to use it<span data-aos="zoom-out" data-aos-duration="500" data-aos-delay="500">❞</span></p>
                    <div>
                        <img src="images/person3.jpg" alt="Person">
                        <h5>Ahmad Khudear</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="customerReview" data-aos="fade-left" data-aos-duration="500" data-aos-delay="200" data-aos-easing="ease-in-out">
                    <p><span data-aos="zoom-out" data-aos-duration="500" data-aos-delay="500">❝</span>I get a lot of discounts through this site, it contains many meals and restaurants that I like to order from.<br>I recommend everyone to use it<span data-aos="zoom-out" data-aos-duration="500" data-aos-delay="500">❞</span></p>
                    <div>
                        <img src="images/person4.jpg" alt="Person">
                        <h5>Rami Jarrar</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="downloadSection box " id="downloadSection">
    <div class="row ">
        <div class="col-md-6 align-self-center">
            <h1 class="text-start h1" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">Download Our New App</h1>
            <p class="text-start" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">To get many additional features, download our application now, many discounts on meals are waiting for you!</p>
            <button class="buttonBorderd"data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500">Coming Soon</button>
        </div>
        <div class="col-md-6">
            <img class="phoneImage" src="images/front-cells1.png" alt="">


        </div>
    </div>
</div>

<div class="TeamSection box h-auto d-inline-block " id="TeamSection">
    <div class="container TeamContent">
        <div class="row ">
            <div class="col-md-1">

            </div>
            <div class="col-md-5">
                <div class="teamMember" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="images/AhmadOthman.jpg" alt="AhmadOthman">
                    <div class="memSocial">
                        <button href="" class="facebookIcon"></button>
                        <button href="" class="instagramIcon"></button>
                        <button href="" class="twitterIcon"></button>
                        <button href="" class="siteIcon"></button>
                    </div>
                    <div class="memInfo">
                        <h3>Ahmad Othman</h3>
                        <h7>Computer Engineering</h7>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="teamMember" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="images/AhmadOthman.jpg" alt="AhmadOthman">
                    <div class="memSocial">
                        <button href="" class="facebookIcon"></button>
                        <button href="" class="instagramIcon"></button>
                        <button href="" class="twitterIcon"></button>
                        <button href="" class="siteIcon"></button>
                    </div>
                    <div class="memInfo">
                        <h3>Ahmad Othman</h3>
                        <h7>Computer Engineering</h7>
                    </div>
                </div>
            </div>
            <div class="col-md-1">

            </div>
        </div>
        <div class="row " >
            <div class="col-md-12 pad" >
                <button  onclick="location.href='mailto:hr@food4u.com?subject=JopApplication'" class="grayButton">Join Our Team</button>
            </div>
        </div>
    </div>
</div>
<div class="ContactUsSection box  h-auto d-inline-block " id="ContactUsSection">
    <div class="ContactUsContent container">
        <div class="row">
            <div class="col-md-6">
                <form action="post">
                    <table>
                        <tr>
                            <td data-aos="fade-up" data-aos-duration="500" data-aos-delay="100"><label>Contact Us</label></td>
                        </tr>
                        <tr>
                            <td data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300"><input class="textField" type="text" placeholder="Your Email"><div class="line"></div></td>
                        </tr>
                        <tr>
                            <td data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><input class="textField" type="text" placeholder="Subject"><div class="line"></td>
                        </tr>
                        <tr>
                            <td data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500"><textarea class="textArea"  id="" cols="40" rows="10" placeholder="Text"></textarea></td>
                        </tr>
                        <tr>
                            <td data-aos="fade-up" data-aos-duration="1500" data-aos-delay="800"><input class="buttonBorderdToggle" type="submit" value="Send"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-md-6 ">
                <div data-aos="fade-left" data-aos-duration="500" data-aos-delay="50" class="mapouter blackShadow"><div class="gmap_canvas"><iframe src="https://maps.google.com/maps?q=an%20najah%20&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=&amp;output=embed" id="gmap_canvas" frameborder="0" scrolling="no" style="width: 100%; height: 600px;"></iframe><a href="https://fnftest.net" style="display:none">FNF Character Test</a><style>.mapouter{position:relative;text-align:right;height:600px;width:100%;}</style><a href="https://www.googlemapsiframegenerator.com" style="display:none">Google Maps Iframe Generator - Free Html Embed Code</a><style>.gmap_canvas{overflow:hidden;background:none!important;height:600px;width:100%;}</style></div></div>
            </div>
        </div>
    </div>
</div>






<script src="node_modules/aos/dist/aos.js"></script>
<script src="js/mainScript.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
