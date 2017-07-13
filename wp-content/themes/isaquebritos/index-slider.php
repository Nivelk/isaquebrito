<div class="col-12">
    
    <?php wp_enqueue_script('jssor/index', get_template_directory_uri() . '/js/componentes/jssor/jssor.index.js'); ?>
   
    <div id="jssor_1" style="width:1300px; height:500px;overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div class="slide-main" data-u="slides" >
            <!-- Slider 01-->
            
            <div data-p="225.00" class="slide1" style="display: none;">
                <img data-u="image" src="<?php echo get_template_directory_uri() .'/images/slider/slider-01.jpg';?>" />
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                                <h3>Apartamentos em São Paulo na Zona Leste, Oeste, Norte, Sul, Sudeste e ABC.</h3>
                        </div>
                        <div class="w-100"></div>
                        <div class="col"></div>
                        <div class="col">
                            <a href="#" class="btn btn-primary btn-lg" role="button">botao</a>
                            <a href="#" class="btn btn-primary btn-lg" role="button">botao</a>
                        </div>
                        <div class="col"></div>    
                    </div>
                    
                </div>
            </div>
            
            <!-- Slider 02 -->
            
            <div data-p="225.00" class="slide2" style="display: none;" >
                <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/slider/slider-02.jpg';?>" />
                <div class="container">
                    <div>Apartamentos em São Paulo na Zona Leste, Oeste, Norte, Sul, Sudeste e ABC.</div>
                </div>
            </div>
            
            <!-- Slider 03 -->
            
            <div data-p="225.00" data-po="80% 55%" class="slide3" style="display:none;">
                <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/slider/slider-03.jpg';?>" />
                <div class="container">
                    <div>Apartamentos em São Paulo na Zona Leste, Oeste, Norte, Sul, Sudeste e ABC.</div>
                </div>
            </div>
        
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l btn-slide"  data-autocenter="2">
            <img src="<?php echo get_template_directory_uri() . '/images/slider/22l.png';?>"/>
        </span>
        <span data-u="arrowright" class="jssora22r btn-slide"  data-autocenter="2">
            <img src="<?php echo get_template_directory_uri() . '/images/slider/22r.png';?>"/>
            
        </span>
    </div>
    
</div>
<div class="w-100"></div>