<div class="clear"></div>

<!-- hero section -->
<section class="hero ha-waypoint parallax-section parallax-banner-1 parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
    <div class="parallax-overlay parallax-overlay-1"></div>
    <div class="grid-container">

        <!-- hero holder -->
        <div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
            <div class="hero-inner">
                <span class="hero-description">Put the Brakes on Human Trafficking</span>
                <h1 class="hero-title">Login for <span>Freedom</span></h1>
                <a id="to-about-section" class="hero-btn">Login</a>
            </div>
        </div><!-- close hero-holder -->
    </div>
</section><!-- close hero section -->

<div class="clear"></div>
<div id="login" class="wrap">
    <!-- login section -->
    <section id="about-section" class="about-section content-section ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
        <div class="grid-container">
            <div class="container">
                <div class="row">
                    <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                        <div class="col-md-12">


                                <header class="section-header">
                                    <h2 class="section-title"><span>Login</span></h2>
                                </header>

                        <?php echo form_open('authenticate/login'); ?>
                            <div class="col-md-offset-3 col-md-6">
                            <div class="form-group">
                                <label for="email-address">Email address</label>
                                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" type="email" class="form-control" id="email-address" name="email" autocomplete="on" autofocus="on" required="on"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" type="password" class="form-control" id="password" name="password" required="on"/>
                            </div>
                            <?php echo anchor('authenticate/forgot_password','Forgot Password?'); ?><br><br>
                            <button type="submit" name="login_button" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                    <div class="col-md-6 column">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--login section ends-->
</div>
