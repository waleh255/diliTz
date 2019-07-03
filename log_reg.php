
<?php
                    //session_start();
                    if(empty($_SESSION['login_user'])) {


                        ?>
                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Login</title>
                            <link rel="stylesheet" href="css/stylelog.css">
                            <!-- <link rel="stylesheet" type="text/css" href="csslog/style.css" />
                            <script type="text/javascript" src="engine1/jquery.js"></script> -->


                            <!-- Password Confirmation code-->


                            <script type="text/javascript">
                                function Validate() {
                                    var password = document.getElementById("password").value;
                                    var confirmPassword = document.getElementById("confpassword").value;
                                    if (password != confirmPassword) {
                                        alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
                                        return false;
                                    }
                                    return true;
                                } </script>

                        </head>
                        <body class="slide">
                        <div class="w3-content w3-section" style="max-width:100%">
                          <img class="myImages" src="myImages/1.jpg" style="width: 100%; height: auto;">
                          <img class="myImages" src="myImages/2.jpg" style="width: 100%; height: auto;">
                          <img class="myImages" src="myImages/3.jpg" style="width: 100%; height: auto;">
                          <img class="myImages" src="myImages/4.jpg" style="width: 100%; height: auto;">
                        </div>
                        <script>
                        var myIndex = 0;
                        carousel();

                        function carousel() {
                          var i;
                          var x = document.getElementsByClassName("myImages");
                          for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";  
                          }
                          myIndex++;
                          if (myIndex > x.length) {myIndex = 1}    
                          x[myIndex-1].style.display = "block";  
                          setTimeout(carousel, 5000); // Change image every 2 seconds
                        }
                        </script>



                        <?php
                        if(!empty($_SESSION['error'])){

                        echo $_SESSION['error'];

                        }
                        ?>

                        <div class="container">


                            <div id="container">
                                <main id="main">


                                    <h1><a href="indexa.php">Welcome To DiliTz</a></h1>


                                    <div id="loginuicontainer">

                                        <div id="login-tab" class="active">Login</div>
                                        <div id="register-tab">Register</div>


                                        <!-- Login Section -->

                                        <form method="post" action="login.php">
                                            <div id="logincontainer">
                                                <div class="form group">
                                                    <input type="text" class="form-control inputbox" name="email"
                                                           placeholder="Email" required>
                                                </div>

                                                <div class="form group">
                                                    <input type="password" class="form-control inputbox"
                                                           name="login-password" placeholder="Password" required>
                                                </div>




                                                <div class="form group">
                                                    <input type="submit" class="btn btn-primary" value="Login">
                                                </div>

             <div class="textcenter signuptxt">Don't have an account? <a href="log_reg.php"class="link registerlink">Sign Up</a></div>
         <p class="textcenter  forgettxt"><a href="contacta.php" class="link forgetlink">
                                                        Forgot Password?</a></p>

                                            </div>
                                        </form>

                                        <!-- Registration section -->

                                        <form method="post" action="reg1.php">
                                            <div id="registercontainer" hidden>

                                                <div>
                                                    <input type="text" class="form-control inputbox" name="fname"
                                                           placeholder="First Name">
                                                </div>

                                                <div>
                                                    <input type="text" class="form-control inputbox" name="lname"
                                                           placeholder="Last Name">
                                                </div>

                                                <div>

                                                    <input type="email" class="form-control inputbox" name="email"
                                                           placeholder="Email">


                                                </div>

                                                <div>
                                                    <input type="password" class="form-control inputbox" name="password"
                                                           id="password" placeholder="password">
                                                </div>

                                                <div>
                                                    <input type="password" class="form-control inputbox"
                                                           name="confpassword" id="confpassword"
                                                           placeholder="Confirm password">
                                                </div>

 <div class="form group">   <input type="submit" class="btn btn-primary" value="Register" onclick="return Validate()">
               </div>

 <div class="textcenter signuptxt">Already have an account? <a href="log_reg.php"class="link loginlink">Login</a>
                                                </div>


                                            </div>
                                        </form>
                                    </div>
                                </main>
                            </div>
                        </div>
                        <script src="js/mainlog.js">s
                        </body>
                        </html>

                        <?php

                    }           else{

                            header("location: indexb.php");
                        }
