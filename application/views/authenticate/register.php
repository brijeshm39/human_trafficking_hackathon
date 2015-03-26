<div class="clear"></div>

<!-- hero section -->
<section class="hero ha-waypoint parallax-section parallax-banner-4 parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
    <div class="parallax-overlay parallax-overlay-1"></div>
    <div class="grid-container">

        <!-- hero holder -->
        <div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
            <div class="hero-inner">
                <span class="hero-description">Put the Brakes on Human Trafficking</span>
                <h1 class="hero-title">Register for <span>Freedom</span></h1>
                <a id="to-about-section" class="hero-btn">Sign Up</a>
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
                                <h2 class="section-title"><span>Register</span></h2>
                            </header>
<?php
    $extra = array(
        'class'     => 'form-horizontal'
    );
    echo form_open('authenticate/register',$extra);

?>
    <fieldset>

        <!-- Form Name -->
        <legend>Register for Freedom</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Name</label>
            <div class="col-md-6">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="textinput" name="name" type="text" placeholder="Enter your Name" class="form-control input-md" required="on" autocomplete="on" autofocus="on">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="E-mail">E-mail</label>
            <div class="col-md-6">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="E-mail" name="email" type="email" placeholder="Enter your E-mail" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password">Password</label>
            <div class="col-md-6">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="password_confirm">Confirm Password</label>
            <div class="col-md-6">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="password_confirm" name="password_confirm" type="password" placeholder="Confirm Password" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="contactno">Contact Number</label>
            <div class="col-md-6">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="contactno" name="contactno" type="text" placeholder="+91-9xxxxxxxxx" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="address">Address</label>
            <div class="col-md-6">
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="city">City</label>
            <div class="col-md-6">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="city" name="city" type="text" placeholder="City" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="pincode">Pincode</label>
            <div class="col-md-6">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="pincode" name="pincode" type="text" placeholder="Enter your pincode" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="state">State</label>
            <div class="col-md-6">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="state" name="state" type="text" placeholder="State" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="country">Country</label>
            <div class="col-md-6">
                <select id="country" name="country" class="form-control" required="on">
                    <?php if(isset($countries)){
                        foreach($countries->result_array() as $row){
                            extract($row);
                            echo '<option value="'.$idCountry.'">'.$countryName.'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>

        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="question">Security Question</label>
            <div class="col-md-6">
                <select id="question" name="question" class="form-control" required="on">
                    <?php if(isset($questions)){
                        foreach($questions->result_array() as $row){
                            extract($row);
                            echo '<option value="'.$qid.'">'.$question.'</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label" for="state">Answer</label>
            <div class="col-md-6">
                <input style="background:white; color: black; border: 1px solid; border-color: rgba(0,0,0,0.3); border-radius: 5px; min-height: 20px" id="answer" name="answer" type="text" placeholder="Your Answer Here" class="form-control input-md" required = "on">

            </div>
        </div>

        <!-- Textarea -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="self_description">Self Description</label>
            <div class="col-md-6">
                <textarea class="form-control" id="self_description" name="self_description"></textarea>
            </div>
        </div>

        <?php
//        error_reporting(0);
//
//        require_once('recaptchalib.php');
//
//        // Get a key from https://www.google.com/recaptcha/admin/create
//        $publickey = "6Lf4DAMTAAAAAEGhBbXgXikuWeqkdG9PARvu0EpX";
//        $privatekey = "6Lf4DAMTAAAAACuWQSSsTLwpdMOlWF5gm9o320Kh";
//
//        # the response from reCAPTCHA
//        $resp = null;
//        # the error code from reCAPTCHA, if any
//        $error = null;
//
//        # was there a reCAPTCHA response?
//        if ($_POST["recaptcha_response_field"]) {
//            $resp = recaptcha_check_answer ($privatekey,
//                $_SERVER["REMOTE_ADDR"],
//                $_POST["recaptcha_challenge_field"],
//                $_POST["recaptcha_response_field"]);
//
//            if ($resp->is_valid) {
//                echo "You got it!";
//            } else {
//                # set the error code so that we can display it
//                $error = $resp->error;
//            }
//        }
//        echo recaptcha_get_html($publickey, $error);
        ?>


        <!-- Button -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="submit"></label>
            <div class="col-md-4">
                <input type="submit" id="register_button" name="register_button" class="btn btn-primary" value="Register">
            </div>
        </div>


    </fieldset>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
