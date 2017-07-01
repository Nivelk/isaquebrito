<?php
?>
<div class="container">
    <div class="row">
            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('post', get_post_format() ) ?>
            <?php endwhile; else:  ?>	
                <h4><?php _e('Woops...','ansimuz') ?></h4>
                <p><?php _e('Sorry, no posts were found.','ansimuz') ?></p>
            <?php endif; ?>
    </div>
</div>