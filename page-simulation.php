<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <div id="imageSlider" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
            <li data-target="#imageSlider" data-slide-to="1"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner" id="slidingElements">
            <div class="active item">
                <img src="http://farm4.staticflickr.com/3167/2562952041_b0621988b1_o.jpg" width="1200px" height="400px" />
                <div class="slideshow-caption">
                	<h1>New Simulation Website</h1>
                	<p><i>We released a new website packed with useful features.</i></p>
                </div>
            </div>
            <div class="item">
                <img src="http://farm6.staticflickr.com/5219/5417132086_221b630f87_o.jpg" width="1200px" height="400px" />
                <div class="slideshow-caption">
                	<h1>Look at our new features!</h1>
                	<p><i>Advancing the science of Nursing with cutting edge simulation.</i></p>
                </div>
            </div>
        </div>
	<a class="carousel-control left" id="custom-controls" href="#imageSlider" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" id="custom-controls" href="#imageSlider" data-slide="next">&rsaquo;</a>

    </div>
    <div class="container">
        <div class="row">
            <div class="span8">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                	<h2><?php the_title(); ?></h2>

                <p>
                    <?php the_content(); ?>
                </p>
                <?php endwhile; else: ?>
                <?php endif; ?>
                <?php edit_post_link( 'Edit'); ?>
            </div>
            <div class="span4">
            	<h2>Important Links</h2>
            	<div class="span3">
                	<h3>Helpful Resources</h3> 
                	<p>Our goal is to provide our future students with the tools and resources they need to apply and succeed in the UTEP School of Nursing.</p>
                	<p><a class="btn btn-primary" href="sa-helpful-resources">View details »</a>
                	</p>
            	</div>
            	<div class="span3">
                	<h3>Degree Programs</h3> 
                	<p>The School of Nursing offers a variety of BSN, MSN and PhD tracks that are right for you.</p>
                	<p><a class="btn btn-primary" href="prospective">View Programs »</a></p>
            	</div>
                <div class="span4" style="margin-left:0;">
                    <img src="http://orspprofile.utep.edu/profilesystem/images/0/1934_0_2070.jpg" class="img-polaroid" alt="Mr. Ronnie Stout">
                    <p><address>
  					<strong>Mr. Ronnie Stout</strong><br>
  					Family Nurse Practitioner Director/Advisor<br />
  					<a href="mailto:rcstout@utep.edu">rcstout@utep.edu</a><br />
  					(915)747-8204   <br />
					</address>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <?php get_template_part( 'alert-part' ); ?>
    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item">…</div>
            <div class="item">…</div>
            <div class="item">…</div>
        </div>
        <!-- Carousel nav -->	<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

    </div>
    <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/03.jpg); color:#ffffff; background-size:cover; background-position: 50% 100%;">
        	<h1>Academic Advising</h1>

        <p><i>Office of Student Affairs</i>
        </p>
        <p>The Office of Student Affairs for the School of Nursing provides academic advising and highlights educational resources for current and prospective students. Our goal is to assist you in attaining your academic goals in a timely manner.</p>
    </div>
    <div class="row">
        <div class="span9" id="page-items">
            <div class="span4">
                 <h3>Applications and Deadlines</h3> 
                <p>Applications will only be available during application windows.</p>
                <p><a class="btn btn-primary" href="apps">Applications »</a>

                </p>
            </div>
            <div class="span4">
                 <h3>Degree Programs</h3> 
                <p>The School of Nursing offers a variety of BSN, MSN and PhD tracks that are right for you.</p>
                <p><a class="btn btn-primary" href="prospective">View Programs »</a>

                </p>
            </div>
            <div class="span4">
                 <h3>Office of Student Affairs Directory</h3> 
                <p>The knowledgeable staff at the Office of Student Affairs will help you identify the program that is right for you.</p>
                <p><a class="btn btn-primary" href="sa-directory">Meet our Staff »</a>

                </p>
            </div>
            <div class="span4">
                 <h3>Helpful Resources</h3> 
                <p>Our goal is to provide our future students with the tools and resources they need to apply and succeed in the UTEP School of Nursing.</p>
                <p><a class="btn btn-primary" href="sa-helpful-resources">View details »</a>

                </p>
            </div>
        </div>
        <div class="span3">
            	<h2>Important Links</h2>

            <div id="sidebar" class="well">
                <?php wp_nav_menu( array( 'menu'=>'Student Affairs Important Links Page', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?></div>
            <!--<div class="span3">
            		Information
            	</div>--></div>
    </div>
</div>
<?php get_footer(); ?>