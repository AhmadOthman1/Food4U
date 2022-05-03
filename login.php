<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food 4U - LogIn</title>
    <link rel="stylesheet" href="css/LoginCss.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="node_modules/aos/dist/aos.css" rel="stylesheet">

</head>
<body>
<section class="login">
    <div class="login_box row" >
        <div class="left col-sm-6"data-aos="fade-down" data-aos-duration="1500" data-aos-delay="50">
            <div class="top_link"><a href="Index.php"><img src="icons/left.svg" alt=""></a></div>
            <div class="contact">
                <form action="">
                    <h1>LOGIN</h1>
                    <table>
                        <tr>
                            <td>
                                <input type="text" placeholder="Email">
                                <div class="line"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" placeholder="PASSWORD">
                                <div class="line"></div>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a class="grayText" href="ForgotPassword.php">Forgot your Password?</a>
                                <button class="buttonBorderd" >Login</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h7>Dont have an account? <a class="grayText" href="Signup.php">SignUp</a></h7>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="right col-sm-6" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="50">
            <div class="right-text">
                <h2>Food<span  style="color: #26e07f;font-size: 50px">4</span>U</h2>
            </div>
            <div class="right-inductor"></div>
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
