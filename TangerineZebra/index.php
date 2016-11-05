<?php get_header(); ?>

<?php get_sidebar(); ?>

    <?php 

    if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
        get_template_part( 'content', get_post_format() );
  
    endwhile;

    ?>

    <nav class="nav-container">
        <ul class="pager">
            
            <?php
                global $wp_query;

                $big = 999999999; // need an unlikely integer

                echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'prev_next' => 0
                ) );
            ?>
            
        </ul>
    </nav>

    <?php
        endif; 
    ?>  


<?php get_footer(); ?>
