<div class="clear"></div>

<!-- hero section -->
<section class="hero ha-waypoint parallax-section suggest parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
    <div class="parallax-overlay parallax-overlay-4"></div>
    <div class="grid-container">

        <!-- hero holder -->
        <div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
            <div class="hero-inner">
                <span class="hero-description">Put the Brakes on Human Trafficking</span>
                <h1 class="hero-title">Suggest For <span>Freedom</span></h1>
                <a id="to-about-section" class="hero-btn">Have Suggestions?</a>
            </div>
        </div><!-- close hero-holder -->
    </div>
</section><!-- close hero section -->



<div id="complain" class="wrap">
	<!-- donate section -->
	<section id="about-section" class="about-section content-section ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
		<div class="grid-container">
			<!-- section header -->
			<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
				<header class="section-header">
					<h2 class="section-title"><span>Suggestion</span></h2>
					<p class="section-slogan">We listen to you <strong>24*7</strong>. Feel <strong>free</strong> to express your <strong>opinions</strong> and suggestions.</p>
				</header>
			</div>
			<!-- close section header -->


		</div>
		<div class="grid-container">

<?php
    $extras = array(
        'class'  => 'form-horizontal'
    );
    echo form_open('contact/suggestion',$extras);
?>

<!--<form class="form-horizontal" method="post" action="">-->
    <fieldset>
        <!-- Form Name -->
        <legend>Express your Views and Opinions!</legend>
		<div class="col-md-offset-2 col-md-8">
        <!-- Text input-->
        <div class="form-group">
            <label class="control-label" for="subject">Subject</label>
            <div class="controls">
                <input style="background:white;color:black;border:1px solid;border-color:rgba(0,0,0,0.3);border-radius:5px;min-height:20px;" id="subject" name="subject" placeholder="Enter Subject Here" class="form-control" required="" type="text">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
                <textarea style="background:white;color:black;border:1px solid;border-color:rgba(0,0,0,0.3);border-radius:5px;min-height:20px;" class="form-control" id="description" name="description" placeholder="Enter Description here"></textarea>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="control-label" for="submitsuggestion"></label>
            <div class="controls">
                <button id="submitsuggestion" name="submitsuggestion" class="btn btn-primary">Submit Suggestion</button>
            </div>
        </div>
		</div>

    </fieldset>


</form>
		</div>
		</div>
</section>
