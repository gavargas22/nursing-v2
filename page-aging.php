<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/simlab.jpg); color:#ffffff; background-size:cover; background-position:50% 14%;">
                 <h1>Center for Aging</h1>
                 <p>Resources available through the Center for Aging can assist health care professionals, community groups, students and faculty to 
                 	enhance their interactions with our aging population.</p>
            </div>
            <div class="container">
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
            	<!--<h2>Contact</h2>
            	<div id="sidebar">
            		<?php wp_nav_menu( array( 'menu'=>'MSN Programs Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>-->
            	<div class="span2" style="margin-left:0;">
            		<h2>Contact</h2>
            		<img src="http://orspprofile.utep.edu/development/images/0/1482_0_1634.jpg" class="img-polaroid" alt="Mr. Ronnie Stout">
            		<p><address>
  					<strong>Charon A. Pierson</strong><br>
  					Center for Aging<br />
  					<a href="mailto:capierson@utep.edu">capierson@utep.edu</a><br />
					</address></p>
            	</div>
            </div>
            </div>
            </div>
</div>
<?php get_footer(); ?>