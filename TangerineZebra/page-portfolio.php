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

                   <a href="<?php the_permalink(); ?>
                            
                            " rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail();?> 
                       
                                           <?php    
                            // Checks if post has a feature image, grabs the feature-image and outputs that along with thumbnail SRC as a REL attribute 
                            if (has_post_thumbnail()) { // checks if post has a featured image and then outputs it.     
                                $image_id = get_post_thumbnail_id ($post->ID );  
                                $image_thumb_url = wp_get_attachment_image_src( $image_id,'small-thumb');                               
                                $attr = array(
                                    'class' => "post-sample",                                   
                                    'rel' => $image_thumb_url[0], // REL attribute is used to show thumbnails in the Nivo slider, can be skipped if you don't want thumbs or using other slider
                                );
                                the_post_thumbnail ('feature-image', $attr);                                            
                            }
                            if (class_exists('MultiPostThumbnails')) {                              
                            // Loops through each feature image and grabs thumbnail URL
                            $i=1;
                                while ($i<=5) {
                                    $image_name = 'feature-image-'.$i;  // sets image name as feature-image-1, feature-image-2 etc.
                                    if (MultiPostThumbnails::has_post_thumbnail('post', $image_name)) { 
                                        $image_id = MultiPostThumbnails::get_post_thumbnail_id( 'post', $image_name, $post->ID );  // use the MultiPostThumbnails to get the image ID
                                        $image_thumb_url = wp_get_attachment_image_src( $image_id,'small-thumb');  // define thumb src based on image ID
                                        $image_feature_url = wp_get_attachment_image_src( $image_id,'feature-image' ); // define full size src based on image ID
                                        $attr = array(
                                            'class' => "post-sample",      // set custom class
                                            'rel' => $image_thumb_url[0],   // sets the url for the image thumbnails size
                                            'src' => $image_feature_url[0], // sets the url for the full image size 
                                        );                                                                                      
                                        // Use wp_get_attachment_image instead of standard MultiPostThumbnails to be able to tweak attributes
                                        $image = wp_get_attachment_image( $image_id, 'feature-image', false, $attr );                     
                                        echo $image;
                                    }                           
                                    $i++;
                                }                            

                            }; // end if MultiPostThumbnails 
                         ?>
                
                </a>
                
            </div>
        
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