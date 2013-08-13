<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="alert alert-block">
  			<button type="button" class="close" data-dismiss="alert">&times;</button>
  			<h4>Attention!</h4>
  			<p>The application windows for the Spring 2014 period of the <b>Traditional BSN</b> and <b>Fast Track Program</b> are now open! Click on the button to apply now.</p>
  			<p><a class="btn btn btn-primary" type="button" href="http://nursing.utep.edu/applications"><i class="icon-pencil icon-white"></i> Apply Now</button></a>
			</div>
			
			<div class="hero-unit" id="single-page-teaser" style="background-image:url(http://farm6.staticflickr.com/5248/5287142100_86c0c9c90b_b.jpg); color:#ffffff; background-size:cover;">
         		<h1>Academic Advising</h1>
         		<p><i>Office of Student Affairs</i></p> 
        		<p>The Office of Student Affairs for the School of Nursing provides academic advising and highlights educational resources for 
        			current and prospective students. Our goal is to assist you in attaining your academic goals in a timely manner.</p>
    		</div>
    		
    		<div class="row" id="page-items">
            	<div class="span4">
                     <h3>Applications and Deadlines</h3> 
                    <p>Applications will only be available during application windows.</p>
                    <p><a class="btn btn-primary" href="apps">Applications »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Degree Programs</h3> 
                    <p>The School of Nursing offers a variety of BSN, MSN and PhD tracks that are right for you.</p>
                    <p><a class="btn btn-primary" href="degree-programs">View Programs »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Advisor &amp; Staff Directory</h3> 
                    <p>The knowledgeable staff at the Office of Student Affairs will help you identify the program that is right for you.</p>
                    <p><a class="btn btn-primary" href="sa-directory">Meet our Staff »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Helpful Resources</h3> 
                    <p>Our goal is to provide our future students with the tools and resources they need to apply and succeed in the UTEP School of Nursing.</p>
                    <p><a class="btn btn-primary" href="sa-helpful-resources">View details »</a>
                    </p>
                </div>
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