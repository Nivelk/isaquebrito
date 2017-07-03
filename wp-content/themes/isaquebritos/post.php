<?php
?>
<div class="col-3">
    <div class="row">
        <div <?php post_class();?>>
            <div class="col foto">
                <a href="<?php the_permalink();?>">
                    <?php
                        $imagenUrl = '';
                        $imagenId = get_post_thumbnail_id();
                        $imagenUrl = wp_get_attachment_image_src($imagenId);
                    
                        if($imagenUrl):
                    ?>
                            <img src="<?php echo $imagenUrl[0];?>" alt="<?php the_title();?>" />
                    <?php
                        else:
                    ?>
                            <img src="<?php echo get_template_directory_uri().'/images/anexo.png';?>"/>
                    <?php
                        endif;
                    ?>
                </a>    
            </div>
            <div class="box">
                <center>
                    <a href="<?php the_permalink(); ?>" class="post-heading" >
                        <?php the_title();?>
                    </a>
                </center>
                    <?php the_excerpt();?>
                <center>
                    <p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary "><?php _e('Veja Mais'); ?></a>
                    </p>
                </center>
            </div>
        </div>
    </div>    
</div>