<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <div class="container" id="simlab-microsite-title">
    	<h2><span style="color:#003168">School of Nursing</span> <span style="color:#FAA732">SimLab</span></h2>
    	<p><span style="color:#555">Using the latest simulation technology to advance the training and competency of our future Nurses and Healthcare Profesisonals.</span></p>
    </div>
    
    <div id="imageSlider" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
            <li data-target="#imageSlider" data-slide-to="1"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner" id="slidingElements">
            <div class="active item">
                <img src="http://nursing.utep.edu/beta/wp-content/themes/nursing-v2/img/6879.jpg" width="1200px" height="400px" />
                <div class="slideshow-caption">
                	<h1>Dean Elias Provencio-Vazquez</h1>
                	<p><i>The Dean of the College of Nursing is pushing for more inovation.</i></p>
                </div>
            </div>
            <div class="item">
                <img src="http://nursing.utep.edu/beta/wp-content/themes/nursing-v2/img/UTEP_0001.jpg" width="1200px" height="400px" />
                <div class="slideshow-caption">
                	<h1>The UTEP School of Nursing</h1>
                	<p><i>Our school is changing the face of Nursing, with our state of the art installations and world class faculty, we are the best option in Nursing Education.</i></p>
                </div>
            </div>
        </div>
	<a class="carousel-control left" id="custom-controls" href="#imageSlider" data-slide="prev">&lsaquo;</a>
	<a class="carousel-control right" id="custom-controls" href="#imageSlider" data-slide="next">&rsaquo;</a>
    </div>
    <div class="row">
    	<div class="span9">
    	<div class="simlab-top-items-wrapper">
    		<?php query_posts(array('showposts' => 20, 'orderby' => 'desc', 'category_name' => 'simlab-home-tiles')); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    		<div class="simlab-top-items-element">
    			<div class="simlab-top-items-element-title">Video</div>
    			<div class="simlab-top-items-element-content-wrapper">
    				<div class="simlab-top-items-element-content-thumbnail"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a></div>
    				<div class="simlab-top-items-element-info-wrapper">
    					<div class="simlab-top-items-element-content-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    					<div class="simlab-top-items-element-content-text"><?php the_content(); ?></div>
    					<div class="simlab-top-items-element-important-links"><?php edit_post_link('Edit'); ?></div>
    				</div>
    			</div>
    		</div>
    		<?php endwhile; else: ?>
			<?php endif; ?>
    	</div>
    	</div>
    	<div class="span3">
    		<div class="simlab-top-items-element">
    			<div class="simlab-top-items-element-title-important-links">Important Links</div>
    			<?php wp_nav_menu( array('menu' => 'Simlab Important Links', 'container' => false, 'nav nav-list', 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
    		</div>
    	</div>
    </div>
</div>
<?php get_footer(); ?>