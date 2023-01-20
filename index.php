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
	echo"<script>window.location='index.php'</script>";

}
}
?>	

		<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h1 class="text-uppercase">
								We Ensure better education
								for a better world			
							</h1>
							<p class="pt-10 pb-10">
								Department of Master in Computer Application,<br>
								Udaya School of Engineering
							</p>
							<a href="#" class="primary-btn text-uppercase">Get Started</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<section class="feature-area">
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
									<h4>Dept of Computer Application</h4>
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
					
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Popular Courses we offer</h1>
								<p>There is a moment in the life of any aspiring.</p>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p1.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 569</p>
										<h4>MCA syllabus</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Web Designing &
											Development
										</h4>
									</a>
									<p>
										Web design is the creation of websites and pages to reflect a company's brand and information and ensure a user-friendly experience. 										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p2.png" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 </p>
										<h4>MCA syllabus</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Mobile Application Development
										</h4>
									</a>
									<p>
										Mobile application development is the process of creating software applications that run on a mobile device, and a typical mobile application utilizes a network connection to work with remote computing resources.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p3.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355</p>
										<h4>MCA syllabus</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											DevLops Engineering
										</h4>
									</a>
									<p>
										A DevOps engineer introduces processes, tools, and methodologies to balance needs throughout the software development life cycle, from coding and deployment, to maintenance and updates.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p4.png" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 </p>
										<h4>MCA syllabus</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Python
										</h4>
									</a>
									<p>
										Python is a computer programming language often used to build websites and software, automate tasks, and conduct data analysis. Python is a general-purpose language, meaning it can be used to create a variety of different programs.
									</p>
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p5.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355</p>
										<h4>MCA syllabus</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Java Programming
										</h4>
									</a>
									<p>
										Java is a programming language and computing platform first released by Sun Microsystems in 1995. It has evolved from humble beginnings to power a large share of today's digital world, by providing the reliable platform upon which many services and applications are built.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p6.png" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 </p>
										<h4>MCA syllabus</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Node js
										</h4>
									</a>
									<p>
										It is used for server-side programming, and primarily deployed for non-blocking, event-driven servers, such as traditional web sites and back-end API services, but was originally designed with real-time, push-based architectures in mind.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p7.webp" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span> 355 </p>
										<h4>MCA syllabus</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn Cloud Computing
										</h4>
									</a>
									<p>
										cloud computing is the delivery of computing services—including servers, storage, databases, networking, software, analytics, and intelligence—over the Internet (“the cloud”) to offer faster innovation, flexible resources, and economies of scale.										
									</p>
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="img/p8.jpg" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										<p><span class="lnr lnr-users"></span></p>
										<h4>MCA syllabus</h4>
									</div>									
								</div>
								<div class="details">
									<a href="#">
										<h4>
											Learn JavaScript
										</h4>
									</a>
									<p>
										JavaScript is a scripting language that enables you to create dynamically updating content, control multimedia, animate images, and pretty much everything else.										
									</p>
								</div>
							</div>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-course Area -->
			

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
							<form class="form-wrap"  method="post" action="index.php">
								<h4 class="text-white pb-20 text-center mb-30">Eligible criteria for MCA</h4>		
								<input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" >
								<input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'" >
								<input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" >
								<!-- <div class="form-select" id="service-select">
									<select>
										<option datd-display="">--Select--</option>
										<option value="1">B C A</option>
										<option value="2">B.SC Computer</option>
										<option value="3">Maths group in 12th</option>
										<option value="4">Any other Computer related degree</option>
									</select>
								</div>									 -->
								<button class="primary-btn text-uppercase" name="save" value="save">Submit</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- End search-course Area -->
			
		
			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Upcoming Events on our Department</h1>
								<p>The journey of a thousand miles begins with one step</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<div class="active-upcoming-event-carusel">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p></p>
									
									<a href="#"><h4>Christmas Day
									Clebration</h4></a>
									<p>
										Christmas Day is celebrated on our department on the last week of december. We cut the cakes and there will be conducting so many games and cultural program during the celebration.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e2.jpeg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p></p>
									<a href="#"><h4>Onam celebration
									</h4></a>
									<p>
										In the Onam, we put a beautiful kolam and also all our department students and staffs are allowed to wear only the traditional dresses.On that day we may have many special programs like dance and games related to Onam.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e3.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p></p>
									<a href="#"><h4>Pongal celebration
									</h4></a>
									<p>
										Pongal is a harvest festival celebrated by the Tamil community. It is a celebration to thank the Sun, Mother Nature and the various farm animals that help to contribute to a bountiful harvest.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e4.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p></p>
									<a href="#"><h4>Teacher's Day Celebration
									</h4></a>
									<p>
										The World Teachers' Day is celebrated to honour teachers for their accomplishments, efforts, and contribution to society as well as to the lives of their students.
									</p>
								</div>
							</div>
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e5.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p></p>
									<a href="#"><h4>Food Festival
									</h4></a>
									<p>
										Food can unite and strengthen community bonds and helps to maintain a common identity among a group of people.
									</p>
								</div>
							</div>	
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e6.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p></p>
									<a href="#"><h4>New Year Celebration
									</h4></a>
									<p>
										New Year festival, any of the social, cultural, and religious observances worldwide that celebrate the beginning of the new year.
									</p>
								</div>
							</div>																						
						</div>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->
						
			<!-- Start review Area -->
			<!--<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row">
						<div class="active-review-carusel">
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
			
			<!-- Start cta-one Area -->
			<!--<section class="cta-one-area relative section-gap">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row justify-content-center">
						<div class="wrap">
							<h1 class="text-white">Become an instructor</h1>
							<p>
								There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck.
							</p>
							<a class="primary-btn wh" href="#">Apply for the post</a>								
						</div>					
					</div>
				</div>	
			</section>
			<!-- End cta-one Area -->

			<!-- Start blog Area -->
			<!--<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Latest posts from our Blog</h1>
								<p>In the history of modern astronomy there is.</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b1.jpg" alt="">								
							</div>
							<p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Addiction When Gambling Becomes A Problem</h5>
							</a>
							<p>
								Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b2.jpg" alt="">								
							</div>
							<p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Computer Hardware Desktops And Notebooks</h5>
							</a>
							<p>
								Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons. 
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b3.jpg" alt="">								
							</div>
							<p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Make Myspace Your Best Designed Space</h5>
							</a>
							<p>
								Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless.
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="img/b4.jpg" alt="">								
							</div>
							<p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
							<a href="blog-single.html">
								<h5>Video Games Playing With Imagination</h5>
							</a>
							<p>
								About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet 
							</p>
							<a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>							
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->			
			

			<!-- Start cta-two Area -->
			<!-- <section class="cta-two-area">
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
			</section> -->
			<!-- End cta-two Area -->
						
			<?php
			include 'footer.php';
			?>