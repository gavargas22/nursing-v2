<?php get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="hero-unit" id="single-page-teaser" style="background-image:url(<?php bloginfo('stylesheet_directory'); ?>/img/bgProspective.jpg); color:#ffffff; background-size:cover;">
                 <h1>Prospective Students</h1> 
                <p>With three BSN track options, three MSN majors, an RN to MSN option and two doctoral programs, 
                	at the UTEP School of Nursing, you can find the option that is right for you.</p>
            </div>
            <div class="row" id="page-items">
            	<div class="span4">
                     <h3>Undergraduate Programs</h3> 
                    <p>Whether you’re a recent high school graduate, looking for a second career, or are in the health care field but want to obtain your BSN, 
                    	the UTEP School of Nursing will take you through the right track.</p>
                    <p><a class="btn" href="undergraduate-programs">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Graduate Programs</h3> 
                    <p>Are you ready for the next step in your career? The UTEP School of Nursing offers three MSN majors, an RN to MSN program, 
                    	two doctoral programs and three Graduate Certificate programs.</p>
                    <p><a class="btn" href="graduate-programs">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Academic Advising | Office of Student Affairs</h3>
                    <p>Your personal connection to successful admission, progression and graduation, the Office of Student Affairs is ready to assist you in attaining your academic goals.</p>
                    <p><a class="btn" href="sa">View details »</a>
                    </p>
                </div>
                <div class="span4">
                     <h3>Scholarships & Financial Aid</h3> 
                    <p>With the School of Nursing’s vigorous schedule, it is sometimes difficult for students to hold a full-time job. 
                    	Therefore, UTEP offers a variety of scholarship and financial aid opportunities.</p>
                    <p><a class="btn" href="finaid">View details »</a>
                    </p>
                </div>
            </div>
</div>
<?php get_footer(); ?>