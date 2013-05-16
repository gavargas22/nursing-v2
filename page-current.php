<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bgCurrent.jpg); color:#ffffff; background-size:cover;">
                 <h1>Current Students</h1> 
                <p>This is a template for a simple showcase of the most important information
                    that students would need to know for the starting semester which are the
                    Admissions, one of the most visited parts of our website.</p>
            </div>
            <div class="row" id="page-items">
                <div class="span4">
                     <h3>Forms &amp; Handbooks</h3> 
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                        ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                        sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                        odio dui.</p>
                    <p><a class="btn" href="sub-page.html">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Clinical Compliance</h3> 
                    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                        ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                        sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                        odio dui.</p>
                    <p><a class="btn" href="#">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Organizations</h3> 
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus,
                        tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                        massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Student Affairs</h3> 
                    <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus,
                        tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum
                        massa justo sit amet risus.</p>
                    <p><a class="btn" href="#">View details »</a>
                    </p>
                </div>
            </div>
</div>
<?php get_footer(); ?>