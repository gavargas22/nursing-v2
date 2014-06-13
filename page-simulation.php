<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <div class="container" id="simlab-microsite-title">
            <h2><span style="color:#003168">School of Nursing</span> <span style="color:#FAA732">SimLab</span></h2>

        <p><span style="color:#555">Using the latest simulation technology to advance the training and competency of our future Nurses and Healthcare Profesisonals.</span>
        </p>
    </div>
    <div id="imageSlider" class="carousel slide">
        <!--<ol class="carousel-indicators">
            <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
            <li data-target="#imageSlider" data-slide-to="1"></li>
        </ol>-->
        <!-- Carousel items -->
        <div class="carousel-inner" id="slidingElements">
            <?php $args=array( 'post_type'=>'simlab-slider', 'posts_per_page' => 4 ); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div id="<?php the_ID(); ?>" class="item slider-item">
                <?php if ( has_post_thumbnail() ) {the_post_thumbnail( 'simlab-slider' );} ?>
                <div class="slideshow-caption">
                        <h1><?php the_title(); ?></h1>

                    <p><i><?php the_content(); ?></i>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>  <a class="carousel-control left" id="custom-controls" href="#imageSlider" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" id="custom-controls" href="#imageSlider" data-slide="next">&rsaquo;</a>

    </div>
    <div class="row">
        <div class="span9">
            <div class="simlab-top-items-wrapper" id="simlab-items-wrapper-masonry">
                <?php $args=array( 'post_type'=>'simlab-posts', 'posts_per_page' => 10 ); $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="simlab-top-items-element">
                    <div class="simlab-top-items-element-title">
                        <?php the_title(); ?>
                    </div>
                    <div class="simlab-top-items-element-content-wrapper">
                        <div class="simlab-top-items-element-content-thumbnail"><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('simlab-post-thumbnail');} ?></a>
                        </div>
                        <div class="simlab-top-items-element-info-wrapper">
                            <div class="simlab-top-items-element-content-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="simlab-top-items-element-content-text">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="simlab-top-items-element-important-links">
                                <?php edit_post_link( 'Edit'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="span3">
            <div class="simlab-top-items-element">
                <div class="simlab-top-items-element-title-important-links">Navigation</div>
                <?php wp_nav_menu( array( 'menu'=>'Simlab Important Links', 'container' => false, 'nav nav-list', 'menu_class' => 'nav nav-pills nav-stacked custom-pill-behavior' )); ?>
            </div>
            <div class="simlab-custom-buttons">
                <ul class="nav nav-tabs nav-stacked">
                    <li><a href="http://nursing.utep.edu/simlab-posts/open-lab/"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/openLab.png"></a></li>
                    <li><a href="http://goo.gl/1p8I4h"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/star.png"></a></li>
                    <li><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/donateSimlab.png"></a></li>
                </ul>
            </div>
            <div class="simlab-top-items-element-social" style="padding-left:4px;">
                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FUTEPSimulation&amp;width=280&amp;height=395&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true&amp;appId=771052199594024" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:395px;" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>