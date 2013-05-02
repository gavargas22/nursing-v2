<?php get_header(); ?>
<div class="container" id="single-page">
    <ul class="breadcrumb">
        <li><a href="#">Home</a>  <span class="divider">/</span>
        </li>
        <li class="active">Current Students<span class="divider">/</span>
        </li>
    </ul>
    <div class="container">
        <div class="row-fluid">
            <div class="span12">
            	<div class="span3"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('full');} ?></div>
            	<div class="span6">
            		<div></div>
            		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            		<?php $card_id = get_post_meta($post->ID, "Card_Identifier", true); ?>
          			<h2><?php the_title(); ?></h2>
          			<div id="label-id"><span class="filter-labels <?php echo $card_id; ?>"><?php echo $card_id; ?></span></div>
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
<?php get_footer(); ?>