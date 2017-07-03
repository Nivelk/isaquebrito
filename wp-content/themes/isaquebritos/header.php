<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo('charset'); ?>"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/images/favicon.png'; ?>"/> 
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
        <title><?php wp_title( '|', true, 'right'); ?><?php bloginfo('name'); ?> </title>
    </head>
    <body <?php body_class(); ?> >
        <div class="main">
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3">
                                <img src="<?php echo get_template_directory_uri().'/images/logo.png';?>"/>
                                <span>ISAQUE DE BRITO SANTOS<br>Corretor de Imóveis, CRECI: 115.193</span>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </header>
            <div class="container-fluid sliderSearch">
                <div class="row">
                    <!--sliderSearch -->                   