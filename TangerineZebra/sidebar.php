<div class="sidebar-container">
    
    <div class="sidebar-about">

        <h4>About</h4>

        <p><?php the_author_meta( 'description', 1 ); ?> </p>
        
    </div>
    
    <div class="sidebar-archive">

        <h4>Archives</h4>

        <ol class="list-unstyled">

            <?php wp_get_archives('type=monthly'); ?>

        </ol>
        
    </div>
    
</div>

<div class="content-container">