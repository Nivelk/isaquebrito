<?php
    $argumento = array(
        'post_type' => 'page'
    );
    $query = new wp_query($argumento);
?>
<div class="container">
    <div class="row">
        <?php 
            if($query->have_posts()):
                while($query->have_posts()):
                    $query->the_post();
                    get_template_part('post', get_post_format());
                endwhile;
            else:
        ?>
            <h4><?php _e('Ups...') ?></h4>
            <p><?php _e('Desculpe, nenhum pagina foi encontrado.') ?></p>
        <?php
            endif;
        ?>
    </div>
</div>