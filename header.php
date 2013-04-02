<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <!-- Always force latest IE rendering engine (even in intranet) & Chrome
        Frame Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>School of Nursing | The University of Texas at El Paso</title>
        <meta name="description"
        content="" />
        <meta name="author" content="Guillermo Vargas @ The School of Nursing | The University of Texas at El Paso"
        />
        <meta name="viewport" content="width=device-width; initial-scale=1.0"
        />
        <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain
        and delete these references -->
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/site-style.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/nav-css/sticky-navigation.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/isotope-style.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/flexslider.css">
        <!--Bootstrap library-->
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <!-- ----------------- -->
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'
        rel='stylesheet' type='text/css'>
    </head>
    
    <body>
    <div class="identityheader" id="identityheaderborder">
    <div class="container">
        <div class="span6">	<a href="http://www.utep.edu/"><img src="http://onthemove.utep.edu/img/utepidheader2.png"></a>

        </div>
        <!-- End Six Columns -->
        <div class="span4 offset1" id="welcome-menu">
            <ul class="inline" id="top-quick-menu">
                <li><a href="#">Contact Us</a>

                </li>
                <li><a href="#">UTEP Home</a>

                </li>
                <li><a href="#">Faculty &amp; Staff</a>

                </li>
                <li><a href="#">Give to SoN</a>

                </li>
            </ul>
        </div>
    </div>
    <!-- End Row -->
	</div>
	<div class="container" id="header-wrapper">
    <div class="span4" id="welcome-menu">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/small-title.png" />
    </div>
    <div class="span4 offset4" id="nursing-logo">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/sonlogo.png" width="285px" height="61px" />
    </div>
	</div>
	<div id="menu-background-holder-single">
            <div class="container">
                <div id="main-navigation">
                    <div id="sticky_navigation">
                        <div class="demo_container">
                            <div id="mini-logo"></div>
                            <!--<ul>
                                <li><a href="../" class="">Home</a>
                                </li>
                                <li><a href="prospective">Prospective Students</a>

                                    <!--<ul>
							<li>Current Students</li>
							<li>Future Students</li>
						</ul>-->
                                <!--</li>
                                <li><a href="current" class="">Current Students</a>
                                </li>
                                <li><a href="alumni">Alumni & Friends</a>
                                </li>
                                <li><a href="excellence">Areas of Excellence</a>
                                </li>
                                <li><a href="#">About Us</a>
                                </li>
                            </ul>-->
                            <?php wp_nav_menu( array('menu' => 'Main Menu', 'items-_wrap' => '%3$s', 'container' => false, 'menu_class' => 'nav nav-collapse' )); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>