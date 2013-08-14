<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="alert alert-block">
  			<button type="button" class="close" data-dismiss="alert">&times;</button>
  			<h4>Attention!</h4>
  			<p>The application windows for the Spring 2014 period of the <b>Traditional BSN</b> and <b>Fast Track Program</b> are now open! Click on the button to apply now.</p>
  			<p><a class="btn btn btn-primary" type="button" href="http://nursing.utep.edu/applications"><i class="icon-pencil icon-white"></i> Apply Now</button></a>
			</div>
			
			<div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/03.jpg); color:#ffffff; background-size:cover; background-position: 50% 100%;">
         		<h1>Academic Advising</h1>
         		<p><i>Office of Student Affairs</i></p> 
        		<p>The Office of Student Affairs for the School of Nursing provides academic advising and highlights educational resources for 
        			current and prospective students. Our goal is to assist you in attaining your academic goals in a timely manner.</p>
    		</div>
    		
    		<div class="row">
    			<div class="span9" id="page-items">
    				<div class="span4">
                     <h3>Applications and Deadlines</h3> 
                    <p>Applications will only be available during application windows.</p>
                    <p><a class="btn btn-primary" href="apps">Applications »</a>
                    </p>
                	</div>
                	<div class="span4">
                     <h3>Degree Programs</h3> 
                    <p>The School of Nursing offers a variety of BSN, MSN and PhD tracks that are right for you.</p>
                    <p><a class="btn btn-primary" href="prospective">View Programs »</a>
                    </p>
                	</div>
                	<div class="span4">
                     <h3>Office of Student Affairs Directory</h3> 
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
    			<div class="span3">
    				<h2>Important Links</h2>
            	<div id="sidebar">
            		<?php wp_nav_menu( array( 'menu'=>'Student Affairs Important Links Page', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
            	</div>
    			</div>
            </div>
</div>
<?php get_footer(); ?>