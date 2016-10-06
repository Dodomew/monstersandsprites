    <div class="content-desktop">

        <div class="content-post-desktop">
        
            <div class="blog-post">

                <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <div class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></div>
                
                    <div class="blog-comments">
                
                        <a href="<?php comments_link(); ?>">

                            <?php

                                printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n(get_comments_number() ) ); 
                            ?>

                        </a>
                
                    </div>
                
                <div class="blog-thumbnail">
                              
                    <?php if ( has_post_thumbnail() ) 
                    {
                        the_post_thumbnail();
                    } ?>
                
                </div>

                    <?php the_excerpt(); ?>

            </div><!-- /.blog-post -->

        </div>
        
    </div>