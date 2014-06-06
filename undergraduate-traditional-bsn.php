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
            <div class="span2">
            	<!--<h2>Information</h2>-->
            	<div id="sidebar" class="well">
            		<?php wp_nav_menu( array( 'menu'=>'Undergraduate Programs Traditional BSN Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
            	<div class="span2" style="margin-left:0;">
            		<h2>Contact</h2>
            		<img src="http://nursing.utep.edu/beta/wp-content/uploads/2014/06/IMG_8630r-1.jpg" class="img-polaroid" alt="Myrna Anchondo">
            		<p><address>
  					<strong>Myrna Anchondo, MBA</strong><br>
  					Assistant Dean of Student Affairs<br />
  					<a href="mailto:myrna@utep.edu">myrna@utep.edu</a><br />
					</address></p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


