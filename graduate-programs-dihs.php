<?php
/*
Template Name: PhD in Interdisciplinary Health Sciences
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
            		<img src="http://chs.utep.edu/images/staff/christina_sobin.jpg" class="img-polaroid" alt="Dr. Christina Sobin, Ph.D.">
            		<p><address>
  					<strong>Dr. Christina Sobin, Ph.D.</strong><br>
  					Program Director Interdisciplinary Health Sciences Ph.D. Program<br />
  					<a href="mailto:ihsphd@utep.edu">ihsphd@utep.edu</a><br />
  					915-747-7256<br />
					</address></p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


