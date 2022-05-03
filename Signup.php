<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food 4U - SignUp</title>
    <link rel="stylesheet" href="css/Signup.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="node_modules/aos/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="register ">
    <div class="row register-left h-auto d-inline-block" >
        <div class="col-md-12 ">
            <div class="top_link"><a href="Index.php"><img src="icons/left.svg" alt=""></a></div>
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#user" role="tab" aria-controls="home" aria-selected="true">Regular User</a></li>
                <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#Resteurent" role="tab" aria-controls="profile" aria-selected="false">Restaurant</a></li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">User SignUp</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group"style="margin: 0;">
                                <input type="text" placeholder="First Name *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group" style="margin: 0;">
                                <input type="text"  placeholder="Last Name *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="password" placeholder="Password *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="password"  placeholder="Confirm Password *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <table >
                                    <tr>
                                        <td><label>Gender:</label></td>
                                        <td><input type="radio" name="gender" id="male" value="male" checked> <label for="male"> Male </label></td>
                                        <td><input type="radio" name="gender" id="female" value="female"><label for="female">Female </label></td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"style="margin: 0;">
                                <input type="email" placeholder="Your Email *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone"  placeholder="Your Phone *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="text" placeholder="Enter Your Answer *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="text" placeholder="Enter Your Answer *" value="" />
                                <div class="line"></div>
                            </div>
                        </div>
                        <button  class="buttonBorderd" style="width: 50%;margin-left: auto;margin-right: auto">Register</button>
                    </div>
                </div>
                <div class="tab-pane fade show" id="Resteurent" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Restaurant SignUp</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group"style="margin: 0;">
                                <input type="text" placeholder="First Name *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="text"  placeholder="Last Name *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="email"  placeholder="Email *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="text" maxlength="10" minlength="10"  placeholder="Phone *" value="" />
                                <div class="line"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"style="margin: 0;">
                                <input type="password" placeholder="Password *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="password"  placeholder="Confirm Password *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="text" placeholder="Enter Your Answer *" value="" />
                                <div class="line"></div>
                            </div>
                            <div class="form-group"style="margin: 0;">
                                <input type="text"  placeholder="`Answer *" value="" />
                                <div class="line"></div>
                            </div>

                        </div>
                        <button  class="buttonBorderd" style="width: 50%;margin-left: auto;margin-right: auto">Register</button>
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
