<?php
/*
Template Name: Undergraduate Traditional BSN
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
            		<?php wp_nav_menu( array( 'menu'=>'Undergraduate Programs Traditional BSN Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
            	<div class="span2" style="margin-left:0;">
            		<h2>Contact</h2>
            		<img src="http://hb2504.utep.edu/photos/msantacruz.jpg" class="img-polaroid" alt="Dr. Diane Monsivais">
            		<p><address>
  					<strong>Manuel Santa Cruz, DNP, MSN, MBA, RN, NE-BC</strong><br>
  					Assistant Dean, Undergraduate Education<br />
  					<a href="mailto:msantacruz@utep.edu">msantacruz@utep.edu</a><br />
					</address></p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


