<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!--
=======================================================================================
 Human Trafficking Project Designed and Developed By
 : Brijesh Modi     <brijesh.modi@ves.ac.in>
 : Nilesh Thadani   <nilesh.thadani@ves.ac.in>
 : Nisha Sajnani    <nisha.sajnani@ves.ac.in>
=======================================================================================
-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" />
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<title><?php if(isset($title)){
			echo $title;
		}else{
			echo "Freedom For All | Human Trafficking";
		}
		?></title>
	<meta name="description" content="" />
	<meta name="author" content="Nilesh Thadani, Nisha Sajnani, Brijesh Modi" />

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo CSS ; ?>reset.css" media="all" />
	<link rel="stylesheet" href="<?php echo CSS ; ?>ut-fontface.css" media="all" />
	<link rel="stylesheet" href="<?php echo CSS ; ?>font-awesome.css" media="all" />
	<link rel="stylesheet" href="<?php echo CSS ; ?>flexslider.css" media="all" />
	<link rel="stylesheet" href="<?php echo CSS ; ?>magnific-popup.css" media="all" />
	<link rel="stylesheet" href="<?php echo CSS ; ?>ut-responsive-grid.css" media="all" />
	<link rel="stylesheet" href="<?php echo CSS ; ?>style.css" media="all" />

	<link rel="stylesheet" href="<?php echo CSS_BOOTSTRAP ; ?>bootstrap.min.css" media="all" />
	<link rel="stylesheet" href="<?php echo CSS_BOOTSTRAP ; ?>bootstrap-theme.min.css" media="all" />


	<!-- DEMO Switcher
	  ================================================== -->
	<!--    <link rel="stylesheet" href="../styleswitcher/css/styleswitcher.css" />-->
	<!--[if lt IE 9]>
	<script src="<?php echo JS; ?>html5.js"></script>
	<![endif]-->

	<!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS ; ?>ie8.css" />
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

	<!-- Load jQuery
	  ================================================== -->
	<script src="<?php echo JS; ?>jquery.min.js"></script>
	<script src="<?php echo JS; ?>modernizr.js"></script>
	<script src="<?php echo JS; ?>device.min.js"></script>

	<!-- DEMO Switcher
	  ================================================== -->
	<!--    <script src="../styleswitcher/js/styleswitcher.js"></script>-->

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


</head>


<body id="mainsite">

<a id="top"></a>

<!-- Page Layout
================================================== -->

<!-- header section -->
<header id="header-section" class="ha-header ha-header-hide">
	<div class="grid-container">
		<div class="ha-header-perspective">
			<div class="ha-header-front">
				<div class="grid-30 tablet-grid-20 hide-on-mobile">
					<h1 class="logo"><a href="#top"><img src="<?php echo IMAGES ?>logo.png" alt="logo" /></a></h1>
				</div>
				<nav id="ut-navigation" class="grid-70 tablet-grid-80 mobile-grid-100">
					<?php echo anchor('','Home')?>
					<a href="#contact-section">Contact</a>

					<?php
						if(isset($_SESSION['user_email'])){
							echo anchor('donate/','Donate');
							echo anchor('authenticate/login','Dashboard');
							echo anchor('authenticate/logout','Logout');
						}else{
							echo anchor('authenticate/login','Login');
							echo anchor('authenticate/register','Register');
						}
					?>

				</nav>
			</div>
		</div><!-- close .ha-header-perspective -->
	</div><!-- close grid container -->
</header><!-- close header -->

<div class="clear"></div>


<!-- hero section -->
<section class="hero ha-waypoint parallax-section parallax-banner-2 parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
	<div class="parallax-overlay parallax-overlay-1"></div>
	<div class="grid-container">

		<!-- hero holder -->
		<div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
			<div class="hero-inner">
				<span class="hero-description">Put the breaks on Human Trafficking</span>
				<h1 class="hero-title">Welcome to<span> Dashboard </span></h1>
				<a id="to-about-section" class="hero-btn">Let's Check it</a>
			</div>
		</div><!-- close hero-holder -->
	</div>
</section><!-- close hero section -->

<div class="clear"></div>

<div id="main-content" class="wrap">

	<section id="about-section" class="about-section content-section ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small" style="margin: 0;padding: 0">
		<div class="grid-container">

<!--			//new content here-->

			<section id="portfolio-section" class="portfolio-section content-section">
				<div class="grid-container">

					<!-- section header -->
					<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
						<header class="section-header">
							<h2 class="section-title"><span>Member Area</span></h2>
							<p class="section-slogan">We believe members are our <strong>assets</strong>. We together can make a significance and help people who need us..</p>
						</header>
					</div>
					<!-- close section header -->

					<div class="clear"></div>


					<!-- User donation -->
					<div class="grid-33 mobile-grid-33 tablet-grid-33">
						<a href="<?php URL?>donate">
							<div class="portfolio-box">
								<figure class="portfolio-image"><img src="<?php echo IMAGES ?>donation.png" alt="Donation" /></figure><!-- close donation image -->
								<div class="portfolio-caption">
									<h3 class="portfolio-title">Donate<span class="portfolio-category">Help us to help someone</span></h3>
								</div><!-- close donate caption -->
							</div>
						</a>
					</div><!-- close user donation -->
					<!-- User suggestion -->
					<div class="grid-33 mobile-grid-33 tablet-grid-33">
						<a href="<?php URL?>contact/suggestion">
							<div class="portfolio-box">
								<figure class="portfolio-image"><img src="<?php echo IMAGES ?>suggestion.jpg" alt="Suggestions" /></figure><!-- close suggestion image -->
								<div class="portfolio-caption">
									<h3 class="portfolio-title">We welcome your Suggestion<span class="portfolio-category">Click to give suggestion/opinions.</span></h3>
								</div><!-- close suggestion caption -->
							</div>
						</a>
					</div><!-- close user suggestion -->
					<!-- User complains -->
					<div class="grid-33 mobile-grid-33 tablet-grid-33">
						<a href="<?php URL?>contact/complain">
							<div class="portfolio-box">
								<figure class="portfolio-image"><img src="<?php echo IMAGES ?>complains.jpg" alt="Complains" /></figure><!-- close complain image -->
								<div class="portfolio-caption">
									<h3 class="portfolio-title">Complains<span class="portfolio-category">Click to register a complain</span></h3>
								</div><!-- close complain caption -->
							</div>
						</a>
					</div><!-- close user complains -->


				</div><!-- close grid-container -->
			</section><!-- close user section -->

		</div>
	</section>
</div>


