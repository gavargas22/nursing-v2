<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <div class="row">
        <div class="span4">
        	<div id="contact-information">
                <div class="row">
                    <div class="span6">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            	<h2><?php the_title(); ?></h2>

                            <p>
                                <?php the_content(); ?>
                            </p>
                            <?php endwhile; else: ?>
                            <?php endif; ?>
                            <?php edit_post_link( 'Edit'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="span8">
            <div id="map-canvas"></div>
        </div>
        </div>
    </div>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/initialiseMap.js"></script>
<?php get_footer(); ?>