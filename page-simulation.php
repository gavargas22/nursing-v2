<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/simlab.jpg); color:#ffffff; background-size:cover; background-position:50% 14%;">
                 <h1>Center for Simulation</h1>
                 <p>The Center for Simulation is designed to allow students and the health care community to develop competency in safely managing
                    	priority areas of care through the use of state-of-the-art computer simulations.
                 </p>
            </div>
            <div class="container">
            	<div class="span10">
            		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                     <h3><?php the_title(); ?></h3> 
                    <p>
                    	<?php the_content(); ?>
                    	</p>
                    <?php endwhile; else: ?>
				 <?php endif; ?>
				 <?php edit_post_link('Edit'); ?>
                </div>
            </div>
</div>
<?php get_footer(); ?>