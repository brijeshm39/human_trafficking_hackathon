<div class="clear"></div>

<!-- hero section -->
<section class="hero ha-waypoint parallax-section parallax-banner-1 parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
	<div class="parallax-overlay parallax-overlay-1"></div>
	<div class="grid-container">

		<!-- hero holder -->
		<div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
			<div class="hero-inner">
				<span class="hero-description">Put the Brakes on Human Trafficking</span>
				<h1 class="hero-title">Donate for <span>Freedom</span></h1>
				<a id="to-about-section" class="hero-btn">Learn More</a>
			</div>
		</div><!-- close hero-holder -->
	</div>
</section><!-- close hero section -->
<div id="donate" class="wrap">
<!-- donate section -->
<section id="about-section" class="about-section content-section ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
	<div class="grid-container">
		<!-- section header -->
		<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
			<header class="section-header">
				<h2 class="section-title"><span>Donation Schemes</span></h2>
				<p class="section-slogan">We are passionate about fighting <strong>injustice</strong> and deeply committed to helping people just like you in the <strong>fight</strong>. We cannot do this alone, but together we can make a <strong>difference!!</strong> Your giving makes it possible for us to continue our work.</p>
			</header>
		</div>
		<!-- close section header -->

		<!--General Donation-->
		<div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
			<figure class="about-icon"><img src="<?php echo IMAGES;?>donation.png" alt="app-development" /></figure>
			<div class="about-box">
				<h3>General Donation</h3>
				<p>Your contribution will help us strive harder for the needy. Select this for one time donation and getting in touch with us!</p>
			</div>
		</div>

		<!--Yearly Donation-->
		<div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
			<figure class="about-icon"><img src="<?php echo IMAGES;?>donation.png" alt="app-development" /></figure>
			<div class="about-box">
				<h3>Yearly Donation</h3>
				<p>Our promise is to help people who are in need. We have been working all over the years and want to work always. We expect your participation too.</p>
			</div>
		</div>
	</div>
	<div class="grid-container">
		<?php
			$form_var = array(
				'class' => 'form-horizontal',
			);
			echo form_open('donate/accept',$form_var);
		?>
			<fieldset>

				<!-- Form Name -->
				<legend>Your help will help someone!</legend>
				<br>
				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="donation_scheme">Donation Scheme</label>
					<div class="col-md-5">
						<select id="donation_scheme" name="donation_scheme" class="form-control">
							<option value="1">General Donation</option>
							<option value="2">Yearly Donation</option>
						</select>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="bank_name">Bank</label>
					<div class="col-md-5">
						<input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="bank_name" name="bank_name" type="text" placeholder="Name of the Bank" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="card_type">Credit Card Type</label>
					<div class="col-md-5">
						<select id="card_type" name="card_type" class="form-control">
							<option value="1">VISA</option>
							<option value="2">MASTER CARD</option>
						</select>
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="credit_card">Credit Card No.</label>
					<div class="col-md-5">
						<input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="credit_card" name="credit_card" type="text" placeholder="16-digit card number" class="form-control input-md" required="" autocomplete="off">

					</div>
				</div>

				<!-- Password input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="credit_password">CVV Number</label>
					<div class="col-md-5">
						<input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="credit_password" name="credit_password" type="password" placeholder="3-digit password" class="form-control input-md" required="">

					</div>
				</div>

				<!-- Prepended text-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="amount">Amount</label>
					<div class="col-md-5">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon-rupee"></i></span>
							<input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="amount" name="amount" class="form-control" placeholder="Amount in INR" type="text" required="">
						</div>

					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="submit"></label>
					<div class="col-md-4">
						<button id="submit" name="submit" class="btn btn-success">Donate</button>
					</div>
				</div>

			</fieldset>
		</form>

	</div>
</section>
<!--donate section ends-->
</div>
