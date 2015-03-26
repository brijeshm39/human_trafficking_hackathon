<div class="clear"></div>

<!-- cta section -->
<section id="cta-section" class="cta-section content-section">
	<div class="grid-container">
		<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
			<span class="cta-btn cl-effect-18"><a href="#contact-section" class="cl-effect-18">Drop us a line</a></span>
		</div>
	</div>
</section><!-- close cta section -->
<!-- contact section -->
<section id="contact-section" class="contact-section parallax-section parallax-banner-5 parallax-background">
    <div class="parallax-overlay parallax-overlay-5"></div><!-- parallax overlay -->
    <div class="grid-container parallax-content">

        <!-- parallax header -->
        <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
            <header class="parallax-header">
                <h2 class="parallax-title"><span>Contact us</span></h2>
                <p class="parallax-slogan">The Doors will be <strong>Opened</strong> to those who are <strong>BOLD</strong> enough to knock!</p>
            </header>
        </div>
        <!-- close parallax header -->

        <div class="clear"></div>

        <!-- contact wrap -->
        <div class="grid-100 mobile-grid-100 tablet-grid-100">
            <div class="contact-wrap">


                <!-- contact message -->
                <div class="grid-parent grid-40 suffix-5 mobile-grid-100 tablet-grid-100">
                    <div class="contact-message">
                        <h3 class="grid-100">Our Address</h3>
                        <ul class="icons-ul">
                            <li><i class="icon-li icon-home"></i>Dnyan Mandir Building,<br /> Nerurkar Road, Datta Nagar Chowk, <br />Sangita Wadi, Dombivli(W)</li>
                            <li><i class="icon-li icon-phone"></i>(0251)-2800 303</li>
                            <li><i class="icon-li icon-envelope-alt"></i>contact@freedomforall.com</li>
                            <li><i class="icon-li icon-globe"></i>www.freedomforall.com</li>
                        </ul>
                    </div>
                </div><!-- close contact message -->

                <!-- contact form -->
                <div class="grid-parent grid-55 mobile-grid-100 tablet-grid-100">
                    <div class="contact-form-holder clearfix">


                        <h3 class="grid-100">Drop us a line</h3>

                        <!-- contact form -->
						<?php
							$form_var = array(
								'id' => 'contact_form',
								'class' => 'contact-form',
							);
							echo form_open('contact/contact_us',$form_var);
						?>


                        <ul class="grid-50">

                            <li><input id="name" class="name" type="text" name="name" placeholder="Name:" /></li>
                            <li><input id="email" class="email" type="email" name="email" placeholder="E-Mail:" /></li>
                            <li><input id="phone" class="phone" type="text" name="phone" placeholder="Phone:" /></li>

                        </ul>

                        <ul class="grid-50">
                            <li><textarea id="message" class="message" name="message" placeholder="Message:"></textarea></li>
                        </ul>

                        <div class="grid-100">
                            <input id="send_btn" class="send-btn" type="submit" name="send_btn" value="Send" />
                            <div class="success-message">Email has been sent!</div>
                            <div class="alert-message"></div>
                            <div class="error-message">Email could not be delivered. Please try again later!</div>
                        </div>
                        </form><!-- close contact form -->

                    </div>
                </div><!-- close contact-form-holder -->

            </div>
        </div><!-- close contact wrap -->


    </div><!-- close container -->
</section><!-- close contact section -->

<div class="clear"></div>


<!-- Footer Section -->
<footer class="footer">
    <div class="grid-container">
        <div class="grid-100 mobile-grid-100 tablet-grid-100">
<!--            <h3>We <i class="icon-heart"></i> your mom.</h3>-->
            <span class="copyright">Powered by <a href="" target="">Freedom For All</a></span>
        </div>
    </div><!-- close container -->
</footer><!-- close footer -->
</div>

<!-- Load Javascript
  ================================================== -->
<script src="<?php echo JS; ?>jquery.mb.YTPlayer.js"></script>
<script src="<?php echo JS; ?>jquery.flexslider-min.js"></script>
<script src="<?php echo JS; ?>jquery.parallax.min.js"></script>
<script src="<?php echo JS; ?>jquery.scrollTo.min.js"></script>
<script src="<?php echo JS; ?>waypoints.min.js"></script>
<script src="<?php echo JS; ?>jquery.magnific-popup.min.js"></script>
<script src="<?php echo JS; ?>jquery.custom.js"></script>

<!-- End Document
================================================== -->
</body>
</html>