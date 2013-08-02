<?php
/*
Template Name: Nurse Practitioner MSN(Online Degree)
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
            		<img src="http://hb2504.utep.edu/photos/dbsharp.jpg" class="img-polaroid" alt="Dr. Diane Monsivais">
            		<p><address>
  					<strong>Sharp, Dayle Boynton Ph.D., APRN-bc, RN</strong><br>
  					Family Nurse Practitioner Director/Advisor<br />
  					<a href="mailto:dbsharp@utep.edu">dbsharp@utep.edu</a><br />
  					915-747-5315<br />
					</address></p>
					
					<img src="http://hb2504.utep.edu/photos/kareveles.jpg" class="img-polaroid" alt="Dr. Diane Monsivais">
            		<p><address>
  					<strong>Kathi Reveles DNP, APRN-bc, RNC</strong><br>
  					Pediatric Nurse Practitioner Director/Advisor<br />
  					<a href="mailto:kareveles@utep.edu">kareveles@utep.edu</a><br />
  					915-747-7257<br />
					</address></p>
					
					<img src="http://hb2504.utep.edu/photos/mlambert.jpg" class="img-polaroid" alt="Dr. Diane Monsivais">
            		<p><address>
  					<strong>Monique Lambert DNP, APRN-bc, RN</strong><br>
  					Acute Care/Adult Gerontology Nurse Practitioner Director/Advisor<br />
  					<a href="mailto:mlambert@utep.edu">mlambert@utep.edu</a><br />
					</address></p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


