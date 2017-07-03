<?php
//suporte para tema
    add_theme_support('post-thumbnails');
//suporte para formado de arquivo para adicionar
    add_theme_support( 'post-formats', array('link', 'video', 'quote', 'image' ));
//renomeando os caminho de diretorio
    define('DIR_PAGINAS', get_template_directory_uri()."/css/pagina/");
    define('DIR_COMPONENTES', get_template_directory_uri().'/css/componentes');
//função de load de css e script 
    function load_scriptStyle(){
        //CSS
        wp_enqueue_style('style', DIR_PAGINAS. 'style.css');
        
        //JS
    }
    //adicionar as funções no WordPress
    add_action('wp_enqueue_scripts','load_scriptStyle');
?>