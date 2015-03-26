<div class="clear"></div>

<!-- hero section -->
<section class="hero ha-waypoint parallax-section complain parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
    <div class="parallax-overlay parallax-overlay-4"></div>
    <div class="grid-container">

        <!-- hero holder -->
        <div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
            <div class="hero-inner">
                <span class="hero-description">Put the Brakes on Human Trafficking</span>
                <h1 class="hero-title"><span>Fight</span> For <span>Freedom</span></h1>
                <a id="to-about-section" class="hero-btn">Raise your voice</a>
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
					<h2 class="section-title"><span>Complain</span></h2>
					<p class="section-slogan">We are here to help you <strong>24*7</strong>. Just file a complain with us and we will guide to the rest of the process and do the <strong>best</strong> that we can.</p>
				</header>
			</div>
			<!-- close section header -->


		</div>
		<div class="grid-container">

<?php
$extras = array(
    'class'  => 'form-horizontal'
);
echo form_open('contact/complain',$extras);
?>
<!--<form class="form-horizontal" method="post">-->

    <fieldset>

        <!-- Form Name -->
        <legend>Lodge a Complain</legend>
		<div class="col-md-offset-2 col-md-8">
        <!-- Text input-->
        <div class="form-group">
            <label class="control-label" for="subject">Subject</label>
            <div class="controls">
                <input style="background:white;color:black;border:1px solid;border-color:rgba(0,0,0,0.3);border-radius:5px;min-height:20px;" id="subject" name="subject" autocomplete="off" placeholder="Enter Subject Here" class="form-control" required="" type="text">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="control-label" for="description">Description</label>
            <div class="controls">
                <textarea class="form-control" style="background:white;color:black;border:1px solid;border-color:rgba(0,0,0,0.3);border-radius:5px;min-height:100px;" id="description" name="description" placeholder="Enter description here"></textarea>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="control-label" for="victim">Victim</label>
            <div class="controls">
                <select id="victim" name="victim" class="form-control">
                    <option>Women</option>
                    <option>Men</option>
                    <option>Children</option>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="control-label" for="agegroup">Age Group</label>
            <div class="controls">
                <select id="age_group" name="age_group" class="form-control">
                    <option>1-5</option>
                    <option>5-10</option>
                    <option>10-15</option>
                    <option>15-20</option>
                    <option>20-25</option>
                    <option>25-30</option>
                    <option>30 and above</option>
                </select>
            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="control-label" for="address_of_victim">Address of Victim</label>
            <div class="controls">
                <textarea class="form-control" style="background:white;color:black;border:1px solid;border-color:rgba(0,0,0,0.3);border-radius:5px;min-height:100px;" id="address_of_victim" name="address_of_victim" placeholder="Enter Address of Victim"></textarea>
            </div>
        </div>

        <!-- Button -->
        <div class="form-group">
            <label class="control-label" for="submitsuggestion"></label>
            <div class="controls">
                <button id="submitcompliant" name="submitcompliant" class="btn btn-primary">Submit Complain</button>
            </div>
        </div>
		</div>
    </fieldset>


</form>

			</div>

	</section>
	<!--donate section ends-->
</div>
