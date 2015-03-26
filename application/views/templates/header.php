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

    <header id="header-section" class="ha-header ha-header-hide">
        <div class="grid-container">
            <div class="ha-header-perspective">
                <div class="ha-header-front">
                    <div class="grid-30 tablet-grid-20 hide-on-mobile">
                        <h1 class="logo"><a href="#top"><img src="<?php echo IMAGES; ?>logo.png" alt="logo" /></a></h1>
                    </div>
                    <a href="#menubar">
					<nav id="ut-navigation" class="grid-70 tablet-grid-80 mobile-grid-100">
                                            <a href="http://localhost/human_trafficking/index.php">Home</a>


						<a href="http://localhost/human_trafficking/blog">Blog</a>

						<?php echo anchor('home/gallery','Gallery')?>
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
						</a>
                </div>
            </div><!-- close .ha-header-perspective -->
        </div><!-- close grid container -->
    </header><!-- close header -->

    <div class="clear"></div>