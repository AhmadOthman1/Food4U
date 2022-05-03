<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food 4U - Change Password</title>
    <link rel="stylesheet" href="css/ChangePassword.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="node_modules/aos/dist/aos.css" rel="stylesheet">

</head>
<body>
<section class="forgot">
    <div class="forgot_box row" >
        <div class="col-md-3"></div>
        <div class="left col-sm-6">
            <div class="top_link"><a href="ForgotPassword.php"><img src="icons/left.svg" alt=""></a></div>
            <div class="contact">
                <form action="">
                    <div>

                    </div>
                    <table >
                        <tr class="spaceUnder">
                            <td >
                                <h1>Change Password</h1>
                                <h7 style="color: gray">Please Check Your Email For The Code</h7>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Code">
                                <div class="line"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="NEW PASSWORD">
                                <div class="line"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="buttonBorderd" >Change</button>
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</section>







<script src="node_modules/aos/dist/aos.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>
