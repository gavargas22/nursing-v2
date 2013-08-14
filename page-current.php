<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bgCurrent.jpg); color:#ffffff; background-size:cover;">
                 <h1>Current Students</h1> 
                <p>
                	As a nursing student at UTEP, you’ve joined an exceptional academic program with a reputation of excellence and dedication improving the health care in our community. 
                </p>
            </div>
            <div class="row">
            	<div class="span8" id="page-items">
            		<div><h2>Important Links</h2></div>
                <div class="span4">
                     <h3>Forms &amp; Handbooks</h3> 
                    <p><a class="btn" href="handbooks">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Clinical Compliance</h3> 
                    <p><a class="btn" href="http://chs.utep.edu/complianceclearances/">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Organizations</h3> 
                    <p><a class="btn" href="#">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Academic Advising</h3> 
                    <p>Office of Student Affairs</p>
                    <p><a class="btn" href="sa">View details »</a>

                    </p>
                </div>
                <div class="span4">
                     <h3>Professional Organization</h3> 
                    <p><a class="btn" href="#">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Financial Aid</h3> 
                    <p><a class="btn" href="finaid">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>STTI | Delta Kappa Chapter</h3> 
                    <p><a class="btn" href="#">View details »</a>
                    </p>
                </div>
               </div>
               <div class="span4">
               	<h2><span style="color:#3b5998;">Social Media</span></h2>
               	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Futepnursing&amp;width=292&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=413969985317796" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>
               </div>
            </div>
</div>
<?php get_footer(); ?>