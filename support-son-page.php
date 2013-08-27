<?php
/*
Template Name: Alumni and Friends Support SoN Page
*/

get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bgCurrent.jpg); color:#ffffff; background-size:cover;">
                 <h1>Support the School of Nursing</h1> 
                <p>
                	The generosity of alumni and friends like you enables the UTEP School of Nursing to provide an excellent education to the 
                	students we serve and make an impact in the quality health care of our community and beyond.
                </p>
            </div>
            
            
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
            	<div class="well">
            		<p>To learn more about giving to the UTEP School of Nursing, Contact:
            			<br />
            			<h4>Martin Muñoz</h4>
            			Director of Development
            			<br />
            			915-747-7251
            		</p>
            		<img src="http://nursing.utep.edu/beta/wp-content/uploads/2013/08/photo1106.png" href="https://givingto.utep.edu/SSLPage.aspx?pid=280&frcrld=1#.Uh0KDmQ1aqN" target="_blank" />
            	</div>
            	
            	<div id="sidebar">
            		<?php wp_nav_menu( array( 'menu'=>'Support SoN Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>