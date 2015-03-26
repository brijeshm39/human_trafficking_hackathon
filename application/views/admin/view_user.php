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
				<h1 class="hero-title">All Users<span> Details</span></h1>
				<a id="to-about-section" class="hero-btn">Let's Check it</a>
			</div>
		</div><!-- close hero-holder -->
	</div>
</section><!-- close hero section -->

<div class="clear"></div>

<div id="main-content" class="wrap">

	<section id="about-section" class="about-section content-section ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
		<div class="grid-container">

			<div id="page-wrapper">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h1 class="page-header">All Active Users</h1>
					</div>
					<!-- /.col-md-12 col-sm-12 -->
				</div>
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							User Database
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
									<tr>
										<th>User ID</th>
										<th>Name</th>
										<th>Email</th>
										<th>Contact no.</th>
										<th>Self Description</th>
										<th>Status</th>
									</tr>
									</thead>
									<tbody>
									<?php

										foreach($details->result_array() as $fetchrow){
											$myid=$fetchrow['user_id'];
											echo "<tr class='odd gradeX'><td>".$fetchrow['user_id']."</td>";
											echo "<td>".anchor("admin/edit_user/$myid",$fetchrow['name'])."</td>";
											echo "<td>".$fetchrow['email']."</td>";
											echo "<td>".$fetchrow['contact_no']."</td>";
											echo "<td>".$fetchrow['self_description']."</td>";
											echo "<td>".$fetchrow['status']."</td></tr>";
										}
									?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
</div>








