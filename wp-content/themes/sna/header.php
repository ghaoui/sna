<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<?php wp_head(); ?>
	 
</head>
<body>
    <div class="parent-header hidden-xs" data-uk-sticky>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <a href="<?php bloginfo('url'); ?>" class="logo" >
                        <img class="" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center">
                    <img class="iso" src="<?php bloginfo('stylesheet_directory'); ?>/images/iso.png" alt="">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-center">
                    <a href="http://www.poulinagroupholding.com" class="logopgh" target="_blank">
                        <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-PGH-50ans.png" alt="">
                    </a>
                </div>
            </div>                
        </div>
    </header>
    <nav>
        <?php if(is_front_page())wp_nav_menu(array('theme_location'=>'home')); else wp_nav_menu(array('theme_location'=>'interne')); ?>
        <div class="search">
            <?php get_search_form();?>
        </div>
    </nav>
        <div class="flech-menu"><i class="fa fa-angle-double-down"></i></div>
    </div>
    <div class="visible-xs parent-header">
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
                        <a href="<?php bloginfo('url'); ?>" class="logo" >
                            <img class="" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs text-center">
                        <img class="iso" src="<?php bloginfo('stylesheet_directory'); ?>/images/iso.png" alt="">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6  text-center">
                        <a href="http://www.poulinagroupholding.com" class="logopgh" target="_blank">
                            <img  src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-PGH-50ans.png" alt="">
                        </a>
                    </div>
                    <div class="col-xs-6">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mymenu" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>                
            </div>
        </header>
        <div class="collapse navbar-collapse" id="mymenu">
            <?php if(is_front_page())wp_nav_menu(array('theme_location'=>'home')); else wp_nav_menu(array('theme_location'=>'interne')); ?>
            <div class="search">
                <?php get_search_form();?>
            </div>
        </div>
    </div>
    