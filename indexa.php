<?php
if(!isset($_SESSION)){
    session_start();
}
?>
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
<!-----------------------------PHP INCLUSIVE---------------------->
    <?php
include "exist_job.php";

  ?>
<!-----------------------NAVIGATION BAR----------------------->
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="indexa.php">diliTz</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
<!------------------------COLLPASABLE----------------------->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="indexa.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="abouta.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contacta.php" class="nav-link">Contact</a></li>
	          <li class="nav-item cta cta-colored"><a href="log_reg.php" class="nav-link">Want a Job</a></li><pre> </pre>
	          <li class="nav-item cta mr-md-2"><a href="log_reg.php" class="nav-link">Post a Job</a></li>
            <pre></pre>
                <?php
                if(isset($_SESSION['email'])){
                    echo('<li class="nav-item cta mr-md-2"><a href="index_end.php" class="nav-link">Log Out</a></li>');

                }
                else {

                    echo ('<li class="nav-item cta cta-colored"><a href="log_reg.php"  class="nav-link">Log In / Register</a></li>');
                }
                ?>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!--------------END OF NAVIGATION BAR-------------------------->
    <div class="hero-wrap js-fullheight" style="background-image: url('images/Tools2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We have <span class="number" data-number="500">0</span> great job offers you deserve!</p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Skill <br><span>Your Money </span></h1>
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
                              <form method="post" action="indexa.php" class="search-job">
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
						                      <select name="job_type_search"  class="form-control">
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
<!--------------------------------JOB SEARCH ENDS--------------------->
<!-----------------------------PROPAGANDA------------------------------>
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Millions of Jobs</h3>
                <p>Are you a skiled person with little or no job experience, search jobs here.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                <p>This portal makes makes it easy for you to choose any kind of job that you want.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Top Careers</h3>
                <p>With our updated features we made it possible for you to buld up your career form ground up.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Expert Candidates</h3>
                <p>You can also get expert candidates in the kidn of job you want to be completed.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    <!------------------------------PROPAGANDA ENDS HERE-------------------------->
<!--------------------------------
    <section class="ftco-section ftco-counter">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Categories work wating for you</span>
            <h2 class="mb-4"><span>Current</span> Job Posts</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<ul class="category">
        			<li><a href="#">Cleaning Household <span class="number" data-number="1000">0</span></a></li>
        			<li><a href="#">Baby Siting <span class="number" data-number="1000">0</span></a></li>
        			<li><a href="#">Cooking Special Event <span class="number" data-number="2000">0</span></a></li>
        			<li><a href="#">Gardening <span class="number" data-number="900">0</span></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category">
        			<li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
        			<li><a href="#">Motivational Speaker <span class="number" data-number="1560">0</span></a></li>
        			<li><a href="#">Carpentry <span class="number" data-number="1000">0</span></a></li>
        			<li><a href="#">Photography <span class="number" data-number="2500">0</span></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category">
        			<li><a href="#">Electrical Installation <span class="number" data-number="5500">0</span></a></li>
        			<li><a href="#">Water Pipe Fix <span class="number" data-number="2000">0</span></a></li>
        			<li><a href="#">Aluminium Window Fix <span class="number" data-number="800">0</span></a></li>
        			<li><a href="#">Fumigation &amp; Pest Contol <span class="number" data-number="7000">0</span></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category">
        			<li><a href="#">Paint Jobs <span><span class="number" data-number="8000">0</span></span></a></li>
        			<li><a href="#">Welding <span class="number" data-number="4000">0</span></a></li>
        			<li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>
        			<li><a href="#">Posters <span class="number" data-number="1356">0</span></a></li>
        		</ul>
        	</div>
        </div>
    	</div>
    </section>
-------------------------------------->
		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Recently Added Jobs</span>
            <h2 class="mb-4"><span>Recent</span> Jobs</h2>
          </div>
        </div>

<!-----PHP goes here, this PHP makes it possible for a person to search the job they want to apply for that job-------->
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
           echo "<div class=\"row\">
          <div class=\"col-md-12 ftco-animate\">
            <div class=\"job-post-item bg-white p-4 d-block d-md-flex align-items-center\">
              <div class=\"mb-4 mb-md-0 mr-5\">
                <div class=\"job-post-item-header d-flex align-items-center\">
                  <h2 class=\"mr-3 text-black h3\"> ". $row["job_title"]. "</h2>
                  <div class=\"badge-wrap\">
                   <span id=\"\" class=\"bg-primary text-white badge py-2 px-3\">". $row["level_req"]. "</span>
                  </div>
                </div>
                <div class=\"job-post-item-body d-block d-md-flex\">
                  <div><span class=\"icon-my_location\"></span> <span>". $row["location"]. "</span></div>
                </div>
              </div>
              <div class=\"ml-auto d-flex\">
                <a href=\"log_reg.php\" class=\"btn btn-primary py-2 mr-1\">Apply Job</a>
              </div>
            </div>
          </div>        
      </div>";
          }
          } else {
              echo "<center><h3>Oops! Sorry, No Job Posts Yet!!</h3></center>";
          }
          $conn->close();
?>
                <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="indexa.php">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="indexa.php"><span>2</span></a></li>
                <li><a href="indexa.php">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>
<!-------------------Promo-------------------->   
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/promo.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Jobs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="600">0</strong>
		                <span>Members</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Resume</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="105">0</strong>
		                <span>Company</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
    <!---------Testimonials----------------->
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4"><span>Happy</span> Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">I thought that this was just another scam, that people were after my money. But after using this site i am happy to say that it is going to impact and change alot of lives.</p>
                    <p class="name">Simba Khalid</p>
                    <span class="position">Engineer At Buzwagi</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/user2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">I always find it hard to be able to do my work and to make sure that my household is in the very best condition. But ever since i started using diliTz, my house is very  clean thanks to the skilled workers that diliTz links me with.</p>
                    <p class="name">Joshua Opio</p>
                    <span class="position">Mechanical Consultant</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/user5.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Being a mother of three it is hard to make sure that when i am away my kids get the best care that i can offer them, but ever since i started using diliTz, their skilled baby sitters have made sure that i can cincentrate on my work and worry a bit less about my kids well being when i am away.</p>
                    <p class="name">Angela Mikela</p>
                    <span class="position">Business Woman</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/user3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">After being told about diliTz i thought this was just one of those sites who just want to take your money or just a means that they can come and rob you at your home.</p>
                    <p class="name">Thoby Marshal</p>
                    <span class="position">Travel Agency CEO</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/user4.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">diliTz made it possible for me to go to work work and not to worry much about how i am going to clean my house over the weekend because i am not married. But thanks to diliTz allk of this is no longer a woryy.</p>
                    <p class="name">Charles Thomas</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--------------------NewsLetter-------------------->
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
<!----------Footer---------->
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
                <li><a href="log_reg.php" class="py-2 d-block">Post a Job</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Workers</h2>
              <ul class="list-unstyled">
                <li><a href="log_reg.php" class="py-2 d-block">Register</a></li>
                <li><a href="log_reg.php" class="py-2 d-block">Post Your Skills</a></li>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</i> by <a href="https://udicti.coict.udsm.ac.tz" target="_blank">TBD <br>   <i class="icon-heart text-danger" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank">Colorlib & Google for their help with this project</a></a>
  </p>
          </div>
        </div>
      </div>
    </footer>
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
          <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
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