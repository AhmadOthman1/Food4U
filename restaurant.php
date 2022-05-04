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
$name="";
$profileImage="";
$description="";
$coverImage="";
$facebookLink="";
$InstagramLink="";
$siteLink="";
try{
    $conn = new mysqli('localhost','root','','food4u');
    $qrstr="SELECT `name`, `level`, `profileImage`,`description`, `coverImage`, `facebookLink`, `InstagramLink`, `siteLink` FROM user ,restaurant WHERE user.Email=restaurant.Email and user.Email='".$_SESSION['Email']."'";
    $res=$conn->query($qrstr);
    $row=$res->fetch_object();
    $name=$row->name;
    $profileImage=$row->profileImage;
    $description=$row->description;
    $coverImage=$row->coverImage;
    $facebookLink=$row->facebookLink;
    $InstagramLink=$row->InstagramLink;
    $siteLink=$row->siteLink;
    $conn->close();
}
catch (Exception $ex){
    echo "<p>".$ex->getTraceAsString()."</p>";
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
                    <li class="nav-item"><a href="" class="  nav-link "><?php echo '<img class="navImage" src="data:image/jpeg;base64,'.base64_encode($profileImage).'"/>' ?><span id="resName" style="margin-left: 5px; font-size: 12px;font-weight: 600"><?php echo $name?></span></a></li>
                </ul>

            </div>
        </div>

    </div>

</section>
<div class="mainPage">
    <div class="row">
        <div class="col-md-12">
            <?php echo '<img class="coverImage" src="data:image/jpeg;base64,'.base64_encode($coverImage).'"/>' ?>
            <?php echo '<img class="profileImage" src="data:image/jpeg;base64,'.base64_encode($profileImage).'"/>' ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 p-0">
            <div class="profileTaps">
                <ul class="nav nav-tabs nav-justified flex-column" id="myTab" role="tablist">
                    <li class=" nav-item"><a class="nav-link active" id="profileInfo" onclick="this.classList.add('active');document.getElementById('editProfile').classList.remove('active')" data-toggle="tab" href="#user" role="tab" aria-controls="home" aria-selected="true">User</a></li>
                    <li class=" nav-item"><a class="nav-link" onclick="this.classList.add('active');document.getElementById('profileInfo').classList.remove('active')" id="editProfile" data-toggle="tab" href="#Resteurent" role="tab" aria-controls="profile" aria-selected="false">Restaurant</a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 p-0">
            <div class="profileContentCol">
                asdasd
            </div>

        </div>
    </div>
</div>





<script src="node_modules/aos/dist/aos.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
