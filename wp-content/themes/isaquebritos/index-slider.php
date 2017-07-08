<div class="col-12">
    
    <?php wp_enqueue_script('jssor/index', get_template_directory_uri() . '/js/componentes/jssor/jssor.index.js'); ?>
    
    
    <style>
        
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        
    </style>


    <div id="jssor_1" style="width:1300px; height:500px;overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;top:0px;left:0px;width:100%;height:100%;">
                <img src="<?php echo get_template_directory_uri() . '/images/slider/loading.gif';?>"/>
            </div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            
            <!-- Slider 01-->
            
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo get_template_directory_uri() .'/images/slider/slider-01.jpg';?>" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">TOUCH SWIPE SLIDER</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;"><div id="bt-thema">aqui um botao</div></div>
            </div>
            
            <!-- Slider 02 -->
            
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/slider/slider-02.jpg';?>" />
            </div>
            
            <!-- Slider 03 -->
            
            <div data-p="225.00" data-po="80% 55%" style="display: none;">
                <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/slider/slider-03.jpg';?>" />
            </div>
        
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2">
            <img src="<?php echo get_template_directory_uri() . '/images/slider/22l.png';?>"/>
        </span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2">
            <img src="<?php echo get_template_directory_uri() . '/images/slider/22r.png';?>"/>
        </span>
    </div>
</div>
<div class="w-100"></div>