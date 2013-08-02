<?php
/*
Template Name: MSN in Nursing Systems Management (Online Degree)
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
            		<?php wp_nav_menu( array( 'menu'=>'MSN Programs Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
            	<div class="span2">
            		<h2>Contact</h2>
            		<img src="http://hb2504.utep.edu/photos/lhennessy.jpg" class="img-polaroid" alt="Dr. Diane Monsivais">
            		<p><address>
  					<strong>Lisa Hennessy, Ph.D., MSN, RN</strong><br>
  					Director/Advisor<br />
  					<a href="mailto:lhennessy@utep.edu">lhennessy@utep.edu</a><br />
  					915-747-7249<br />
					</address></p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


