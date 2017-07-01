<?php
/**
 * Standard Post Format
 */
?>

<!-- Standard -->
<article <?php post_class(); ?> style="border:solid 1px red;">
	<div class="feature-image">
		<a href="<?php the_permalink(); ?>">
            
			<?php
                $image_attributes = wp_get_attachment_image_src( $attachment->ID );
                    if ( $image_attributes ) : ?>
                         <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
                    <?php endif; ?>
            <?php
	           // Renders the image for the posts
	          // $image_url = ansimuz_post_image();
	           //if(!$image_url) 
		          //return;
	          // $image_url = ansimuz_build_image($image_url, 643);
            ?>		
            <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" />
		</a>
	</div>
	<div class="box cf">
		<?php
            /*
            * Date include on all the posts
            *
            */
        ?>
        <div class="entry-date">
	       <div class="number"><?php the_time('d') ?></div><div class="month"><?php the_time('M') ?></div>
        </div>
		
		<div class="excerpt">
			<a href="<?php the_permalink(); ?>" class="post-heading" ><?php the_title() ?></a>
			<?php the_excerpt() ?>
			
			<p><a href="<?php the_permalink(); ?>" class="learnmore"><?php _e('Veja Mais'); ?></a></p>
		</div>
		
		<?php 
            /*
            * Meta data included on all of the posts
            *
            */
        ?>

        <div class="meta">
            <span class="format"><?php _e('Posted by'); ?> </span>
            <span class="user"><?php the_author_link() ?></span>
            <span class="comments"><?php comments_number('0', '1', '%') ?> <?php _e('Comments'); ?> </span>
            <span class="tags"><?php the_tags('',', ', '') ?></span>
        </div>
			
	</div>
</article>
<!-- ENDS  Standard -->

