<?php
/*
Template Name: Graduate Programs DNP Template
*/

get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
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
            	<h2>Information</h2>
            	<div id="sidebar">
            		<?php wp_nav_menu( array( 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
            	<div class="span2" style="margin-left:0;">
            		<h2>Contact</h2>
            		<img src="http://nursing.utep.edu/wp-content/uploads/2011/01/lhrobbins1.jpg" class="img-polaroid">
            		<p><address>
  					<strong>Dr. Leslie Robbins PhD, MSN, APRN-BC, RN</strong><br>
  					DNP Program Director<br />
  					<a href="mailto:lhrobbins@utep.edu">lhrobbins@utep.edu</a><br />
  					915-747-7227<br />
					</address></p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>