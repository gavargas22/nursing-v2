<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(http://farm6.staticflickr.com/5248/5287142100_86c0c9c90b_b.jpg); color:#ffffff; background-size:cover;">
                 <h1>Graduate Programs</h1> 
                <p>The UTEP School of Nursing is poised to educating tomorrow’s nursing leaders. The graduate programs prepare professional nurses for 
                	post-graduate roles in a variety of advanced practice and specialty areas.</p>
            </div>
            <div class="row">
            	
	<div class="span2">
		<?php wp_nav_menu( array( 'menu'=>'Graduate Programs Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-pills nav-stacked' )); ?>
	</div>
	<div class="span10">
		<div class="span3">
			<p><span style="color:#FF7908; font-size: 18px; font-weight: bold;">Doctorate Programs</span></p>
            <ul class="thumbnails">
              <li class="span3">
                <div class="thumbnail">
                 <div class="caption">
                    <h4>Doctor of Nursing Practice (DNP)</h4>
                    <p>The DNP builds on the competences of the master’s degree, and adds a highly advanced skill base in informatics and technology, evidence-based practice, continuous quality improvement, and organizational systems and leadership.</p>
                    <p><a class="btn" href="dnp/">Read More</a></p>
                  </div>
                </div>
              </li>
              <li class="span3">
                <div class="thumbnail">
                  <div class="caption">
                    <h4>PhD in Interdisciplinary Health Sciences</h4>
                    <p>Training the next generation of interdisciplinary researchers and academicians, the Interdisciplinary Health Sciences Ph.D. provides experiences that teach advanced skills in research design, methods, statistics, grant writing and writing for publication.</p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          
          <div class="span3">
			<p><span style="color:#006DCC; font-size: 18px; font-weight: bold;">Master Programs</span></p>
            <ul class="thumbnails">
            	
              <li class="span3">
                <div class="thumbnail">
                	<div class="caption">
                    <h4>Master of Sciences in Nursing (MSN-Online)</h4>
                    <p><h6><span style="color:#EE3E36">MSN-Online</span></h6>
                    <p>The MSN program prepares professional nurses for post-graduate roles in a variety of advanced practice and specialty areas in and online setting.</p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              
              <li class="span3">
                <div class="thumbnail">
                	<div class="caption">
                    <h4>Nursing Education (NE)</h4>
                    <p><h6><span style="color:#EE3E36">MSN-Online</span></h6>
                    <p>Students are prepared to teach in an academic and clinical setting by becoming proficient in curriculum design and development, teaching methods, educational needs and learner-centered theories and methods.</p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              
              <li class="span3">
                <div class="thumbnail">
                	<div class="caption">
                    <h4>Nurse Practitioner (NP)</h4>
                    <p><h6><span style="color:#EE3E36">MSN-Online</span></h6>
                    <p>Advanced practice registered nurses are prepared in the profession of nurse practitioner for either primary or acute care in three concentrations.</p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              
              <li class="span3">
                <div class="thumbnail">
                	<div class="caption">
                    <h4>Nursing Systems manager (NSM)</h4>
                    <p><h6><span style="color:#EE3E36">MSN-Online</span></h6>
                    <p>Students are prepared for nurse leadership roles in management and administration.</p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              
              <li class="span3">
                <div class="thumbnail">
                	<div class="caption">
                    <h4>RN to MSN Option</h4>
                    <p><h6><span style="color:#EE3E36">Currently Not Accepting Applications</span></h6>
                    	Associate degree nurses (ADN) or diploma-prepared registered nurses with a bachelor’s degree in another field from an accredited university 
                    	are eligible to apply directly to the MSN program.</p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          
          <div class="span3">
			<p><span style="color:#666; font-size: 18px; font-weight: bold;">Graduate Certificate Programs</span></p>
            <ul class="thumbnails">
            	
              <li class="span3">
                <div class="thumbnail">
                	<div class="caption">
                    <h4>Healthcare Leadership Management</h4>
                    <p>This post-baccalaureate certificate is designed for nurses and others in healthcare administration or planning to move into an administrative role.</p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              
              <li class="span3">
                <div class="thumbnail">
                	<div class="caption">
                    <h4>Nursing Education</h4>
                    <p>The goal of this post-baccalaureate certificate program is to facilitate the continued development of quality nurse educators in various settings.</p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              
              <li class="span3">
                <div class="thumbnail">
                	<div class="caption">
                    <h4>Post-masters Nurse Practitioner Certificate</h4>
                    <p>The School of Nursing offers a post-masters Nurse Practitioner (NP) certificate for nurses holding a master of science in nursing degree in a different nursing specialty.</p>
                    <p><a class="btn" href="#">Read More</a></p>
                  </div>
                </div>
              </li>
              
            </ul>
          </div>
          
	</div>
</div>
</div>
<?php get_footer(); ?>