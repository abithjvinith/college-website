<?php
	include 'config.php';
	include 'header.php';
	?>
	 <?php
if(isset($_POST["save"]))
{
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];

if($name=="" || $email=="")
{
	echo"<script>alert('fill all blocks')</script>";
}
else
{
	$query = "INSERT INTO `home`(`name`, `phone`, `email`) VALUES ('$name','$phone','$email')";
    mysqli_query($conn,$query);

	echo"<script>alert('data saved successfully ')</script>";
	echo"<script>window.location='about.php'</script>";

}
}
?>	
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.php"> About Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start feature Area -->
			<section class="feature-area pb-120">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Internet Lab Facilities</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Usage of the Internet is becoming more common due to rapid advancement
										of technology.
									</p>
									<a href="#"></a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>No.1 of universities</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Best well experienced staffs and expects are assigned to take classes for the students.
									</p>
									<a href="#"></a>									
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="single-feature">
								<div class="title">
									<h4>Huge Library</h4>
								</div>
								<div class="desc-wrap">
									<p>
										A collection or group of collections of books and/or other print or nonprint materials organized and maintained for use (reading, consultation, study, research, etc.).
									</p>
									<a href="#"></a>									
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End feature Area -->		

			<!-- Start info Area -->
			<section class="info-area pb-120">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-lg-6 no-padding info-area-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 info-area-right">
							<h1>About our
							Department</h1>
							<p>The Department has an enterprising faculty team of 3 Assistant professors . 2 Guest faculties and 1 programmer. It has more than 100 research publications to its credit. They contribute their share of knowledge to the academic community through Invited Talks and   Paper presentations in National / International Conferences. The Department takes continuous efforts in upgrading the course content and enhancing students’ skills.</p>
							<br>
							<p>
								Enabling Students to become enterprising Academicians . Young Enterpreneurs and Responsible Citizens . Imparting Quality Knowledge and Essential Virtues Treading Towards Holistic Development.
							</p>
						</div>
					</div>
				</div>	
			</section>
			<!-- End info Area -->	

			<!-- Start course-mission Area -->
			<section class="course-mission-area pb-120">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Goals to Achieve for the leadership</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>							
                    <div class="row">
                        <div class="col-md-6 accordion-left">

                            <!-- accordion 2 start-->
                            <dl class="accordion">
                                <dt>
                                    <a href="">Success</a>
                                </dt>
                                <dd>
                                    It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing.
                                </dd>
                                <dt>
                                    <a href="">Info</a>
                                </dt>
                                <dd>
                                    MCA is a postgraduate course that trains the students in the various aspects of computer programs, application software, computer architecture, operating systems and many more.
                                </dd>
                                <dt>
                                    <a href="">Eligible Criteria</a>
                                </dt>
                                <dd>
									The minimum MCA course eligibility criteria is a Bachelor's degree in computer application- BCA, or in any related field with mathematics as a compulsory subject in Class 12.
                                </dd>
                                <dt>
                                    <a href="">Salary after MCA</a>
                                </dt>
                                <dd>
                                    The salary of an MCA graduate in India is around 7.96 lakh per annum. Entry-level applicants generally earn around Rs 2-3 LPA. Experienced professionals could expect their package to be somewhere around 20-22 LPA.
                                </dd>                                    
                            </dl>
                            <!-- accordion 2 end-->
                        </div>
                        <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                        	<div class="overlay overlay-bg"></div>
							<a class="" href=""> <img class="img-fluid mx-auto" src="img/play.jpg" alt=""></a>
                        </div>
                    </div>
				</div>	
			</section>
			<!-- End course-mission Area -->
					

			<!-- Start search-course Area -->
			<section class="search-course-area relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-between align-items-center">
						<div class="col-lg-6 col-md-6 search-course-left">
							<h1 class="text-white">
								Udaya school of<br>
								Engineering
							</h1>
							<p>
								Run by R.V. EDUCATIONAL TRUST
(Affiliated to Anna University, Chennai, Approved by AICTE, New Delhi)
Udaya Nagar, Vellamodi, Kanyakumari District-629204, Tamil Nadu.
							</p>
							<div class="row details-content">
								<div class="col single-detials">
									<span class="lnr lnr-graduation-hat"></span>
									<a href="#"><h4>Internet Lab Failities</h4></a>		
									<p>
										Usage of the Internet is becoming more common due to rapid advancement of technology and power.
									</p>						
								</div>
								<div class="col single-detials">
									<span class="lnr lnr-license"></span>
									<a href="#"><h4>Certification</h4></a>		
									<p>
										The certification is get under from the anna university which is recognized from the UGC.
									</p>						
								</div>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6 search-course-right section-gap">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20 text-center mb-30">Eligible criteria for MCA</h4>		
								<input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
								<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<!--<div class="form-select" id="service-select">
									<select>
										<option datd-display="">--Select--</option>
										<option value="1">B C A</option>
										<option value="2">B.SC Computer</option>
										<option value="3">Maths group in 12th</option>
										<option value="4">Any other Computer related degree</option>
									</select>
								</div>	-->								
								<button class="primary-btn text-uppercase">Submit</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->			

			<!-- Start review Area -->
			<!--<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4></h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>	
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End review Area -->					

			<!-- Start cta-two Area -->
			<section class="cta-two-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 cta-left">
							<h1>Spend More Time on our Website</h1>
						</div>
						<div class="col-lg-4 cta-right">
							<a class="primary-btn wh" href="http://www.udayaschoolofengineering.com/index.php">view our blog</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End cta-two Area -->						    			

			<?php
include 'footer.php';
?>
