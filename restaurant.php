<!--aAa-->
<?php
session_start();
$_SESSION['validmem']=1;
$_SESSION['Email']='a@gmail.com';
if(isset($_SESSION['validmem'])){
    if($_SESSION['validmem']==1){

    }
    else{
        header('location:Index.php');
    }
}
else{
    header('location:Index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food 4U</title>
    <link rel="stylesheet" href="css/Restaurant.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="node_modules/aos/dist/aos.css" rel="stylesheet">

</head>
<body>
<!-- MENU -->
<section class="nd-flex justify-content-end avbar custom-navbar navbar-fixed-top navbarStyle fixed-top " role="navigation">
    <div  class="navbar navbar-expand-lg main-nav px-0 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="Restaurant.php">
                Food<span style="color: #26e07f;font-size: 30px">4</span>U
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="nav navbar-nav navbar-center align-items-center">
                    <li class="nav-item"><input class="SearchTextField" type="text" placeholder="Search"><button class="SearchButton" type="button"></button></li>
                </ul>
                <ul class="nav navbar-nav navbar-right text-uppercase align-items-center">
                    <li class="nav-item"><a href="#ContactUsSection" class="nav-link ">Orders</a></li>
                    <li class="nav-item"><a href="#ContactUsSection" class="nav-link ">Menu</a></li>
                    <li class="nav-item"><a href="" class="  nav-link "><img class="navImage" src="images/person1.jpg"><span id="resName" style="margin-left: 5px; font-size: 12px;font-weight: 600">Resturant Name</span></a></li>
                </ul>

            </div>
        </div>

    </div>

</section>







<script src="node_modules/aos/dist/aos.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
