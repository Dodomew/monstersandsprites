    <div class="content-desktop">
        
        <div class="blog-post">

            <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
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
                
            <div class="blog-comments">
                
                <a href="<?php comments_link(); ?>">

                    <?php

                        printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n(get_comments_number() ) ); 
                    ?>

                </a>
                
            </div>
                
            </div>

           <?php if(has_post_thumbnail()): ?>
                <figure class="blog-thumbnail">
                    <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
                        <?php the_post_thumbnail() ?>
                    </a> 
                </figure>
                
			<?php endif ?>

			<?php the_excerpt(); ?>

        </div><!-- /.blog-post -->
        
    </div>
    
