<?php
/*
Template Name: Message of the Dean of Nursing
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
            <div class="row span4">
            	<div class="span2">
            		<img src="http://nursing.utep.edu/wp-content/uploads/2013/08/02.jpeg" class="img-polaroid" alt="Elias Provencio-Vasquez, PhD, RN, FAAN, FAANP">
            		<p><address>
  					<strong>Elias Provencio-Vasquez, PhD, RN, FAAN, FAANP</strong><br>
  					Dean and Professor<br />
					</address></p>
					<p>
						<?php wp_nav_menu( array( 'menu'=>'About Us Sub Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
					</p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


