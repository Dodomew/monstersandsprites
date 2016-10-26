<?php
/*
Template Name: Portfolio
*/

    get_header(); 

?>

<div class="content-portfolio-container">

        <?php
        // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

        <?php if ( $wpb_all_query->have_posts() ) : ?>

           <!-- the loop -->

           <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>

    <div class="blog-post-card">
        
            <div class="blog-post-square">

                   <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
                
            </div>
        
        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        
        <?php the_excerpt(); ?>
        
    </div>

           <?php endwhile; ?>
           <!-- end of the loop -->

           <?php wp_reset_postdata(); ?> 

        <?php else : ?>

           <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

        <?php endif; ?>
    
</div>
    
<?php 

    get_footer();

?>