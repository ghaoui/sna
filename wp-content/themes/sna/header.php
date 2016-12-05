<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
	<?php wp_head(); ?>
	 
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <a href="<?php bloginfo('url'); ?>" class="logo" >
                        <img class="" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-6 text-center">
                    <img class="iso" src="<?php bloginfo('stylesheet_directory'); ?>/images/iso.png" alt="">
                </div>
                <div class="col-lg-3">
                    <ul class="social  ">
                        <li class="facebook uk-animation-hover uk-animation-scale">
                            <a href="#" class="uk-icon-facebook-official"></a>
                        </li>
                        <li class="twitter uk-animation-hover uk-animation-scale">
                            <a href="#" class="uk-icon-twitter"></a>
                        </li>
                        <li class="instagram uk-animation-hover uk-animation-scale">
                            <a href="#" class="uk-icon-instagram"></a>
                        </li>
                        <li class="google uk-animation-hover uk-animation-scale">
                            <a href="#" class="uk-icon-google-plus"></a>
                        </li>
                    </ul>
                </div>
            </div>                
        </div>
    </header>
    <nav>
        <?php wp_nav_menu(); ?>
        <div class="search">
            
        </div>
    </nav>