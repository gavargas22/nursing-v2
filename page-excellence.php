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
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                        ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                        sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                        odio dui.</p>
                    <p><a class="btn" href="#">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Center for Aging</h3> 
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                        ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                        sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                        odio dui.</p>
                    <p><a class="btn" href="sub-page.html">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Hispanic Health Disparities Research Center</h3> 
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                        ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                        sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                        odio dui.</p>
                    <p><a class="btn" href="#">View details »</a>
                    </p>
                </div>
            </div>
</div>
<?php get_footer(); ?>