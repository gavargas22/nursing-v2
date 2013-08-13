<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/alumni.jpg); color:#ffffff; background-size:cover;">
                 <h1>Areas of Excellence</h1> 
                <p>At the UTEP School of Nursing, we pride ourselves in our innovative approach to research and educating future nurses and health care educators.</p>
            </div>
            <div class="row" id="page-items">
            	<div class="span4">
                     <h3>Center for Simulation</h3> 
                    <p>The Center for Simulation is designed to allow students and the health care community to develop competency in safely managing
                    	priority areas of care through the use of state-of-the-art computer simulations.</p>
                    <p><a class="btn" href="simulation">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Center for Aging</h3> 
                    <p>Resources available through the Center for Aging can assist health care professionals, 
                    	community groups, students and faculty to enhance their interactions with our aging population.</p>
                    <p><a class="btn" href="aging-center">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Hispanic Health Disparities Research Center</h3> 
                    <p>The HHDRC is a collaboration between the UTEP College of Health Sciences, the UTEP School of Nursing and The University of Texas School of Public Health 
                    to address Hispanic health  disparities.</p>
                    <p><a class="btn" href="http://hhdrc.utep.edu">View details »</a>
                    </p>
                </div>
            </div>
</div>
<?php get_footer(); ?>