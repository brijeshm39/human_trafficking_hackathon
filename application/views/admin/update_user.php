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
				<h1 class="hero-title">Edit User<span> Details</span></h1>
				<a id="to-about-section" class="hero-btn">Let's Do it</a>
			</div>
		</div><!-- close hero-holder -->
	</div>
</section><!-- close hero section -->

<div class="clear"></div>

<div id="main-content" class="wrap">






























<div id="page-wrapper">
<div class="row">
    <div class="col-md-12 col-sm-12">
        <h1 class="page-header">Edit User</h1>
    </div>
    <!-- /.col-md-12 col-sm-12 -->
</div>
<?php
foreach ($edit->result_array() as $detailing);
{
$id=$detailing['user_id'];
    $extra = array(
        'class'     => 'form-horizontal'
    );
    echo form_open('',$extra);
    echo validation_errors();
?>


<fieldset>

        <!-- Form Name -->
        <legend></legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Name</label>
            <div class="col-md-4">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="textinput" value="<?php echo $detailing['name']; ?>" name="name" type="text" placeholder="Enter your Name" class="form-control input-md" required="on" autocomplete="on" autofocus="on">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="E-mail">E-mail</label>
            <div class="col-md-4">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="E-mail" value="<?php echo $detailing['email']; ?>" name="email" type="email" placeholder="Enter your E-mail" class="form-control input-md" required = "on">

            </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="contactno">Contact Number</label>
            <div class="col-md-4">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="contact_no" value="<?php echo $detailing['contact_no']; ?>" name="contact_no" type="text" placeholder="+91-9xxxxxxxxx" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="address">Address</label>
            <div class="col-md-4">
                <textarea class="form-control" id="address"  name="address"><?php echo $detailing['address']; ?></textarea>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="city">City</label>
            <div class="col-md-4">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="city" value="<?php echo $detailing['city']; ?>" name="city" type="text" placeholder="City" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="pincode">Pincode</label>
            <div class="col-md-4">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="pincode" value="<?php echo $detailing['pincode']; ?>" name="pincode" type="text" placeholder="Enter your pincode" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="state">State</label>
            <div class="col-md-4">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="state" value="<?php echo $detailing['state']; ?>" name="state" type="text" placeholder="State" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="country">Country</label>
            <div class="col-md-4">
                <select id="country" name="country" class="form-control" required="on">
                   <?php
                   if(isset($countries)){
                        foreach($countries->result_array() as $row){
                            extract($row);
                            $selected ="";
                            if($idCountry == $detailing['country'])
                                $selected = 'selected';


                            echo '<option value = "'.$idCountry.'" '.$selected.' >'.$countryName.'</option>';
                        }

                    }//End if
     ?>







    </select>
</div>
</div>

<!-- Textarea -->
<div class="form-group">
    <label class="col-md-4 control-label" for="self_description">Self Description</label>
    <div class="col-md-4">
        <textarea class="form-control" id="self_description" name="self_description"><?php echo $detailing['self_description']; ?></textarea>
    </div>
</div>



<!-- Button -->
<div class="form-group">
    <label class="col-md-4 control-label" for="submit"></label>
    <div class="col-md-4">
        <button id="register_button" name="update" class="btn btn-primary">Update</button>
    </div>
</div>

</fieldset>

</form>
    <?php } ?>
</div>