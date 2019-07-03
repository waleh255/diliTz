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
    <title>diliTz</title>
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
<!------------------php inclusion code starts here-------->
  <?php
include "exist_job.php";

  ?>
<!--------------------------navigation bar------------------------------------>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">diliTz</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
<!-----------------------collapsible------------------------------->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="indexb.php" class="nav-link">Home</a></li>
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
    <!---------------------------------end of navigation bar---------->
    <!-------------------------the image and the names after the navigation bar----------->
    <div class="hero-wrap js-fullheight" style="background-image: url('images/Tools3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Skill <br><span>Your Money</span></h1>
<!---------------------JOB SEARCH------------------------------->
						<div class="ftco-search">
							<div class="row">
		            <div class="col-md-12 nav-link-wrap">
			            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>
			            </div>
			          </div>
			          <div class="col-md-12 tab-wrap">
			            <div class="tab-content p-4" id="v-pills-tabContent">
			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
<!---------------------------------JOB SEARCH STARTS HERE-------------------->
                              <form method="post" action="job-post.php" class="search-job">
			              		<div class="row">
			              			<div class="col-md">
			              				<div class="form-group">
				              				<div class="form-field">
				              					<div class="icon"><span class="icon-briefcase"></span></div>
								                <input type="text" class="form-control" placeholder="eg. Special Event Cook" name="job_title_search">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
						                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      <select name="job_type_search" id="" class="form-control">
                                                  <option value="" selected disabled hidden>Job Type</option>
						                      	<option value="Full Time">Full Time</option>
						                        <option value="Part Time">Part Time</option>
						                        <option value="Temporary">Temporary</option>
						                      </select>
						                    </div>
								              </div>
							              </div>
			              			</div>
                         <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                  <div class="select-wrap">
                                      <div class="icon"><span class="ion-ios-arrow-down" ></span></div>
                                          <select name="level_req_search" id="" class="form-control">
                                               <option value="" selected disabled hidden>Skill Level</option>
                                               <option value="Very Skilled">Very Skilled</option>
                                               <option value="Skilled">Skilled</option>
                                               <option value="Little Skilled">Little Skilled</option>
                                               </select>
                                               </div>
                                            </div>
                                        </div>
                                    </div>
			              			<div class="col-md">
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<form class="form-field">
								                <input type="submit" value="Search" class="form-control btn btn-primary">
                                        </div>
                                    </div>
			              			</div>
			              		</div>
			              	</form>
			              </div>

			              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
			              	<form action="#" class="search-job">
			              		<div class="row">
			              			<div class="col-md">
			              				<div class="form-group">
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="icon"><span class="icon-map-marker"></span></div>
								                <input type="text" class="form-control" placeholder="Location">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
								                <input type="submit" value="Search" class="form-control btn btn-primary">
								              </div>
							              </div>
			              			</div>
			              		</div>
			              	</form>
			              </div>
			            </div>
			          </div>
			        </div>
		        </div>
          </div>
        </div>
      </div>
    </div>
<!--------------------------------JOB SEARCH ENDS-------------->
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">

            <h2 class="mb-4"><span>Recent</span> Jobs</h2>
          </div>
        </div>

<!---------------PHP STARTS HERE-------------------------->       
<?php

            $job_title_search = '';
            $job_type_search=null;
            $level_req_search=null;
            if(isset($_POST['job_title_search'])){ $job_title_search = $_POST['job_title_search']; }
            if(isset($_POST['job_type_search'])){ $job_type_search = $_POST['job_type_search']; }
            if(isset($_POST['level_req_search'])){ $level_req_search = $_POST['level_req_search']; }



$sql = "SELECT num, job_title, job_type, location, job_description, level_req FROM jobs WHERE job_title LIKE '%" . $job_title_search . "%' AND job_type LIKE '%" .$job_type_search."%' AND level_req LIKE '%" .$level_req_search."%' ORDER BY num DESC";
          $result = $conn->query($sql) or die(mysqli_error($conn));

          if (!empty($result) && $result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
           echo "<form method='post' action='apply.php'><div class=\"row\">
          <div class=\"col-md-12 ftco-animate\">
            <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
              <div class=\"mb-4 mb-md-0 mr-5\">
                <div class=\"job-post-item-header d-flex align-items-center\">
                  <h2 class=\"mr-3 text-black h3\"> <input name='chosen_job' style='display: none' id='radio' type='radio' checked value='".$row["job_title"] ."'>". $row["job_title"]. "</h2>
                  <div class=\"badge-wrap\">
                   <span id=\"\" class=\"bg-primary text-white badge py-2 px-3\">". $row["level_req"]. "</span>
                  </div>
                </div>
                <div class=\"job-post-item-body d-block d-md-flex\"> 
                  <div><span class=\"icon-my_location\"></span> <span>". $row["location"]. "</span></div>
                </div>
              </div>
              <div class=\"ml-auto d-flex\">
                <input type='submit' class='btn btn-primary py-2 mr-1' value='Apply Job'>
                </a>
              </div>
            </div>
          </div>        
      </div></form>";
          }
          } else {
              echo "<center><h3>Oops! Sorry, No Job Posts Yet!!</h3></center>";          }
          $conn->close();
?>
    </section>
<!----------------------------PHP ENDS HERE---------------->    
<!----------------Newsletter-------------------->				
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
          </div>
        </div>
      </div>
    </section>
    <!------------Footer-------------------->
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
                <li><a href="indexa.php" class="py-2 d-block">Register</a></li>
                <li><a href="new-postb.php" class="py-2 d-block">Post a Job</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Workers</h2>
              <ul class="list-unstyled">
                <li><a href="indexa.php" class="py-2 d-block">Register</a></li>
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
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">diliTz123@gmail.com</span></a></li>
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

