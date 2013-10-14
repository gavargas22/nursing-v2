<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <div class="container" id="simlab-microsite-title">
    	<h2><span style="color:#003168">School of Nursing</span> <span style="color:#FAA732">SimLab</span></h2>
    	<p><span style="color:#555">Using the latest simulation technology to advance the training and competency of our future Nurses and Healthcare Profesisonals.</span></p>
    </div>
    
    <div id="imageSlider" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
            <li data-target="#imageSlider" data-slide-to="1"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner" id="slidingElements">
            <div class="active item">
                <img src="http://nursing.utep.edu/beta/wp-content/themes/nursing-v2/img/6879.jpg" width="1200px" height="400px" />
                <div class="slideshow-caption">
                	<h1>Dean Elias Provencio-Vazquez</h1>
                	<p><i>The Dean of the College of Nursing is pushing for more inovation.</i></p>
                </div>
            </div>
            <div class="item">
                <img src="http://nursing.utep.edu/beta/wp-content/themes/nursing-v2/img/UTEP_0001.jpg" width="1200px" height="400px" />
                <div class="slideshow-caption">
                	<h1>The UTEP School of Nursing</h1>
                	<p><i>Our school is changing the face of Nursing, with our state of the art installations and world class faculty, we are the best option in Nursing Education.</i></p>
                </div>
            </div>
        </div>
	<a class="carousel-control left" id="custom-controls" href="#imageSlider" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" id="custom-controls" href="#imageSlider" data-slide="next">&rsaquo;</a>
    </div>
    <div class="container">
    	<div class="simlab-top-items-wrapper">
    		<div class="simlab-top-items-element">
    			<div class="simlab-top-items-element-title">Calendar of Events</div>
    			<div class="simlab-top-items-element-calendar-wrapper">
    				<div class="simlab-top-items-element-todays-date">Today: October 10, 2013</div>
    				<div class="simlab-top-items-element-calendar-appointment">
    					<div class="simlab-top-items-element-calendar-appointment-title"><a href="#">Art Installation in the SimLab</a></div>
    					<div class="simlab-top-items-element-calendar-appointment-date">October 42, 2023</div>
    				</div>
    				<div class="simlab-top-items-element-calendar-appointment">
    					<div class="simlab-top-items-element-calendar-appointment-title"><a href="#">Simulated Hospital Day</a></div>
    					<div class="simlab-top-items-element-calendar-appointment-date">November 22, 2023</div>
    				</div>
    				<div class="simlab-top-items-element-calendar-appointment">
    					<div class="simlab-top-items-element-calendar-appointment-title"><a href="#">SimLab Open House</a></div>
    					<div class="simlab-top-items-element-calendar-appointment-date">January 14, 2024</div>
    				</div>
    			</div>
    		</div>
    		<div class="simlab-top-items-element">
    			<div class="simlab-top-items-element-title">Our Installations</div>
    			<div class="simlab-top-items-element-content-wrapper">
    				<div class="simlab-top-items-element-content-thumbnail"><img src="http://nursing.utep.edu/beta/wp-content/themes/nursing-v2/img/6840.jpg" /></div>
    				<div class="simlab-top-items-element-info-wrapper">
    					<div class="simlab-top-items-element-content-title"><a href="#">State of the Art</a></div>
    					<div class="simlab-top-items-element-content-text">We believe that when the latest technology and education come together, education of our future healthcare professionals is impacted.</div>
    				</div>
    			</div>
    		</div>
    		<div class="simlab-top-items-element">
    			<div class="simlab-top-items-element-title">Video Library</div>
    			<div class="simlab-top-items-element-content-wrapper">
    				<div class="simlab-top-items-element-content-thumbnail"><a href="#"><img src="http://nursing.utep.edu/beta/wp-content/themes/nursing-v2/img/6857.jpg" /></a></div>
    				<div class="simlab-top-items-element-info-wrapper">
    					<div class="simlab-top-items-element-content-title"><a href="#">Learn More</a></div>
    					<div class="simlab-top-items-element-content-text">Watch our video series to learn more about how our SimLab is nationally recognized and is changing Nursing Education.</div>
    				</div>
    			</div>
    		</div>
    		<div class="simlab-top-items-element">
    			<div class="simlab-top-items-element-title">For Students</div>
    			<div class="simlab-top-items-element-content-wrapper">
    				<!--<div class="simlab-top-items-element-content-thumbnail"><a href="#"><img src="http://nursing.utep.edu/beta/wp-content/themes/nursing-v2/img/IMG_1056.jpg" /></a></div>-->
    				<div class="simlab-top-items-element-info-wrapper">
    					<div class="simlab-top-items-element-content-title"><a href="#">Important Links</a></div>
    					<div class="simlab-top-items-element-content-text">We offer many services to our student body click here to view information for students.</div>
    					<div class="simlab-top-items-element-important-links">
    						<div class="simlab-top-items-element-important-links-item"><a href="#">Academic Coaching</a></div>
    						<div class="simlab-top-items-element-important-links-item"><a href="#">Community Partners</a></div>
    						<div class="simlab-top-items-element-important-links-item"><a href="#">Tours</a></div>
    						<div class="simlab-top-items-element-important-links-item"><a href="#">ACE</a></div>
    						<div class="simlab-top-items-element-important-links-item"><a href="#">Mine Shaft</a></div>
    						<div class="simlab-top-items-element-important-links-item"><a href="#">Open Lab</a></div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    
    <!--<div class="container">
    	<div class="row">
            <div class="span8">
            	<?php query_posts(array('showposts' => 10, 'orderby' => 'desc', 'category_name' => 'simulation')); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                	<div class="span7 simlab-elements">
                		<h2><?php the_title(); ?></h2>
                		<p><?php the_content(); ?></p>
                		<p><a href="<?php the_title(); ?>" class="btn btn-small">Read More</a></p>
                		<?php edit_post_link( 'Edit'); ?>
                	</div>
                <?php endwhile; else: ?>
                <?php endif; ?>
            </div>
            <div class="span4">
            	<div style="padding-left:30px;"><h2>Important Links</h2></div>
            	<div class="span3">
                	<h4>Community Partners</h4> 
                	<p></p>
                	<p><a class="btn btn-primary btn-small" href="sa-helpful-resources">View details »</a>
                	</p>
            	</div>
            	<div class="span3">
                	<h4>Simulated Hospital Day</h4> 
                	<p></p>
                	<p><a class="btn btn-primary btn-small" href="prospective">View Programs »</a></p>
            	</div>
            	<div class="span3">
                	<h4>ACE</h4> 
                	<p></p>
                	<p><a class="btn btn-primary btn-small" href="prospective">View Programs »</a></p>
            	</div>
            	<div class="span3">
                	<h4>Mine Shaft</h4> 
                	<p></p>
                	<p><a class="btn btn-primary btn-small" href="prospective">View Programs »</a></p>
            	</div>
            	<div class="span3">
                	<h4>Tours</h4> 
                	<p></p>
                	<p><a class="btn btn-primary btn-small" href="prospective">View Programs »</a></p>
            	</div>
            	<div class="span3">
                	<h4>Open Lab</h4> 
                	<p></p>
                	<p><a class="btn btn-primary btn-small" href="prospective">View Programs »</a></p>
            	</div>
            	<div class="span3">
                	<h4>Academic Coaching</h4> 
                	<p></p>
                	<p><a class="btn btn-primary btn-small" href="prospective">View Programs »</a></p>
            	</div>
                <!--<div class="span4" style="margin-left:0;">
                    <img src="http://orspprofile.utep.edu/profilesystem/images/0/1934_0_2070.jpg" class="img-polaroid" alt="Mr. Ronnie Stout">
                    <p><address>
  					<strong>Mr. Ronnie Stout</strong><br>
  					Family Nurse Practitioner Director/Advisor<br />
  					<a href="mailto:rcstout@utep.edu">rcstout@utep.edu</a><br />
  					(915)747-8204   <br />
					</address>
                    </p>
             </div>-->
            <!--</div>
        </div>
    </div>-->
</div>
<?php get_footer(); ?>