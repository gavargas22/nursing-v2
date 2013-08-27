<?php get_header(); ?>
<div class="container" id="single-page">
  			<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/alumni.jpg); color:#ffffff; background-size:cover;">
                 <h1>About Us</h1> 
                <p><strong>Excellence</strong> in everything we do │ <strong>Innovation</strong> to compete in the global healthcare environment │<strong>Diversity</strong>, our greatest resource.</p>
            </div>
            
            <div class="row-fluid">
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                	<img src="<?php bloginfo('stylesheet_directory'); ?>/img/bg/7034.jpg" />
                 <div class="caption">
                    <h2>Message from the Dean</h2>
                    <p>
                    	Whether you’re a current nursing student, interested in becoming a student, or just want to see what the UTEP School of Nursing is up to, 
                    	you’ll be blown away by the quality of the education and service we provide, the state-of-the-art facilities and equipment we offer, 
                    	and the rich environment we afford to our diverse student body and faculty. 
                    </p>
                    <p><a class="btn" href="message-from-the-dean">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/bg/IMG_1056.jpg">
                  <div class="caption">
                    <h2>Philosophy, Mission &amp; Vision</h2>
                    <p>
                    	The UTEP School of Nursing, views nursing as a professional service discipline grounded in the arts, sciences, humanities, 
                    	and the application of knowledge obtained through scientifically based inquiry.
                    </p>
                    <p><a class="btn" href="philosophy-vision-mission">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <img alt="School of Nursing History" style="width: 300px; height: 200px;" src="<?php bloginfo('stylesheet_directory'); ?>/img/cards/01.jpg">
                  <div class="caption">
                    <h2>School of Nursing History</h2>
                    <p>
                    	The School of Nursing started as the Hotel Dieu Training School for nurses in 1898, the first nursing school in El Paso, 
                    	and joined The University of Texas at El Paso in 1976.
                    </p>
                    <p><a class="btn" href="school-of-nursing-history">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <!--<img alt="" style="width: 300px; height: 200px;" src="">-->
                  <div class="caption">
                    <h2>Office of the Dean</h2>
                    <p>
                    	The leadership team at the UTEP School of Nursing is knowledgeable and committed to success of our students and the support of faculty, 
                    	staff and community.
                    </p>
                    <p><a class="btn" href="office-dean">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <!--<img alt="" style="width: 300px; height: 200px;" src="">-->
                  <div class="caption">
                    <h2>Faculty &amp; Staff Directory</h2>
                    <p>
                    	UTEP School of Nursing faculty have various, educational, research, practice and service backgrounds. 
                    	All faculty actively participate in preparing the nurses of tomorrow.
                    </p>
                    <p><a class="btn" href="directory">Read More</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
            
</div>
<?php get_footer(); ?>