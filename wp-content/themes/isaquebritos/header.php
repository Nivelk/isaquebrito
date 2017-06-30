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
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/pagina/style.css'; ?>"/>
        <!--CDN Bootsstrap -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/componentes/bootsstrap/bootsstrap.min.css'; ?>"/>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/componentes/bootsstrap/bootstrap-grid.min.css'; ?>"/>
        <script src="<?php echo get_template_directory_uri() . '/js/componentes/bootsstrap.min.js'; ?>"></script>
        <script src="<?php echo get_template_directory_uri() . '/js/componentes/jquery-1.12.3.min.js';?>"></script>
        <!--Fim CDN Bootsstrap -->
        <title><?php wp_title( '|', true, 'right'); ?><?php bloginfo('name'); ?> </title>
    </head>
    <body <?php body_class(); ?> >
        <div class="main">
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-3">
                            <center>
                                <img src="<?php echo get_template_directory_uri().'/images/logo.png';?>"/>
                                <p>ISAQUE DE BRITO SANTOS</p>
                                <p>Corretor de Imóveis, CRECI: 115.193</p>
                            </center>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <?php get_template_part('index','slider'); ?>
                    </div>
                </div>
            </div>