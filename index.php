<?php get_header(); ?>
<div class="identityheader" id="identityheaderborder">
    <div class="container">
        <div class="span6">	<a href="http://www.utep.edu/"><img src="http://onthemove.utep.edu/img/utepidheader2.png"></a>

        </div>
        <!-- End Six Columns -->
        <div class="span4 offset1" id="welcome-menu">
            <ul class="inline" id="top-quick-menu">
                <li><a href="#">Contact Us</a>

                </li>
                <li><a href="#">UTEP Home</a>

                </li>
                <li><a href="#">Faculty &amp; Staff</a>

                </li>
                <li><a href="#">Give to SoN</a>

                </li>
            </ul>
        </div>
    </div>
    <!-- End Row -->
</div>
<div class="container" id="header-wrapper">
    <div class="span4" id="welcome-menu">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/small-title.png" />
    </div>
    <div class="span4 offset4" id="nursing-logo">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/sonlogo.png" width="285px" height="61px" />
    </div>
</div>
<div class="container" id="slideshow-wrapper">
    <!-- Place somewhere in the <body> of your page -->
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/experiment.png" />
            </li>
            <li>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/slide02.jpg" />
            </li>
        </ul>
    </div>
</div>
<div id="menu-background-holder">
    <div class="container">
        <div id="main-navigation">
            <div id="sticky_navigation">
                <div class="demo_container">
                    <div id="mini-logo"></div>
                    <ul>
                        <li><a href="./" class="selected">Home</a>

                        </li>
                        <li><a href="single-page.html">Prospective Students</a>

                            <!--<ul>
							<li>Current Students</li>
							<li>Future Students</li>
						</ul>-->
                        </li>
                        <li><a href="other-page.html">Current Students</a>

                        </li>
                        <li><a href="#">Alumni & Friends</a>

                        </li>
                        <li><a href="#">Areas of Excellence</a>

                        </li>
                        <li><a href="#">About Us</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div id="title-filters">
        <div id="glance-title">UTEP Nursing <span style="color:#B3B4B5">at a Glance</span>

        </div>
        <div id="glance-descr">Explore our school of nursing, where we train the best nurses for the
            21st century.</div>
        <ul id="filters">
            <li class="news-filter"><a href="#" data-filter=".news-element">News &amp; Events</a>

            </li>
            <li class="admissions-filter"><a href="#" data-filter=".admissions-element">Admissions</a>

            </li>
            <li class="resources-element-filter"><a href="#" data-filter=".resources-element">Student Resources</a>

            </li>
            <li class="social-media-filter"><a href="#" data-filter=".social-element">Social Media</a>

            </li>
            <li class="show-all"><a href="#" data-filter="*">Show All</a>

            </li>
        </ul>
    </div>
</div>
<div id="tile-wrapper" class="container">
	<?php query_posts(array('showposts' => 20, 'orderby' => 'desc', 'category_name' => 'isotope-elements')); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
    <div class="isotope-elements <?php echo $card_id; ?>" id="<?php get_the_ID(); ?>">
        <div class="element-title"><?php the_title(); ?></div>
        <div class="card-picture-removethisforfinal1">
            <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail();} ?></a>
        </div>
        <div class="element-text"><?php the_content(); ?></div>
        <div class="element-footer">
        	<?php edit_post_link('Edit'); ?>
            <div class="like-icon"></div>
            <div class="like-counter">5</div>
        </div>
    </div>
    <?php endwhile; else: ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>