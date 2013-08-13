<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/alumni.jpg); color:#ffffff; background-size:cover;">
                 <h1>Center for Simulation</h1> 
                <p>New things</p>
            </div>
            <div class="row" id="page-items">
            	<div class="span4">
                     <h3>Center for Simulation</h3> 
                    <p>The Center for Simulation is designed to allow students and the health care community to develop competency in safely managing
                    	priority areas of care through the use of state-of-the-art computer simulations.</p>
                    <p><a class="btn" href="simulation">View details »</a>
                    </p>
                </div>
            </div>
</div>
<?php get_footer(); ?>