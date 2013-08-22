<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/simlab.jpg); color:#ffffff; background-size:cover; background-position:50% 14%;">
                 <h1>Center for Simulation</h1>
                 <p>The Center for Simulation is designed to allow students and the health care community to develop competency in safely managing
                    	priority areas of care through the use of state-of-the-art computer simulations.
                 </p>
            </div>
            <div class="container">
            	<div class="row">
            <div class="span8">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            		<h2><?php the_title(); ?></h2>
            		<p><?php the_content(); ?></p>
            	<?php endwhile; else: ?>
				 <?php endif; ?>
				 <?php edit_post_link('Edit'); ?>
            </div>
            <div class="span4">
            	<!--<h2>Contact</h2>
            	<div id="sidebar">
            		<?php wp_nav_menu( array( 'menu'=>'MSN Programs Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>-->
            	<div class="span2" style="margin-left:0;">
            		<h2>Contact</h2>
            		<img src="http://orspprofile.utep.edu/profilesystem/images/0/1934_0_2070.jpg" class="img-polaroid" alt="Mr. Ronnie Stout">
            		<p><address>
  					<strong>Mr. Ronnie Stout</strong><br>
  					Family Nurse Practitioner Director/Advisor<br />
  					<a href="mailto:rcstout@utep.edu">rcstout@utep.edu</a><br />
  					(915)747-8204   <br />
					</address></p>
            	</div>
            </div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


