<!-- hero section -->
<section class="hero ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">

    <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=I23C47kLBQg',containment:'body',autoPlay:true, mute:true, startAt:0, opacity:1}">My video</a>

    <div class="parallax-overlay parallax-overlay-1"></div>
    <div class="grid-container">

        <!-- hero holder -->
        <div class="hero-holder grid-70 mobile-grid-100 tablet-grid-100">
            <div class="hero-inner">
<!--                <span class="hero-description">Creative Agency - Professional Photographer - Web Development</span>-->
<!--                <h1 class="hero-title">We are <span>Brooklyn</span></h1>-->

                <a id="to-about-section" class="hero-btn">Skip Video</a>
            </div>
        </div><!-- close hero-holder -->
    </div>
</section><!-- close hero section -->

<div class="clear"></div>

<div id="main-content" class="wrap">

    <!-- about section -->
    <section id="about-section" class="about-section content-section ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small">
        <div class="grid-container">

            <!-- section header -->
            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="section-header">
                    <h2 class="section-title"><span>About <strong>Freedom For All</strong></span></h2>
                    <p class="section-slogan">"All that is necessary for evil to triumph is for good men to do nothing."</p>
                </header>
            </div>
            <!-- close section header -->

            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo IMAGES;?>prevention.jpg" alt="Prevention" /></figure>

                <div class="about-box">
                    <h3>Prevention</h3>
                    <p>We work to stop individuals from becoming victims of human trafficking by providing awareness, and education to the next generation.</p>
                </div>
            </div>

            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo IMAGES;?>protection.jpg" alt="Protection" /></figure>

                <div class="about-box">
                    <h3>Protection</h3>
                    <p>We protect survivors of human trafficking by providing a safe environment and by running restoration programs in our aftercare facilities.</p>
                </div>
            </div>

            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo IMAGES;?>prosecution.jpg" alt="Prosecution" /></figure>

                <div class="about-box">
                    <h3>Prosecution</h3>
                    <p>We work to prosecute traffickers, provide survivors with legal council, and strengthen the legal response to human trafficking.</p>
                </div>
            </div>

            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo IMAGES;?>partnership.jpg" alt="Partnership" /></figure>

                <div class="about-box">
                    <h3>Partnership</h3>
                    <p>We aim to partner with fundraising supporters, governmental agencies, and community members to see injustice abolished.</p>
                </div>
            </div>

        </div><!-- close grid-container -->
		<div class="grid-container">
			<p>When confronted with the horrific statistics surrounding human trafficking, it is easy to agree on the fact that "someone should do something.” In 2007, Freedom For All recognized the need to be that "someone" and committed to combat the injustice of human trafficking through rescuing one life at a time. After extensive research, planning, fundraising, more research, and relationship building, we opened our first shelter for survivors of human trafficking at the end of 2008 in Mumbai, India.</p>
			<p>Today, we have identified a global need for rescue, rehabilitation, and restoration. Because of the growing necessity, we have established 10 field offices, shelters, transition homes, and administrative bases in nine countries.</p>
			<p>Our strategy is based on the 4P Paradigm: <strong>Prevention, Protection, Prosecution, and Partnership</strong>.</p>
			<p>Simply put, Freedom For All exists to abolish injustice in the 21st century through a comprehensive system achieving preventative measures to help potential victims evade trafficking, victim protection through our shelters and aftercare program, prosecution of violators, and strategic partnerships.</p>
			<p>We do not claim to be the “experts,” and recognize that our fight for justice is a great one. Freedom For All rings true through the famous words of Margaret Mead, "Never doubt that a small group of thoughtful committed people can change the world. Indeed, it is the only thing that ever has."</p>
		</div>
    </section><!-- close about section -->


	<div class="clear"></div>

	<section id="portfolio-section" class="portfolio-section content-section">
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
//				                        var_dump($gallery);
				$i = 1;
				if(isset($gallery)){
					foreach($gallery->result_array() as $row){
						$i++;
						extract($row);
						$path = UPLOAD_FOLDER.$file_name;

						echo '
    <div class="grid-33 mobile-grid-50 tablet-grid-50">
        <a class="portfolio-popup" href="'.$path.'">
            <div class="portfolio-box"><figure class="portfolio-image"><img src="'.$path.'" height="300px" width ="300px" alt="Gallery Image" /></figure><!-- close portfolio image -->
                            <div class="portfolio-caption">
                            <h3 class="portfolio-title">Click <span class="portfolio-category">to view image</span></h3> </div><!-- close portfolio caption -->
            </div>
        </a>
    </div><!-- close portfolio -->';

						if($i>3)
							break;
					}
				}

			?>


		</div><!-- close grid-container -->
	</section><!-- close portfolio section -->



	<div class="clear"></div>

	<!-- team section -->
	<section id="team-section" class="team-section content-section">
		<div class="grid-container">

			<!-- section header -->
			<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
				<header class="section-header">
					<h2 class="section-title"><span>Our Team</span></h2>
					<p class="section-slogan">We believe in a <strong>diverse</strong> range of personel to bring creative skills, thoughts, and <strong>ideas</strong> to the table.</p>
				</header>
			</div>
			<!-- close section header -->

			<div class="clear"></div>

			<!-- member 1 -->
			<div class="member-box grid-33 mobile-grid-100 tablet-grid-50">
				<figure class="member-photo"><img src="<?php echo IMAGES;?>nilesh.png" alt="member" /></figure>

				<div class="member-box">
					<h3>Nilesh Thadani</h3>
					<span>Co-Founder</span>
				</div>

			</div><!-- close member -->

			<!-- member 1 -->
			<div class="member-box grid-33 mobile-grid-100 tablet-grid-50">
				<figure class="member-photo"><img src="<?php echo IMAGES;?>brijesh.jpg" alt="member" /></figure>

				<div class="member-box">
					<h3>Brijesh Modi</h3>
					<span>Co-Founder</span>
				</div>

			</div><!-- close member -->

			<!-- member 1 -->
			<div class="member-box grid-33 mobile-grid-100 tablet-grid-50">
				<figure class="member-photo"><img src="<?php echo IMAGES;?>nisha.jpg" alt="member" /></figure>

				<div class="member-box">
					<h3>Nisha Sajnani</h3>
					<span>Co-Founder</span>
				</div>

			</div><!-- close member -->




		</div><!-- close grid-container -->
	</section><!-- close team section -->





	<div class="clear"></div>

	<!-- parallax banner 4 -->
	<section id="social-section" class="parallax-section social parallax-background social-section">
		<div class="parallax-overlay parallax-overlay-4"></div><!-- parallax overlay -->
		<div class="grid-container parallax-content">
			<div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">

				<!-- parallax header -->
				<div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
					<header class="parallax-header">
						<h2 class="parallax-title"><span>Get Connected</span></h2>
						<p class="parallax-slogan">We have a good platform for you to come and share your stories of braveness and inspiration. Also a good platform wherein you can join us. If you wish to volunteer with us email us on <strong>career@freedomforall.com</strong></p>
					</header>
				</div>
				<!-- close parallax header -->

				<div class="clear"></div>

				<!-- social network -->
				<ul class="social-network">
					<li class="facebook grid-25 tablet-grid-25 mobile-grid-50">
						<a class="social-link" href="http://www.facebook.com/vsmandal.dombivli" target="_blank">
							<span class="social-icon"><i class="icon-facebook icon-4x"></i></span>
							<span class="social-title">Facebook</span>
							<span class="social-info">Join the Conversation</span>
						</a>
					</li>
					<li class="twitter grid-25 tablet-grid-25 mobile-grid-50">
						<a class="social-link" href="https://twitter.com/vsmandal" target="_blank">
							<span class="social-icon"><i class="icon-twitter icon-4x"></i></span>
							<span class="social-title">Twitter</span>
							<span class="social-info">Get the Latest News</span>
						</a>
					</li>
					<li class="google-plus grid-25 tablet-grid-25 mobile-grid-50">
						<a class="social-link" href="https://plus.google.com/wm/2/+Nucleitechnologies" target="_blank">
							<span class="social-icon"><i class="icon-google-plus icon-4x"></i></span>
							<span class="social-title">Google Plus</span>
							<span class="social-info">Join Our Circle</span>
						</a>
					</li>
					<li class="youtube grid-25 tablet-grid-25 mobile-grid-50">
						<a class="social-link" href="https://www.youtube.com/watch?v=I23C47kLBQg" target="_blank">
							<span class="social-icon"><i class="icon-youtube icon-4x"></i></span>
							<span class="social-title">YouTube</span>
							<span class="social-info">View Exclusive Videos</span>
						</a>
					</li>

				</ul><!-- close social network -->

			</div><!-- close grid-100 -->
		</div><!-- close grid container -->
	</section><!-- close parallax banner 4-->
	<!-- close social section -->

