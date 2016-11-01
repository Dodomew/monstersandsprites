<div class="content-desktop-single">

    <div class="blog-post">

        <h2 class="blog-post-title"><?php the_title(); ?></h2>

        <!--p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>-->

           <?php if(has_post_thumbnail()): ?>
                <figure class="blog-thumbnail">
                    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                        <?php the_post_thumbnail() ?>
                    </a> 
                </figure>
                
			<?php endif ?>

     <?php the_content(); ?>

    </div><!-- /.blog-post -->
    
</div>
