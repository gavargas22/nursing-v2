<?php get_header(); ?>
<div class="container" id="single-page">
            <div class="row">
            <div class="span8">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h2 style="color:#3A4FA2;"><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
              <?php endwhile; else: ?>
              <?php endif; ?>
              <?php edit_post_link('Edit'); ?>
            </div>
            <div class="span3">
            <h4><a href="simulation"><i class="icon-chevron-left"></i>Back to Simlab Home</a></h4>
        <div class="simlab-top-items-element">
          <div class="simlab-top-items-element-title-important-links">Navigation</div>
          <?php wp_nav_menu( array('menu' => 'Simlab Important Links', 'container' => false, 'nav nav-list', 'menu_class' => 'nav nav-pills nav-stacked custom-pill-behavior' )); ?>
        </div>
        <div class="simlab-top-items-element-social" style="padding-left:4px;">
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FUTEPSimulation&amp;width=280&amp;height=395&amp;colorscheme=light&amp;show_faces=false&amp;header=false&amp;stream=true&amp;show_border=true&amp;appId=771052199594024" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:280px; height:395px;" allowTransparency="true"></iframe>
        </div>
      </div>
            </div>
</div>
<?php get_footer(); ?>

