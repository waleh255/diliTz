<?php
//require_once 'config.php';
////Initialize the session
//session_start();
////if session variable is not it will require log in page
//if(isset($_SESSION['username'])|| empty($_SESSION['username'])){
//    header("location: log_reg.php");
//    exit();
//}
//?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>diliTZ</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <!------------------------Navigation Bar------------------->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="indexb.php">diliTz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
<!-----------------Collapsible------------------------->
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="indexb.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="aboutb.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contactb.php" class="nav-link">Contact</a></li>
             <li class="nav-item cta cta-colored"><a href="job-post.php" class="nav-link">Want a Job</a></li><pre> </pre>
            <li class="nav-item cta mr-md-2"><a href="new-postb.php" class="nav-link">Post a Job</a></li>
            <li class="nav-item cta cta-colored"><a href="post-skill.php" class="nav-link">My Skills</a></li>
            <pre> </pre>
            <li class="nav-item cta mr-md-2"><a href="indexa.php" class="nav-link">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-------------------------End of Navigation------------------->
    <div class="hero-wrap js-fullheight" style="background-image: url('images/Tools6.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Post My Skills</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Post My Skills</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="ftco-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
           <form method="POST" action="skill-upload.php" class="p-5 bg-white">
<!----------------Post Job Form---------->
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" >My Contact</label>
                  <input required type="number" name="my_contact" class="form-control" placeholder="eg. 0645323241" required>
                </div>
              </div>
              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" >My Email</label>
                  <input required type="email" name="my_email" class="form-control" placeholder="eg. user@gmail.com" required>
                </div>
              </div>
               
              <div class="row form-group">
                <div class="col-md-12"><h3>Job Of Choice</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label >
                    <input required type="radio"  name="job_choice" value="cleaning" required> Cleaning
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label >
                    <input required type="radio"  name="job_choice" value="electrician"> Electrician
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label >
                    <input required type="radio"  name="job_choice" value="plumber"> Plumber
                  </label>
              </div>
              <div class="col-md-12 mb-3 mb-md-0">
                  <label >
                    <input required type="radio"  name="job_choice" value="carpenter"> Carpenter
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label >
                    <input required type="radio"  name="job_choice" value="other"> Other (Explain In About Me)
                  </label>
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12"><h3>My Experience</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label >
                    <input required type="radio"  name="level_req" value="Very Skilled" required> Very Skilled
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label >
                    <input required type="radio"  name="level_req" value="Skilled"> Skilled
                  </label>
                </div>

                <div class="col-md-12 mb-3 mb-md-0">
                  <label >
                    <input required type="radio"  name="level_req" value="Little Skilled"> Little Skilled
                  </label>
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>My Location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input required type="text" class="form-control" name="location" placeholder="eg, Mbezi Beach, Dar es Salaam" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>About Me</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="about_me" class="form-control"  cols="30" rows="5" required></textarea>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
                </div>
              </div>
            </form>
          </div>
<!----------------Contact Info---------------------->
          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">CoICT, Sayansi Kijitonyama</p>
              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+255620757549</a></p>
              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="contactb.php"><span class="__cf_email__" data-cfemail="671e081215020a060e0b2703080a060e094904080a">diliTz123@gmail.com</span></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!----------------Newsletter----------------->    
      <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Do you want the current inforamtion about diliTz or simply want to contribute.</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>s
        </div>
      </div>
    </section>
<!------------------------------Footer------------->
   <footer class="<<!-- ftco-footer --> ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About</h2>
              <p>diliTz, a job portal made to improve the way that people interact with one another to find jobs.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Employers</h2>
              <ul class="list-unstyled">
                <li><a href="log_reg.php" class="py-2 d-block">Register</a></li>
                <li><a href="new-postb.php" class="py-2 d-block">Post a Job</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Workers</h2>
              <ul class="list-unstyled">
                <li><a href="log_reg.php" class="py-2 d-block">Register</a></li>
                <li><a href="post-skill.php" class="py-2 d-block">Post Your Skills</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">CoICT, Sayansi Kijitonyama</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+255620757549</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">diliTz@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</i> by <a href="https://udicti.coict.udsm.ac.tz" target="_blank">TBD</a>
  </p>
          </div>
        </div>
      </div>
    </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>