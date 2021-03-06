<?php get_header(); ?>
<div class="container" id="single-page">
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
            	<div class="span3"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('full');} ?></div>
            	<div class="span6">
            		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            		<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
          			<h2><?php the_title(); ?></h2>
            		<blockquote>
  					<p><?php the_content(); ?></p>
					</blockquote>
					<?php endwhile; else: ?>
					<?php endif; ?>
            	</div>
            </div>
        </div>
    </div>
</div>
<!--<div class="container"><?php comments_template(); ?></div>-->
<?php get_footer(); ?>