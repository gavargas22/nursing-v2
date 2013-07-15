<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <div class="row">
        <div class="span2">
            <?php wp_nav_menu( array( 'menu'=>'Undergraduate Programs Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
        </div>
        <div class="span10">
            <div class="container">
                <div class="container">
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
</div>
<?php get_footer(); ?>