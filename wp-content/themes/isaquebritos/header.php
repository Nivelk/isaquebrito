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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"/>
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="<?php //echo get_template_directory_uri() . '/css/componentes/bootsstrap/bootsstrap.min.css'; ?>"/>
        <link rel="stylesheet" href="<?php //echo get_template_directory_uri() . '/css/componentes/bootsstrap/bootstrap-grid.min.css'; ?>"/>
        <link rel="stylesheet" href="<?php //echo get_template_directory_uri() . '/css/componentes/bootsstrap/bootstrap-reboot.min.css'; ?>"/>
        <script src="<?php //echo get_template_directory_uri() . '/js/componentes/bootsstrap.min.js'; ?>"></script>
        <script src="<?php //echo get_template_directory_uri() . '/js/componentes/jquery-1.12.3.min.js';?>"></script>
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
                                <p>ISAQUE DE BRITO SANTOS<br>Corretor de Imóveis, CRECI: 115.193</p>
                            </center>
                        </div>
                        <div class="col"></div>
                    </div>
                </div>
            </header>
            <div class="container-fluid sliderSearch">
                <div class="row">
                    <!--sliderSearch -->
                    <div class="col-12">
                        <?php get_template_part('index','slider'); ?>
                    </div>
                    <div class="w-100"></div>
                    