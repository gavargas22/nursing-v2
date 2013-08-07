<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="alert alert-block">
  			<button type="button" class="close" data-dismiss="alert">&times;</button>
  			<h4>Attention!</h4>
  			<p>The application windows for the Spring 2014 period of the <b>Traditional BSN</b> and <b>Fast Track Program</b> are now open! Click on the button to apply now.</p>
  			<p><a class="btn btn btn-primary" type="button" href="http://nursing.utep.edu/applications"><i class="icon-pencil icon-white"></i> Apply Now</button></a>
			</div>
            <div class="container">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            		<h2><span style="color:#566B94"><?php the_title(); ?></span></h2>
            		
            		<div class="row-fluid">
            		<div class="span6 sa-blocks sa-staff">
            			<h2>Welcome!</h2>
            			<p><?php the_content(); ?></p>
            			<?php endwhile; else: ?>
				 		<?php endif; ?>
				 		<?php edit_post_link('Edit'); ?>
            		</div>
            		<div class="span4 offset1 sa-blocks sa-importance">
            			<?php query_posts(array('category_name' => 'sa-right-box')); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            			<h2><abbr title="attribute">Important Dates</abbr></h2>
            			<p><b>Three Application Windows</b></p>
            			<p><?php the_content(); ?></p>
            			<?php endwhile; else: ?>
						<?php endif; ?>
            		</div>
            	</div>
            	</div>
</div>
<?php get_footer(); ?>