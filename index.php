<?php get_header(); ?>

<div class="container" id="filter-holders">
    <div id="title-filters">
        <div id="glance-title">UTEP Nursing <span style="color:#B3B4B5">at a Glance</span>

        </div>
        <div id="glance-descr">Explore our school of nursing, where we train the best nurses for the
            21st century.
        </div>
            <ul id="filters">
            	<li style="padding: 5px;">Sort By:</li>
            <li class="news-filter"><a href="#" data-filter=".news-element"><span class="filter-marker"></span>News &amp; Events</a>

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
	<!--Permanent-->
	<div class="isotope-elements" id="permanent">
        <div class="element-title">Message from the Dean</div>
        <div class="card-picture-removethisforfinal1">
            <a href="about/message-from-the-dean"><img src="http://nursing.utep.edu/beta/wp-content/themes/nursing-v2/img/bg/7034.jpg" /></a>
        </div>
        <div class="element-text"><p>Whether you’re a current nursing student, interested in becoming a student, or just want to see what the UTEP 
        	School of Nursing is up to, you’ll be blown away by the quality of the education and service we provide, the state-of-the-art facilities 
        	and equipment we offer, and the rich environment we afford to our diverse student body and faculty.</p>
        	<p><a class="btn btn-primary" href="about/message-from-the-dean">Read More</a></p>
        	</div>
        <div class="element-footer">
        	<?php edit_post_link('Edit'); ?>
            <div class="like-icon"></div>
            <div class="like-counter">5</div>
        </div>
    </div>
    <!-- ---- -->
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