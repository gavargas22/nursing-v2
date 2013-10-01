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
            	<?php query_posts(array('showposts' => 10, 'orderby' => 'desc', 'category_name' => 'isotope-elements')); ?>
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
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>