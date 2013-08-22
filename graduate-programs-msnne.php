<?php
/*
Template Name: Undergraduate Pre Nursing
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
            	<!--<h2>Information</h2>-->
            	<div id="sidebar" class="well">
            		<?php wp_nav_menu( array( 'menu'=>'MSN Programs Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
            	<div class="span2" style="margin-left:0;">
            		<h2>Contact</h2>
            		<img src="http://hb2504.utep.edu/photos/dimonsivais.jpg" class="img-polaroid" alt="Dr. Diane Monsivais">
            		<p><address>
  					<strong>Diane Monsivais, Ph.D., RN, CRRN</strong><br>
  					Director/Advisor<br />
  					<a href="mailto:dimonsivais@utep.edu">dimonsivais@utep.edu</a><br />
  					915-747-8209<br />
					</address></p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


