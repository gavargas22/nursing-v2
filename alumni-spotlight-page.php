<?php
/*
Template Name: Alumni Spotlight Page
*/

get_header(); ?>
<div class="container" id="single-page">
	<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<ul class="breadcrumb">','</ul>'); } ?>
            <div class="row">
            <div class="span8">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            		<h2><?php the_title(); ?></h2>
            		<p>The UTEP School of Nursing is proud of our alumni and their successes as health care providers and leaders in the El Paso community and beyond.</p>
            		<p>
            			<div class="spotlight-unit span12" id="spotlight-01" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/0030_Steffen-EP-MAG-CROPPED.jpg); background-size:cover; color:#ffffff;">
            				<div class="span5 offset6 spotlight-text">
            					<h2>Sally A. Hurt Deitch, ’90, ’94</h2>
            					<p>
            					In less than 18 years, Sally Hurt Deitch worked her way up from a 22-year-old staff nurse in an endoscopy department to CEO of one of El Paso’s newest hospitals.
            					She earned a B.S. in Nursing in 1990 and an M.S. in Nursing in 1994 from UTEP. 
            					<br />
            					<br />
            					Her first job was at Sun Towers in 1990, now called Las Palmas Medical Center, 
            					as a staff nurse. She quickly worked her way up to chief nursing officer, chief operating officer at Del Sol Medical Center, and CEO at Edmond Medical 
            					Center in Edmond, Okla. Before her 40th birthday, she was recruited back to El Paso to preside over the $150 million project that became Sierra Providence 
            					East Medical Center, which opened in May 2008.
            					<br />
            					<br />
            					“[My professors at UTEP] took us to a whole other level and not only turned us into nurses, but really taught us what a professional was and what it meant to embrace the profession … and know that what you do every day impacts somebody’s life,” Deitch said. “I can never say thank you enough nor explain to them what they instilled in me.”
            					</p>
            				</div>
            			</div>
            			
            			<div class="spotlight-unit span12" id="spotlight-02" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/enriue-mata.jpg); background-size:cover; color:#ffffff;">
            				<div class="span5 offset6 spotlight-text">
            					<h2>Enrique Mata, ’97</h2>
            					<p><i><span style="color: #888888;">UTEP Gold Nugget ’12 Congratulations to Enrique Mata for being the recipient of the  2012 UTEP Gold Nugget.</span> </i></p>
            					<p>
            						The Gold Nuggets recognition is given to a selective group of individuals, whose hard work and perseverance result in significant professional accomplishments.
            						Dedicated to improving health and preventing diseases along the U.S. – Mexico border he successfully lead efforts in childhood obesity prevention, 
            						smoking cessation, and preventing social isolation among the elderly 
            						<br />
            						<br />
            						Achievements include the creation of three major centers in Chihuahua, Mexico, to provide meals, transportation, physical activity and mental health 
            						support to several thousand older adults, and the development of a national model for coordinated school health that, in El Paso, resulted in a 13 
            						percent decrease in the prevalence of obesity among fourth graders.
            					</p>
            				</div>
            			</div>
            			<div class="spotlight-unit span12" id="spotlight-02" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/bg/lawson-linda.jpg); background-size:cover; color:#ffffff;">
            				<div class="span5 offset6 spotlight-text">
            					<h2>Linda Lawson</h2>
            					<p><i><span style="color: #888888;">Distinguished Alumna 2011 Gold Nugget</span> </i></p>
            					<p>
            						For Linda Lawson, the benefits of attending UTEP went beyond the expertise she gained in the classroom.
            						“My time at UTEP inspired me to dream about my future and to reach for my goals and aspirations,” she said.
            						That experience would propel her into a fulfilling career in the profession she loves – nursing.
            						Lawson would get graduate degrees from the University of Massachusetts and Texas Tech University Health Sciences Center – but
            						it was her bachelor’s degree in nursing from UTEP that set her on a diverse and successful path. After graduating from UTEP
            						 in 1987, she worked as a nurse at Lubbock General Hospital, remaining there a year before returning to El Paso, where she became a nurse
            						  in the ICU/Post-Anesthesia Care Unit at Providence Memorial Hospital.
            						 <p><a class="btn">Read More</a></p>
            					</p>
            				</div>
            			</div>
            			
            		</p>
            	<?php endwhile; else: ?>
				 <?php endif; ?>
				 <?php edit_post_link('Edit'); ?>
            </div>
            <div class="span4"></div>
            </div>
</div>
<?php get_footer(); ?>