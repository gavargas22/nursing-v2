<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            
            <div class="container">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            		<h2><?php the_title(); ?></h2>
            		<p><?php the_content(); ?></p>
            	<?php endwhile; else: ?>
				 <?php endif; ?>
				 <?php edit_post_link('Edit'); ?>
            </div>
            <div class="row-fluid">
            				<div class="span6">
            					<div class="finaid-containers financialaid-block">
            						<h1>Financial Aid</h1>

The UTEP Financial Aid Office will provide you with information on various financial aid programs and related services to help take the stress off of paying for your tuition.
<h3><a href="http://academics.utep.edu/Default.aspx?alias=academics.utep.edu/finaid" target="_blank">Click Here to Visit FinAid Website</a></h3>
&nbsp;
            					</div>
            				</div>
            				<div class="span6">
            					
            					<div class="finaid-containers scholarships-block">
            						<h1>Scholarships</h1>

The UTEP Office of Scholarships provides incoming freshmen, transfer, international and current students with information and assistance to take full advantage of scholarship opportunities available at the university.
<h3><a href="http://ia.utep.edu/Default.aspx?alias=ia.utep.edu/scholarships" target="_blank">Click Here to Visit the Scholarships Website</a></h3>
&nbsp;
            					</div>
            					
            				</div>
            			</div>
</div>
<?php get_footer(); ?>