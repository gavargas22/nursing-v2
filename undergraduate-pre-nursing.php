<?php
/*
Template Name: Undergraduate Programs Pre-Nursing
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
            <div class="span3">
            	<!--<h3>Menu</h3>-->
            	<div id="sidebar" class="well">
            		<?php wp_nav_menu( array( 'menu'=>'Undergraduate Programs Pre Nursing Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
            	<div class="span2" style="margin-left:0;">
            		<h3>Contact</h3>
            		<p><address>
  					<strong><a href="../sa">Office of Student Affairs</a></strong><br>
  					<a href="mailto:dimonsivais@utep.edu">dimonsivais@utep.edu</a><br />
  					915-747-8209<br />
					</address></p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


