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
<!-- header section -->

<!-- Page Layout
	================================================== -->

<!-- header section -->
<header id="header-section" class="ha-header ha-header-hide">
	<div class="grid-container">
		<div class="ha-header-perspective">
			<div class="ha-header-front">
				<div class="grid-30 tablet-grid-20 hide-on-mobile">
					<h1 class="logo"><a href="#top"><img src="images/logo.png" alt="logo" /></a></h1>
				</div>
				<nav id="ut-navigation" class="grid-70 tablet-grid-80 mobile-grid-100">
					<a class="selected" href="#top">Home</a>
					<a href="#main-content">About</a>
					<a href="#team-section">Team</a>
					<a href="#service-section">Service</a>
					<a href="#portfolio-section">Work</a>
					<a href="#contact-section">Contact</a>
				</nav>
			</div>
		</div><!-- close .ha-header-perspective -->
	</div><!-- close grid container -->
</header><!-- close header -->



<a id="top"></a>


<!--jhol-->
<div class="clear"></div>

<!-- hero section -->
<section class="hero ha-waypoint parallax-section parallax-banner-1 parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
    <div class="parallax-overlay parallax-overlay-1"></div>
    <div class="grid-container">

        <!-- hero holder -->
        <div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
            <div class="hero-inner">
                <span class="hero-description">Put the Brakes on Human Trafficking</span>
                <h1 class="hero-title">Gallery of<span> Truth</span></h1><br>
                <a id="to-about-section" class="hero-btn">Let's face it</a>
            </div>
        </div><!-- close hero-holder -->
    </div>
</section><!-- close hero section -->

<!--<div id="main-content" class="wrap">-->


<div class="clear"></div>
<div id="portfolio-section" class="wrap">
	<!-- portfolio section -->
	<section id="portfolio-section" class="portfolio-section content-section" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
		<div class="grid-container">

			<!-- section header -->
			<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
				<header class="section-header">
					<h2 class="section-title"><span>Image Gallery</span></h2>
					<p class="section-slogan">We believe our work <strong>speaks</strong> for itself. Browse our most recent projects below.</p>
				</header>
			</div>
			<!-- close section header -->

			<div class="clear"></div>


						<?php
	//                        var_dump($gallery);
							if(isset($gallery)){
								foreach($gallery->result_array() as $row){
									extract($row);
									$path = UPLOAD_FOLDER.$file_name;
	//
									echo '
		<div class="grid-33 mobile-grid-50 tablet-grid-50">
			<a class="portfolio-popup" href="'.$path.'">
				<div class="portfolio-box"><figure class="portfolio-image"><img src="'.$path.'" height="300px" width ="300px" alt="Gallery Image" /></figure><!-- close portfolio image -->
								<div class="portfolio-caption">
								<h3 class="portfolio-title">Click <span class="portfolio-category">to view image</span></h3> </div><!-- close portfolio caption -->
				</div>
			</a>
		</div><!-- close portfolio -->';
								}
							}

						?>


		</div><!-- close grid-container -->
	</section><!-- close portfolio section -->
</div>
	</div>