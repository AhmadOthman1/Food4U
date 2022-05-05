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


$mName = "";
$mimage ="";
$mdescription = "";
$mprice = "";
$mid = "";
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


<?php
$disableEditItemDiv="";
$errormsg="";
$disableErrorPriceDiv="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['deleteMenuItem'])) {
        $conn = new mysqli('localhost', 'root', '', 'food4u');
        $sql = "DELETE FROM `meals` WHERE `id`='" . $_POST['MenuItemId'] . "'";
        if ($conn->query($sql) == true) {
            header("Refresh:0");
        }
        $conn->close();
    }

    if (isset($_POST['CancelMenuItem'])) {
        $disableEditItemDiv="";
    }
    if (isset($_POST['errorOkButton'])) {
        $disableErrorPriceDiv="";
        $errormsg="";
    }
    if (isset($_POST['SaveMenuItem'])) {
        $nItem=$_POST['MenuItemName'];
        $dItem=$_POST['MenuItemDes'];
        $pItem=$_POST['MenuItemPrice'];
        $iItem=$_POST['MenuItemId'];

        if(!empty($nItem) && !empty($dItem) && !empty($pItem)){
            $disableErrorPriceDiv="";
            $errormsg="";
            if(is_numeric($_POST['MenuItemPrice'])){
                $disableErrorPriceDiv="";
                $errormsg="";
                $conn = new mysqli('localhost', 'root', '', 'food4u');
                $qrstr="UPDATE `meals` SET `name`='".$nItem."',`description`='".$dItem."',`price`='".abs($pItem)."' WHERE `id`='".$iItem."'";
                $conn->query($qrstr);
                $conn->close();
                if(isset($_FILES['MenuItemImage']['name'])) {
                    $fileName = $_FILES['MenuItemImage']['name'];
                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
                    $allowTypes = array('jpg','png','jpeg');
                    if(in_array($fileType, $allowTypes) && $_FILES['MenuItemImage']['size'] < 200000){
                        $conn = new mysqli('localhost', 'root', '', 'food4u');
                        $image = $_FILES['MenuItemImage']['tmp_name'];
                        $imgContent = addslashes(file_get_contents($image));
                        $qrstr = "UPDATE `meals` SET `image`='".$imgContent."' WHERE `id`='".$iItem."'";
                        $conn->query($qrstr);
                    }else{
                    }
                }
                else{
                    $disableEditItemDiv="";
                }
                $disableEditItemDiv="";
            }
            else{// print\show html error div
                $errormsg="Please Enater Valid Price";
                $disableErrorPriceDiv="
 <div class='errorMenuItem ' >
    <div class='errorMenuItem2 container h-100' >
        <div class='row align-items-center h-100' >
            <div class='col-md-2' ></div>

            <div class='col-md-8 mx-auto'>
                <div class='errorMenuItemContent' style='align: center'>
                    <form method='POST' action=".$_SERVER["PHP_SELF"].">
                        <table style='width: 100%; border-collapse: separate; border-spacing: 0 20px;'>
                            <tr><td style='text-align: center; vertical-align: middle;'><input class='errorTextField ' disabled type='text' name='ErrorPrice' value='$errormsg'></td></tr>
                            <tr><td style='text-align: center; vertical-align: middle;'><input type='submit' class='blackSquaredButton' name='errorOkButton' style='width:50%; height:50px' value='Ok'></td></tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class='col-md-2' ></div>
        </div>
    </div>
</div> 
" ;

            }
        }
        else{
            $errormsg="Please Enater Valid Name / description";
            $disableErrorPriceDiv="
 <div class='errorMenuItem ' >
    <div class='errorMenuItem2 container h-100' >
        <div class='row align-items-center h-100' >
            <div class='col-md-2' ></div>

            <div class='col-md-8 mx-auto'>
                <div class='errorMenuItemContent' style='align: center'>
                    <form method='POST' action=".$_SERVER["PHP_SELF"].">
                        <table style='width: 100%; border-collapse: separate; border-spacing: 0 20px;'>
                            <tr><td style='text-align: center; vertical-align: middle;'><input class='errorTextField ' disabled type='text' name='ErrorPrice' value='$errormsg'></td></tr>
                            <tr><td style='text-align: center; vertical-align: middle;'><input type='submit' class='blackSquaredButton' name='errorOkButton' style='width:50%; height:50px' value='Ok'></td></tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class='col-md-2' ></div>
        </div>
    </div>
</div> 
" ;
        }

    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['editMenuItem'])) {
        $conn = new mysqli('localhost', 'root', '', 'food4u');
        $qrstr2="SELECT `id`, `name`, `description`, `price`, `section`, `image` FROM `meals` WHERE `id`='". $_POST['MenuItemId']."'";
        $res2=$conn->query($qrstr2);
        $row2 = $res2->fetch_object();
        $mName = $row2->name;
        $mimage = $row2->image;
        $mdescription = $row2->description;
        $mprice = $row2->price;
        $mid = $row2->id;
        $disableEditItemDiv="<div class='editMenuItem '>
    <div class='editMenuItem2 container h-100''>
        <div class='row align-items-center h-100' >
            <div class='col-md-2' ></div>

                <div class='col-md-8 mx-auto'>
                    <div class='editMenuItemContent'>

                        <h5 style='text-align: center'>Edit Menu Item</h5>
                        <form method='POST' action='". $_SERVER['PHP_SELF']."' enctype='multipart/form-data'>

                            <table style='width: 80%;'>
                                <tr style='display: none'>
                                    <td><input class='activTextField' type='text' name='MenuItemId' value='$mid'></td>
                                </tr>
                                <tr>
                                    <td><label for='MenuItemName'>Name:</label></td>
                                    <td><input class='activTextField' type='text' name='MenuItemName' value='$mName'></td>
                                </tr>
                                <tr>
                                    <td><label for='MenuItemDes'>Description: </label></td>
                                    <td><textarea cols='20' rows='4' style='resize: none;' class='activTextField' name='MenuItemDes' > $mdescription</textarea></td>
                                </tr>
                                <tr>
                                    <td><label for='MenuItemPrice'></label>Price: </td>
                                    <td><input class='activTextField' type='text' name='MenuItemPrice' value='$mprice'></td>
                                </tr>
                                <tr>
                                    <td><label >Item Image:</label></td>
                                    <td><input type='file' name='MenuItemImage' id='MenuItemImage' accept='.jpg,.jpeg,.png'><h6 style='color: gray'>image must be less than 200KB</h6></td>

                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <table style='width: 100%'>
                                            <tr>
                                                <td>
                                                    <input name='SaveMenuItem' class='blackSquaredButton' style='width: 90%;height: 50px ;margin-top: 10px' type='submit' value='Save' >
                                                </td>
                                                <td>
                                                    <input name='CancelMenuItem' class='blackSquaredButton' style='width: 90%;height: 50px ;margin-top: 10px' type='submit' value='Cancel' >
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>


                        </form>

                    </div>
                </div>

            <div class='col-md-2'></div>
        </div>
    </div></div >";

        $conn->close();
    }
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
<!-- MENU -->
<?php echo $disableEditItemDiv; ?>
<?php echo $disableErrorPriceDiv; ?>
<section class="nd-flex justify-content-end custom-navbar navbar-fixed-top navbarStyle fixed-top " role="navigation">
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
                    <li class=" nav-item" style="margin-top: 20px;"><a class="nav-link active" id="MyMenu-tab"  data-toggle="tab" href="#MyMenu" role="tab" aria-controls="MyMenuTab" aria-selected="true" onclick="location.reload();">My Menu</a></li>
                    <li class=" nav-item" ><a class="nav-link" id="EditMyMenu-tab"   data-toggle="tab" href="#EditMyMenuTab" role="tab" aria-controls="EditMyMenu" aria-selected="false" onclick="location.reload();">Edit Menu</a></li>
                </ul>

            </div>
        </div>
        <div class="col-lg-9 p-0">
            <div class="tab-content profileContentCol" id="myTabContent">
                <div class="tab-pane fade show active" id="MyMenuTab" role="tabpanel" aria-labelledby="MyMenu-tab">
                    <div class="row profile-form">
                        <div class="col-md-12">
                            <table style="width: 100%; border-collapse: separate; border-spacing: 0 20px;">
                                <?php
                                try{
                                    $conn = new mysqli('localhost','root','','food4u');
                                    $qrstr="SELECT `sName` FROM `sections` WHERE `Email`='".$_SESSION['Email']."'";
                                    $res=$conn->query($qrstr);
                                    for($i=0;$i<$res->num_rows;$i++) {
                                        $row = $res->fetch_object();
                                        $sName = $row->sName;
                                        echo '<tr><td><h1 class="sectionName" style="text-align: center">'.$sName.'</h1>
                                        <form method="POST" action="'.$_SERVER["PHP_SELF"].'">
                                            <input type="text" name="secId" value="'.$sName.'" style="display: none;">
                                            <input type="submit" name="chanegSecName" class="greenUnborderedButton" value="Change">
                                            <input type="submit" name="deleteSecName" class="greenUnborderedButton" value="Delete">
                                        </form>
                                        </td>
                                        ';
                                        $qrstr2="SELECT `id`, `name`, `description`, `price`, `section`, `image` FROM `meals` WHERE `Email`='".$_SESSION['Email']."' and `section`='".$sName."'";
                                        $res2=$conn->query($qrstr2);
                                        for($j=0;$j<$res2->num_rows;$j++) {
                                            $row2 = $res2->fetch_object();
                                            $mName = $row2->name;
                                            $mimage = $row2->image;
                                            $mdescription = $row2->description;
                                            $mprice = $row2->price;
                                            $mid = $row2->id;
                                            echo '
                                            <tr class="mealDiv">
                                            <td>
                                            <div >
                                                <img class="mealImage" src="data:image/jpeg;base64,'.base64_encode($mimage).'"/>
                                                <div class="mealInfo">
                                                    <h3 class="mealName">'.$mName.'</h3>
                                                    <p class="mealDes" style="max-width:600px;word-break: break-all; white-space: normal;">'.$mdescription.'</p>
                                                    <form method="POST" action="'.$_SERVER["PHP_SELF"].'">
                                                        <input type="text" name="MenuItemId" value="'.$mid.'" style="display: none">
                                                        <input name="deleteMenuItem" class="greenUnborderedButton" type="submit" value="Delete" >
                                                        <input name="editMenuItem" class="greenUnborderedButton" type="submit" value="Edit" >
                                                    </form>
                                                </div>
                                            </div>
                                            </td>
                                            <td>
                                                <div class="imagePrice">
                                                    <h1>₪'.$mprice.'</h1>
                                                </div>
                                                <div>
                                                
                                                
                                                </div>
                                            </td>
                                            </tr>
                                            ';
                                        }
                                    }
                                    $conn->close();
                                }
                                catch (Exception $ex){
                                    echo "<p>".$ex->getTraceAsString()."</p>";
                                }
                                ?>

                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="EditMyMenuTab" role="tabpanel" aria-labelledby="EditMyMenu-tab">
                    <div class="row editProfile-form">
                        <div class="col-md-12">

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