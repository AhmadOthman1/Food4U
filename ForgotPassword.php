<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food 4U - Forgot Password</title>
    <link rel="stylesheet" href="css/ForgotPassword.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="node_modules/aos/dist/aos.css" rel="stylesheet">

</head>
<body>
<section class="forgot">
    <div class="forgot_box row" >
        <div class="col-md-3"></div>
        <div class="left col-sm-6"data-aos="fade-right" data-aos-duration="1500" data-aos-delay="50">
            <div class="top_link"><a href="login.php"><img src="icons/left.svg" alt=""></a></div>
            <div class="contact">
                <form action="">
                    <div>

                    </div>
                    <table >
                        <tr class="spaceUnder">
                            <td >
                                <h1>Forgot Password</h1>
                                <h7 style="color: gray">Please Enter Your Email to send the code</h7>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" placeholder="Email">
                                <div class="line"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="buttonBorderd" onclick="">Send</button>
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
