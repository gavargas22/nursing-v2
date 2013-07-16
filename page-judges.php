<?php get_header(); ?>
<div class="container" id="single-page">
    <?php if ( function_exists( 'yoast_breadcrumb') ) { yoast_breadcrumb( '<ul class="breadcrumb">', '</ul>'); } ?>
    <div class="row">
        <div class="span15" id="container-judges" style="position: relative; height:auto; padding-bottom:200px;">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<div id="judging-intstructions" style="position:relative; width:auto;">
            	<h2><?php the_title(); ?></h2>
            	
            	<h7>Hello! Welcome to the First Nursing Photo Contest judging. We would like for you to select the top three pictures that best
            		represent our beloved School of Nursing. Note the P number located at the bottom of each</h7>
            	</div>

            <div id="images-to-be-judged" class="clearfix" style="position: relative; top:50px; padding-bottom:200px;">
                <ul class="thumbnails">
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200529%20npc0005/image.jpg" class="thumbnail fancybox" title="P1"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200529%20npc0005/image.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200529%20npc0005/image36.jpg" class="thumbnail fancybox" title="P2"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200529%20npc0005/image36.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200529%20npc0005/image59.jpg" class="thumbnail fancybox" title="P3"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200529%20npc0005/image59.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200530%20npc0006/image.jpg" class="thumbnail fancybox" title="P4"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200530%20npc0006/image.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200530%20npc0006/image98.jpg" class="thumbnail fancybox" title="P5"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-10%200530%20npc0006/image98.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/1638_4887584582097_312370411_n.jpg" class="thumbnail fancybox" title="P6"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/1638_4887584582097_312370411_n.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/CameraZOOM-20120912095412561.jpg" class="thumbnail fancybox" title="P7"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/CameraZOOM-20120912095412561.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/CameraZOOM-20120912101558618.jpg" class="thumbnail fancybox" title="P8"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/CameraZOOM-20120912101558618.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/DSCN0613.JPG" class="thumbnail fancybox" title="P9"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/DSCN0613.JPG" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/DSCN0619.JPG" class="thumbnail fancybox" title="P10"><img src="http://nursing.utep.edu/cdn/photocontest/2013-05-11%201249%20npc0007/DSCN0619.JPG" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/npc0002/image.jpg" class="thumbnail fancybox" title="P11"><img src="http://nursing.utep.edu/cdn/photocontest/npc0002/image.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/npc0003/IMG_8104.JPG" class="thumbnail fancybox" title="P12"><img src="http://nursing.utep.edu/cdn/photocontest/npc0003/IMG_8104.JPG" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/npc0003/IMG_8107.JPG" class="thumbnail fancybox" title="P13"><img src="http://nursing.utep.edu/cdn/photocontest/npc0003/IMG_8107.JPG" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/npc0003/IMG_8108.JPG" class="thumbnail fancybox" title="P14"><img src="http://nursing.utep.edu/cdn/photocontest/npc0003/IMG_8108.JPG" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/npc0003/IMG_8109%20copy.jpg" class="thumbnail fancybox" title="P15"><img src="http://nursing.utep.edu/cdn/photocontest/npc0003/IMG_8109%20copy.jpg" alt=""></a>
					</li>
					<li class="span3 image-fancybox clearfix">
						<a href="http://nursing.utep.edu/cdn/photocontest/npc0004/image.jpg" class="thumbnail fancybox" title="P16"><img src="http://nursing.utep.edu/cdn/photocontest/npc0004/image.jpg" alt=""></a>
					</li>
					
				</ul>
                
            </div>
            <?php endwhile; else: ?>
            <?php endif; ?>
            <?php edit_post_link( 'Edit'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>