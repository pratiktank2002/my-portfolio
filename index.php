<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	

	<title>pratik</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="templatemo">

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- animate -->
	<link rel="stylesheet" href="css/animate.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- google font -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
	<!-- fullpage -->
	<link rel="stylesheet" href="css/jquery.fullPage.css">
	<!-- custom -->
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link rel="stylesheet" href="css/custom.css">
	<!-- bootstrap js -->
	<script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- 3 js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/110/three.min.js"></script>
	<!-- jquery -->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- kute.js -->
	<script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>

</head>

<body>

	<div id="fullpage">
		<!-- start home -->
		<div id="home" class="section">
			<div class="container">
				<!-- 
				<svg id="visual" viewBox="0 0 900 600" width="900" height="600" 
					xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
					<rect x="0" y="0" width="900" height="600" fill="#000000"></rect>
					<g transform="translate(458.5027424138925 285.63929573909394)">
						<path id="blob1"
							d="M80.7 -83.5C95.3 -66 91.7 -33 92.8 1.2C94 35.4 100 70.7 85.4 94.4C70.7 118 35.4 130 1.9 128.1C-31.6 126.3 -63.2 110.5 -84.5 86.8C-105.8 63.2 -116.9 31.6 -110 7C-103 -17.7 -78 -35.4 -56.7 -52.9C-35.4 -70.4 -17.7 -87.7 7.7 -95.3C33 -103 66 -101 80.7 -83.5"
							fill="#BB004B"></path>
					</g>
					<g transform="translate(456.58072964022284 311.89377079247544)">
						<path id="blob2"
							d="M48.7 -58.4C62 -35.4 71 -17.7 76.1 5.1C81.1 27.8 82.3 55.6 69 68.1C55.6 80.6 27.8 77.8 -3.8 81.6C-35.4 85.4 -70.7 95.7 -84.7 83.2C-98.7 70.7 -91.4 35.4 -85.6 5.8C-79.8 -23.8 -75.6 -47.6 -61.6 -70.6C-47.6 -93.6 -23.8 -115.8 -3.1 -112.7C17.7 -109.7 35.4 -81.4 48.7 -58.4"
							fill="#BB004B"></path>
					</g>
				</svg>
				<script>
					const tween = KUTE.fromTo(
						'#blob1',
						{ path: '#blob1' },
						{ path: '#blob2' },
						{ repeat: 999, duration:1000, yoyo: true }
					)

					tween.start()
				</script>  
				-->

				<?php if (isset($_SESSION["success_message"])) : ?>
					<div id="alert" class="alert alert-success"><?php echo $_SESSION["success_message"]; ?></div>
					<?php unset($_SESSION["success_message"]); ?>
				<?php endif; ?>


				<div class="row">
					<div class="col-md-2 text-center">
						<!-- <div class="circle"></div> -->
						<img id="my-photo" class="rounded-circle shadow-4-strong" src="/images/my-photo.jpg" alt="">
					</div>
					<div class="col-md-8 wow fadeIn" data-wow-delay="0.9s">
						<h1 id="" class="font" >Pratik  tank</h1>
						<!-- <h1>Lavish</h1> -->
						<h2 class="rotate">BACKEND DEVELOPER , &AMP; ,LEARNER</h2>
						<p>hi there <span id="emoji" class=""  >👋</span>. my name is <span class="underline bigText"> pratik </span>  and i am fresher developer . who loves to work on new technology.</p>
						<!-- <h2>🛴</h2> -->
						<p>Hope You Got a good <span id="dayName" class="underline"></span>.</p>
						<a href="#work" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="1s">Get started</a>
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
		</div>
		<!-- end home -->

		<!-- start work -->
		<div id="work" class="section">
			<div class="black-shape-3">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
					<path d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill"></path>
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounce">
						<h2>WHAT I DO</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-object media-left">
								<i class="fa fa-laptop"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Responsive website</h3>
								<p>i know basic html and css. based on that i can create responsive websites.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-object media-left">
								<i class="fa fa-link"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">html &AMP; CSS Templates</h3>
								<p>i love to work on some desiging &AMP; Animation parts on websites.</p>
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-object media-left">
								<i class="fa fa-paper-plane"></i>
							</div>
							<div class="media-body">
								<h3 class="media-heading">Backend Developer</h3>
								<p>As a beginner i work at <a href="https://7technosoftsolutions.com/">7technosoftsolutions</a>, i can work on php-Laravel &AMP; As well as python.</p>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- black section divider -->
			<div class="black-sloap">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
					<path d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill"></path>
				</svg>
			</div>
		</div>
		<!-- end work -->

		<!-- start about -->
		<div id="about" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="0.9s">
						<h2 class="text-uppercase wow bounce underline">ABOUT ME</h2>
						<p> &lt; html &gt; </p>
						<div style="margin-left: 15px; border-left: 1px solid gray; padding-left: 15px;">
							<h4 class="rotate underline">BACKEND DEVELOPER , &AMP; , LEARNER</h4>
							<p > Hi ! My name is Pratik . I am from Rajkot, Gujarat.
							</p>
							<p > I done B.tech in information technology at <a href="https://www.marwadiuniversity.ac.in/">Marwadiuniversity</a>. Now i am finding
								opportunity to work with my talents as an
								fresher to get more and more experience.
							</p>
							<!-- download resume -->
							<a href="Resume.pdf" class="btn btn-dark smoothScroll wow fadeInUp" data-wow-delay="1s" title="Click to download" download>My Resume <i class="fa fa-download" style="margin-left:5px;" ></i> </a>
						</div>
						<p style="margin-top: 10px;"> &lt; /html &gt; </p>
					</div>
					<div class="col-md-6 col-xs-11 wow fadeInRight" data-wow-delay="0.9s">
						<div class="prog">
							<span class="text-top">Web Design <small>80%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
							</div>
						</div>
						<div class="prog">
							<span>Php &AMP; Laravel <small>90%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
							</div>
						</div>
						<div class="prog">
							<span>jQuery<small>70%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
							</div>
						</div>
						<div class="prog">
							<span>HTLM &AMP; CSS <small>90%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end about -->

		<!-- start project -->
		<div id="portfolio" class="section">
			<!-- svg wave -->
			<div class="black-wave">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
					<path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
				</svg>
			</div>
			<!-- wave over -->

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="myHeading" class="text-uppercase wow bounce underline zoomText">Project</h1>
					</div>

					<h3 class="my-3" >1. Pet-Zone</h3>
					<!-- <hr class="rotate" style="width:190px"> -->
					<!-- project images -->
					<div class="project images">
						<div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
							<div class="portfolio-thumb">
								<img src="project img/about-page.png" class="img-responsive" alt="portfolio img">
								<!-- <div class="portfolio-overlay">
										<h4>Web Design</h4>
										<h5>Author: Cindy</h5>
									</div> -->
							</div>
						</div>
						<div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
							<div class="portfolio-thumb">
								<img src="project img/home-page.png" class="img-responsive" alt="portfolio img">
								<div class="portfolio-overlay">
									<h4>ECommerce Website</h4>
									<!-- <h5>Author: Linda</h5> -->
								</div>
							</div>
						</div>
						<div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
							<div class="portfolio-thumb">
								<img src="project img/petproduct-page.png" class="img-responsive" alt="portfolio img">
								<!-- <div class="portfolio-overlay">
										<h4>Mobile App</h4>
										<h5>Author: Kate</h5>
									</div> -->
							</div>
						</div>
						<div class="col-md-6 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
							<div class="portfolio-thumb">
								<img src="images/pricePlan-page.png" class="img-responsive" alt="portfolio img">
								<div class="portfolio-overlay">
									<h4>Price Plan</h4>
									<!-- <h5>Author: Catherine</h5> -->
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
							<div class="portfolio-thumb">
								<img src="images/user-profile-page.png" class="img-responsive" alt="portfolio img">
								<div class="portfolio-overlay">
									<h4>User Profile</h4>
									<!-- <h5>Author: Kathy</h5> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- svg wave -->
			<div class="black-wave-2">
				<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
					<path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
					<path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
					<path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
				</svg>
			</div>
			<!-- wave over -->
		</div>
		<!-- end project -->

		<!-- start contact -->
		<div id="contact" class="section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-lg-offset-1 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
						<address>
							<p class="contact-title zoomtext">CONTACT </p>
							<p id="phoneNumber" title="Click to Copy Number" class=""><i class="fa fa-phone"></i> 72020 85207</p>
							<p id="EmailId" title="Click to Copy Email" class=""><i class="fa fa-envelope-o"></i> Pratiktank222@gmail.com</p>
							<p class=""><i class="fa fa-map-marker"></i> Rajkot, Gujarat</p>
						</address>
						<address>
							<p class="contact-title zoomtext">social</p>
							<!-- <p><i class="fa fa-phone"></i> 72020 85207</p>
							<p><i class="fa fa-envelope-o"></i> Pratiktank222@gmail.com</p>
							<p><i class="fa fa-map-marker"></i> Rajkot, Gujarat</p> -->
							<div class="row">
								<div class="col-md-2" title="facebook" >
									<a href="https://www.facebook.com/home.php">
										<p><i class="fa fa-facebook"></i> </p>
									</a>
								</div>
								<div class="col-md-2" title="Twitter" >
									<a href="https://twitter.com/home">
										<p><i class="fa fa-twitter"></i> </p>
									</a>
								</div>
								<div class="col-md-2" title="Instagram" >
									<a href="https://www.instagram.com/">
										<p><i class="fa fa-instagram"></i> </p>
									</a>
								</div>
								<div class="col-md-2" title="Linkedin" >
									<a href="https://www.linkedin.com/search/results/all/?fetchDeterministicClustersOnly=true&heroEntityKey=urn%3Ali%3Afsd_profile%3AACoAADz8VhYB892xbMPZs4X1pJQuY0eVakalmjw&keywords=pratik%20tank&origin=RICH_QUERY_SUGGESTION&position=0&searchId=94a23039-ca72-4739-bdfe-2d9e954b205b&sid=qD)">
										<p><i class="fa fa-linkedin"></i> </p>
									</a>
								</div>
							</div>
						</address>
					</div>
					<!-- testing -->

					<div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.6s">
						<h4 class="" > &lt; contact &gt; </h4>
						<form id="form" role="form" method="post" class="my-4" action="form.php" style="margin-left:15px; border-left: 1px solid gray; padding-left: 15px;">
							<input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required>
							<input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required>
							<textarea name="message" rows="5" class="form-control" id="message" placeholder="Your Message" required></textarea>
							<input name="send" type="submit" class="form-control" id="send" value="SEND ME">
						</form>
						
						<h4 class="" > &lt; /contact &gt; </h4>
					</div>
					<div class="col-md-1 col-sm-1">
						<!-- <div class="col-md-2">
							<a href="https://www.instagram.com/"><p><i class="fa fa-line"></i> </p></a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<!-- end contact -->

		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow fadeIn" data-wow-delay="0.9s">
						<p>Copyright &copy; 2023</a></p>
						
						<ul class="social-icon">
							<!-- <li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li> -->
							<li>Be Happy !</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->

	</div>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- fullpage -->
	<script src="js/jquery.fullPage.js"></script>
	<!-- smoothScroll -->
	<script src="js/smoothscroll.js"></script>
	<!-- wow -->
	<script src="js/wow.min.js"></script>
	<!-- text rotater -->
	<script src="js/jquery.simple-text-rotator.js"></script>
	<!-- custom js and 3js -->
	<script src="js/custom.js"></script>
	<!-- <script src="js/3js.js"></script> -->
	<!-- Animation 3-js -->
	<script src="/animation.js"></script>
</body>

</html>