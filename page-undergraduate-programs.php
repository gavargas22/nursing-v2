<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/bokeh.jpg); color:#ffffff; background-size:cover;">
         <h1>Undergraduate Programs</h1> 
        <p>
        	At the UTEP School of Nursing we pride ourselves in preparing students to be the best and brightest nurses serving the health 
        	care needs of our community and beyond. Our experienced faculty is committed to providing future nurses the tools necessary to excel 
        	in the ever changing and culturally diverse healthcare system.
        </p>
    </div>
    <div class="row">
        <!--<div class="span2">
            <?php wp_nav_menu( array( 'menu'=>'Undergraduate Programs Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
        </div>-->
		<div class="span12">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                 <div class="caption">
                    <h4>Pre-Nursing</h4>
                    <p>
                    	All students planning to enter into one of the School of Nursing’s Bachelor of Science in Nursing (BSN) tracks are required to 
                    	complete the University’s core curriculum and/or pre-professional pre-requisites. 
                    </p>
                    <p><a class="btn" href="undergraduate-pre-nursing">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <div class="caption">
                    <h4>Traditional BSN</h4>
                    <p>This four-year program of study offers nursing students innovative, conceptual and effective methods for learning.</p>
                    <p><a class="btn" href="undergraduate-traditional-bsn">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <div class="caption">
                    <h4>Accelerated “Fast Track” BSN</h4>
                    <p>This 12-month program is designed for professionals who have a bachelor degree in another field from an accredited institution and want to make a career change.</p>
                    <p><a class="btn" href="undergraduate-accelerated-fast-track">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <div class="caption">
                    <h4>RN to BSN</h4>
                    <p>Building on the educational and professional experiences of nurses with an associate degree, this online program is designed for the working nurse 
                    	with the desire of obtaining a bachelor’s degree.</p>
                    <p><a class="btn" href="undergraduate-rn-to-bsn">Read More</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>  
	</div>
</div>
<?php get_footer(); ?>