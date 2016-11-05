<div class="content-desktop-single">

    <div class="blog-post">

        <h2 class="blog-post-title"><?php the_title(); ?></h2>

        <div class="blog-post-meta-container">
            
            <div class="blog-post-meta">
                
                <div class="blog-post-meta-info">
                    
                    <i class="mdi mdi-calendar-clock"></i>
                    
                    <?php the_date(); ?>
                    
                </div>
                
                <div class="blog-post-meta-info">
                    
                    <a href="#">
  
                        <i class="mdi mdi-account"></i>
                    
                        <?php the_author(); ?>
  
                    </a>
                    
                </div>
            
            </div>
            
        </div>

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
