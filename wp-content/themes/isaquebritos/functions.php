<?php
//suporte para tema
    add_theme_support('post-thumbnails');

//suporte para formado de arquivo para adicionar
    add_theme_support( 'post-formats', array('link', 'video', 'quote', 'image' ));
//suporte para descrição
    add_post_type_support('page','excerpt');
//renomeando os caminho de diretorio
    //DEFINE_CSS
    define('DIR_PAGINAS', get_template_directory_uri()."/css/pagina/");
    define('DIR_COMPONENTES', get_template_directory_uri().'/css/componentes/');
    define('BOOTSSTRAP_CSS','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');
    //DEFINE_JS
    define('DIR_COMPONENTES_JS', get_template_directory_uri().'/js/componentes/');
    define('BOOTSSTRAP_JS','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js');
    define('TETHER_JS','https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js');
//função de load de css e script 
    function load_scriptStyle(){
        //CSS
        
        wp_enqueue_style('style', DIR_PAGINAS. 'style.css');
        wp_enqueue_style('bootstrap', BOOTSSTRAP_CSS);
        wp_enqueue_style('jssor', DIR_COMPONENTES. 'jssor/jssor.css');
        
        //JS
        wp_enqueue_script('jssor', DIR_COMPONENTES_JS. 'jssor/jssor.slider-21.1.5.mini.js');
        wp_enqueue_script('bootstrap', BOOTSSTRAP_JS , array('jquery'), 1.1, true);
        wp_enqueue_script('tether', TETHER_JS , array('jquery'), 1.1, true);
    }
//adicionar as funções no WordPress
    add_action('wp_enqueue_scripts','load_scriptStyle');
//funções de admin
    function admin_pageCategoria(){
        
    }
//funcão para excerpt_length
    function admin_excerptLength($length){
        return 20;
    }
//adiciona função length execerpt
    add_filter('excerpt_length' , 'admin_excerptLength', 999);
?>