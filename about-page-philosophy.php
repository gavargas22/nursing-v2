<?php
/*
Template Name: About Us Philosophy Mission Page
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
            	<div class="span2">
            		<h2>Menu</h2>
            		<div id="sidebar">
            		<?php wp_nav_menu( array( 'menu'=>'About Us Sub Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            		</div>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>


