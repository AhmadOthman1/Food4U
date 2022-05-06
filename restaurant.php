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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            if(activeTab){
                $('#myTab a[href="' + activeTab + '"]').tab('show');
            }
        });
    </script>
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
                    <li class="nav-item"><a href="RMenu.php" class="nav-link ">Menu</a></li>
                    <li class="nav-item"><a href="#ContactUsSection" class="nav-link ">Orders</a></li>
                    <li class="nav-item"><a href="#ContactUsSection" class="nav-link ">Reviews</a></li>
                    <li class="nav-item"><a href="restaurant.php" class="  nav-link "><?php echo '<img class="navImage" src="data:image/jpeg;base64,'.base64_encode($profileImage).'"/>' ?><span id="resName" style="margin-left: 5px; font-size: 12px;font-weight: 600"><?php echo $name?></span></a></li>
                    <li class="nav-item"><a href="logOut.php" class="logoutButton nav-link "></a></li>
                </ul>
            </div>
        </div>

    </div>

</section>
<div class="mainPage">
    <div class="row">
        <div class="col-md-12">
            <?php echo '<img class="coverImage" src="data:image/jpeg;base64,'.base64_encode($coverImage).'"/>' ?>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 p-0 justify-content-center">

            <div class="profileTaps">
                <ul class="nav nav-tabs nav-justified flex-column" id="myTab" role="tablist">
                    <li class=" nav-item"><?php echo '<img class="profileImage align-self-center" src="data:image/jpeg;base64,'.base64_encode($profileImage).'"/>' ?></li>
                    <li class=" nav-item" style="margin-top: 20px;"><a class="nav-link active" id="MyProfile-tab"  data-toggle="tab" href="#MyProfileTab" role="tab" aria-controls="MyProfile" aria-selected="true" onclick="window.location=window.location;">My Profile</a></li>
                    <li class=" nav-item"                           ><a class="nav-link" id="EditMyInformation-tab"   data-toggle="tab" href="#EditMyInformationTab" role="tab" aria-controls="EditMyInformation" aria-selected="false" onclick="window.location=window.location;">Edit My Information</a></li>
                    <li class=" nav-item"                           ><a class="nav-link" id="ChangePassword-tab"   data-toggle="tab" href="#ChangePasswordTab" role="tab" aria-controls="ChangePassword" aria-selected="false" onclick="window.location=window.location;">Change Password</a></li>
                </ul>

            </div>
        </div>
        <div class="col-lg-9 p-0">
            <div class="tab-content profileContentCol" id="myTabContent">
                <div class="tab-pane fade show active" id="MyProfileTab" role="tabpanel" aria-labelledby="MyProfile-tab">
                    <div class="row profile-form">
                        <div class="col-md-12">
                            <table>
                                <tr>
                                    <td><label for="Name">Name:</label></td>
                                    <td><input id="Name" type="text" placeholder="Name *" value="<?php echo $name?>" disabled/></td>
                                </tr>
                                <tr>
                                    <td><label for="Email">Email:</label></td>
                                    <td><input id="Email" type="text" placeholder="Email *" value="<?php echo $_SESSION['Email']?>" disabled/></td>
                                </tr>
                                <tr>
                                    <td><label for="Description">Description:</label></td>
                                    <td><textarea type="text" id="Description" placeholder="Description *" disabled cols="30" rows="5" aria-disabled="true"><?php echo $description?></textarea></td>
                                </tr>
                                <tr>
                                    <td><label for="FbLink">Facebook Link:</label></td>
                                    <td><input id="FbLink" type="text" placeholder="Facebook Link *" value="<?php echo $facebookLink?>" disabled/></td>
                                </tr>
                                <tr>
                                    <td><label for="FbLink">Instagram Link:</label></td>
                                    <td><input id="FbLink" type="text" placeholder="Instagram Link *" value="<?php echo $InstagramLink?>" disabled/></td>
                                </tr>
                                <tr>
                                    <td><label for="FbLink">Site Link:</label></td>
                                    <td><input id="FbLink" type="text" placeholder="Site Link *" value="<?php echo $siteLink?>" disabled/></td>
                                </tr>
                                <tr>
                                    <td><label>Phone:</label></td>
                                    <td>
                                        <table>
                                            <?php
                                            try{
                                                $conn = new mysqli('localhost','root','','food4u');
                                                $qrstr="SELECT `phone` FROM `restaurantphone` WHERE `Email`='".$_SESSION['Email']."'";
                                                $res=$conn->query($qrstr);
                                                for($i=0;$i<$res->num_rows;$i++) {
                                                    $row = $res->fetch_object();
                                                    $phone = $row->phone;
                                                    echo '<tr><td><input type="text" value="'.$phone.'" placeholder="Phone *" disabled/></td></tr>';
                                                }
                                                $conn->close();
                                            }
                                            catch (Exception $ex){
                                                echo "<p>".$ex->getTraceAsString()."</p>";
                                            }
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Location:</label></td>
                                    <td>
                                        <table>
                                            <?php
                                            try{
                                                $conn = new mysqli('localhost','root','','food4u');
                                                $qrstr="SELECT `city`, `address` FROM `restaurantlocation` WHERE `Email`='".$_SESSION['Email']."'";
                                                $res=$conn->query($qrstr);
                                                for($i=0;$i<$res->num_rows;$i++) {
                                                    $row = $res->fetch_object();
                                                    $city = $row->city;
                                                    $address = $row->address;
                                                    echo '<tr><td>
                                                            <input type="text" value="'.$city.'" disabled/>
                                                            </td>
                                                            <td>
                                                            <input type="text" value="'.$address.'" disabled/>
                                                            </td>
                                                            </tr>';
                                                }
                                                $conn->close();
                                            }
                                            catch (Exception $ex){
                                                echo "<p>".$ex->getTraceAsString()."</p>";
                                            }
                                            ?>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="EditMyInformationTab" role="tabpanel" aria-labelledby="EditMyInformation-tab">
                    <div class="row editProfile-form">
                        <div class="col-md-12">
                            <form action="">
                            <table>
                                <tr>
                                    <td><label for="Name">Name:</label></td>
                                    <td><input id="Name" type="text" placeholder="Name *" value="<?php echo $name?>"/></td>
                                </tr>
                                <tr>
                                    <td><label for="Email">Email:</label></td>
                                    <td><input id="Email" type="text" placeholder="Email *" value="<?php echo $_SESSION['Email']?>"/></td>
                                </tr>
                                <tr>
                                    <td><label for="Description">Description:</label></td>
                                    <td><textarea type="text" id="Description" placeholder="Description *" cols="30" rows="5" ><?php echo $description?></textarea></td>
                                </tr>
                                <tr>
                                    <td><label for="FbLink">Facebook Link:</label></td>
                                    <td><input id="FbLink" type="text" placeholder="Facebook Link *" value="<?php echo $facebookLink?>" /></td>
                                </tr>
                                <tr>
                                    <td><label for="FbLink">Instagram Link:</label></td>
                                    <td><input id="FbLink" type="text" placeholder="Instagram Link *" value="<?php echo $InstagramLink?>" /></td>
                                </tr>
                                <tr>
                                    <td><label for="FbLink">Site Link:</label></td>
                                    <td><input id="FbLink" type="text" placeholder="FbLink Link *" value="<?php echo $siteLink?>" /></td>
                                </tr>
                                <tr>
                                    <td><label>Phone:</label></td>
                                    <td>
                                        <table>
                                            <?php
                                            try{
                                                $conn = new mysqli('localhost','root','','food4u');
                                                $qrstr="SELECT `phone` FROM `restaurantphone` WHERE `Email`='".$_SESSION['Email']."'";
                                                $res=$conn->query($qrstr);
                                                for($i=0;$i<$res->num_rows;$i++) {
                                                    $row = $res->fetch_object();
                                                    $phone = $row->phone;
                                                    echo '<tr><td></td><td><input type="text" placeholder="Phone *"value="'.$phone.'" disabled/></td></tr>';
                                                }
                                                $conn->close();
                                            }
                                            catch (Exception $ex){
                                                echo "<p>".$ex->getTraceAsString()."</p>";
                                            }
                                            ?>
                                            <tr>
                                                <td style="width: 100px"><input type="submit" value="+ Add" name="addPhone" class="blackSquaredButton"></td>
                                                <td><input type="text" value="" placeholder="Phone *"/></td>

                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Location:</label></td>
                                    <td>
                                        <table>

                                            <?php
                                            try{
                                                $conn = new mysqli('localhost','root','','food4u');
                                                $qrstr="SELECT `city`, `address` FROM `restaurantlocation` WHERE `Email`='".$_SESSION['Email']."'";
                                                $res=$conn->query($qrstr);
                                                for($i=0;$i<$res->num_rows;$i++) {
                                                    $row = $res->fetch_object();
                                                    $city = $row->city;
                                                    $address = $row->address;
                                                    $j="";$N="";$Tu="";$Tul="";$Q="";$S="";$R="";$jeri="";$jeru="";$B="";$H="";
                                                    if($city == "Jenin")$j="selected";
                                                    elseif ($city == "Nablus")$N="selected";
                                                    elseif ($city == "Tubas")$Tu="selected";
                                                    elseif ($city == "Tulkarm")$Tul="selected";
                                                    elseif ($city == "Qalqilya")$Q="selected";
                                                    elseif ($city == "Salfit")$S="selected";
                                                    elseif ($city == "Ramallah")$R="selected";
                                                    elseif ($city == "Jericho")$jeri="selected";
                                                    elseif ($city == "Jerusalem")$jeru="selected";
                                                    elseif ($city == "Bethlehem")$B="selected";
                                                    elseif ($city == "Hebron")$H="selected";

                                                    echo '<tr>
                                                            <td>
                                                                <select  class="selectInput" >
                                                                    <option'.$j.' value="Jenin">Jenin</option>
                                                                    <option'.$N.' value="Nablus">Nablus</option>
                                                                    <option'.$Tu.' value="Tubas">Tubas</option>
                                                                    <option'.$Tul.' value="Tulkarm">Tulkarm</option>
                                                                    <option'.$Q.' value="Qalqilya">Qalqilya</option>
                                                                    <option'.$S.' value="Salfit">Salfit</option>
                                                                    <option'.$R.' value="Ramallah">Ramallah</option>
                                                                    <option'.$jeri.' value="Jericho">Jericho</option>
                                                                    <option'.$jeru.' value="Jerusalem">Jerusalem</option>
                                                                    <option'.$B.' value="Bethlehem">Bethlehem</option>
                                                                    <option'.$H.' value="Hebron">Hebron</option>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input type="text" value="'.$address.'" />
                                                            </td>
                                                            </tr>';
                                                }
                                                $conn->close();
                                            }
                                            catch (Exception $ex){
                                                echo "<p>".$ex->getTraceAsString()."</p>";
                                            }
                                            ?>
                                            <tr>
                                                <td style="width: 100px"><input type="submit" value="+ Add" name="addLocation" class="blackSquaredButton"></td>
                                                <td>

                                                    <select class="selectInput" >
                                                        <option selected value="Jenin">Jenin</option>
                                                        <option value="Nablus">Nablus</option>
                                                        <option value="Tubas">Tubas</option>
                                                        <option value="Tulkarm">Tulkarm</option>
                                                        <option value="Qalqilya">Qalqilya</option>
                                                        <option value="Salfit">Salfit</option>
                                                        <option value="Ramallah">Ramallah</option>
                                                        <option value="Jericho">Jericho</option>
                                                        <option value="Jerusalem">Jerusalem</option>
                                                        <option value="Bethlehem">Bethlehem</option>
                                                        <option value="Hebron">Hebron</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" value="" placeholder="Address *"/></td>

                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label >Profile Image:</label></td>
                                    <td><input type="file" accept=".jpg,.jpeg,.png"></td>
                                </tr>
                                <tr>
                                    <td><label >Cover Image:</label></td>
                                    <td><input  type="file" accept=".jpg,.jpeg,.png"></td>
                                </tr>
                            </table>

                            <input type="submit" value="Save" class="blackSquaredButtonBorderd" style="width: 50%;margin-left: auto;margin-right: auto">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="ChangePasswordTab" role="tabpanel" aria-labelledby="ChangePassword-tab">
                    <div class="row editProfile-form">
                        <div class="col-md-12">
                            <table>
                                <tr>
                                    <td><label for="OPassword">Old Password: </label></td>
                                    <td><input id="OPassword" type="password" placeholder="Old Password *" /></td>
                                </tr>
                                <tr>
                                    <td><label for="NPassword">New Password:</label></td>
                                    <td><input id="NPassword" type="password" placeholder="New Password *" /></td>
                                </tr>
                                <tr>
                                    <td><label for="CPassword">Confirm the password:</label></td>
                                    <td><input type="password" id="CPassword" placeholder="Confirm the password *" ></td>
                                </tr>

                            </table>
                            <button  class="blackSquaredButtonBorderd" style="width: 50%;margin-left: auto;margin-right: auto">Change</button>
                        </div>
                    </div>
                </div>
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
