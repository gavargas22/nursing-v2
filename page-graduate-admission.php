<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <div class="hero-unit" id="single-page-teaser" style="background-image:url(http://farm6.staticflickr.com/5248/5287142100_86c0c9c90b_b.jpg); color:#ffffff; background-size:cover;">
         <h1>Graduate Programs</h1> 
        <p>Embark on the greatest Higher Education Experience you can have. Join our program and learn with some of the best Facutly in the Nation.</p>
    </div>
    <div class="row">
        <div class="span2">
            <?php wp_nav_menu( array( 'menu'=>'Graduate Programs Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
        </div>
        <div class="span10">
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
<?php get_footer(); ?>