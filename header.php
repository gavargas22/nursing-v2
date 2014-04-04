<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>School of Nursing | The University of Texas at El Paso</title>
        <meta name="description" content="" />
        <meta name="author" content="Guillermo Vargas @ The School of Nursing | The University of Texas at El Paso" />
        <meta name="viewport" content="width=device-width; initial-scale=1.0" />
        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/img/logo-retina-icon.png" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/site-style.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/nav-css/sticky-navigation.css">
        <link rel="stylesheet" href="http://slackentie.github.io/isotope/css/isotope-style.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/flexslider.css">
        <!--Bootstrap library-->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <!-- ----------------- -->
        <!-- FancyBox 2 -->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/includes/fancyBox-master/source/jquery.fancybox.css" rel="stylesheet" media="screen">
        <!-- ----------------- -->
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    </head>
    
    <body>
        <div class="identityheader" id="identityheaderborder">
            <div class="container">
                <div class="span6">	<a href="http://www.utep.edu/"><img src="http://onthemove.utep.edu/img/UTEP_SIG_web.png"></a>

                </div>
                <!-- End Six Columns -->
                <div class="span4 offset1" id="welcome-menu">
                    <ul class="inline" id="top-quick-menu">
                        <li><a href="../contact">Contact Us</a>

                        </li>
                        <li><a href="http://www.utep.edu">UTEP Home</a>

                        </li>
                        <li><a href="directory">Faculty &amp; Staff</a>

                        </li>
                        <li><a href="https://givingto.utep.edu/SSLPage.aspx?pid=280&frcrld=1" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/givenow.png"/></a>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <div class="container" id="header-wrapper">
            <div class="span4 hidden-phone" id="welcome-menu">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/small-title.png" />
            </div>
            <div class="span4 offset4" id="nursing-logo" style="width:285px; height:61px;">
                <a href="http://nursing.utep.edu"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/sonlogo.png" width="285px" height="61px" /></a>
            </div>
        </div>
        
       <!-- <div class="container" id="slideshow-wrapper">
		<div class="flexslider">
  			
		<div class="flex-viewport" style="overflow: hidden; position: relative;">
			<ul class="slides" style="width: 800%; -webkit-transition: 0s; transition: 0s; -webkit-transform: translate3d(-1162px, 0, 0);"><li class="clone" style="width: 1162px; float: left; display: block;">
    		  <img src="img/slide02.jpg">
    		</li>
  			</ul>
  			</div>
  			<ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li>
  				
  			</ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
	</div>-->
        
        
        <div id="menu-background-holder-single" class="hidden-phone" style="z-index:999">
            <div class="container">
                <div id="main-navigation">
                    <div id="sticky_navigation">
                        <div class="demo_container">
                            <div id="mini-logo"></div>
                            <?php wp_nav_menu( array( 'menu'=>'Main Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-collapse' )); ?></div>
                    </div>
                </div>
            </div>
        </div>
        <!--Visible only in Phones-->
        <div class="navbar visible-phone" id="menu-background-holder-single">
            <div class="navbar-inner">
                <div class="container">
                    <div>
                        <div>
                            <!-- .btn-navbar is used as the toggle for collapsed navbar content --> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</a>

                            <!-- Be sure to leave the brand out there if you want it shown --><a class="brand" href="../"><b><i>Main Menu</i></b></a>

                            <!-- Everything you want hidden at 940px or less, place within here -->
                            <div class="nav-collapse collapse">
                                <?php wp_nav_menu( array( 'menu'=>'Main Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-collapse' )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>