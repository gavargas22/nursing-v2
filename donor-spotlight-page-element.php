<?php
/*
Template Name: Donor Spotlight Page Elements
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
            	<div class="well">
            		<h4>To learn more about giving to the UTEP School of Nursing, Contact:</h4>
            			<p>
            			<h4>Martin Muñoz</h4>
            			Director of Development
            			<br />
            			915-747-7251
            		</p>
            		<a href="https://givingto.utep.edu/SSLPage.aspx?pid=280&frcrld=1#.Uh0KDmQ1aqN"><img src="http://nursing.utep.edu/beta/wp-content/uploads/2013/08/photo1106.png" href="https://givingto.utep.edu/SSLPage.aspx?pid=280&frcrld=1#.Uh0KDmQ1aqN" target="_blank" /></a>
            	</div>
            	<div id="sidebar">
            		<?php wp_nav_menu( array( 'menu'=>'Alumni and Friends Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>