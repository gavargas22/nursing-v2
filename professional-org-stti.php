<?php
/*
Template Name: Professional Organizations STTI
*/

get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="row">
            <div class="span8">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            		<h2><?php the_title(); ?></h2>
            		<p><?php the_content(); ?></p>
            	<?php endwhile; else: ?>
				 <?php endif; ?>
				 <?php edit_post_link('Edit'); ?>
            </div>
            <div class="span4">
            	<h2>Information</h2>
            	<div id="sidebar">
            		<?php wp_nav_menu( array( 'menu'=>'Delta Kappa Chapter Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
            	<div class="span2" style="margin-left:0;">
            		<h2>Contact</h2>
            		<p><address>
  					<strong>Sigma Thera Tau International</strong><br>
  					Membership Services<br />
  					<a href="mailto:memserv@stti.iupi.edu">memserv@stti.iupi.edu</a><br />
  					1-888.634.7575<br />
  					<br />
  					<a href="mailto:dkchapter@utep.edu">dkchapter@utep.edu</a><br />
  					<strong>UTEP School of Nursing</strong><br>
  					1-866-747-8219<br />
  					<br />
  					<a href="mailto:nursing@utep.edu">nursing@utep.edu</a><br />
					</address></p>
					
					<p>
						<h2>The Circle</h2>
						<p><img href="#" src="http://itdsrvsonweb00.utep.edu/wp-content/uploads/circle_icon.png" /></p>
						<p><a href="http://thecircle.nursingsociety.org/Home/">The Circle</a> is an on-line professional networking connectivity site. <a href="http://thecircle.nursingsociety.org/login/?ReturnURL=http%3a%2f%2fdeltakappa.nursingsociety.org%2flogin%2f%3fReturnURL%3dhttp%3a%2f%2fdeltakappa.nursingsociety.org%2fHigherLogic%2fSecurity%2fLoggedOut.aspx">Log in</a> to The Circle.</p>
					</p>
            	</div>
            </div>
            </div>
</div>
<?php get_footer(); ?>