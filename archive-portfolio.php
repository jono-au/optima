<?php //portfolio archive page ?>

<section class="container-fluid portfolio">
    <div class="row">
        <?php

        $args = array(  
            'post_type' => 'portfolio',
            'post_status' => 'publish',
            'posts_per_page' => -1, 
            'orderby' => 'title', 
            'order' => 'ASC',
        );

        $loop = new WP_Query( $args ); 
            
        while ( $loop->have_posts() ) : $loop->the_post();  ?>
            
            <div class="col-lg-4 col-md-6">
                <a href="<?php the_permalink(); ?>">
                    <div class="portfolio-panel">
                    <div class="overlay"><?php print the_title(); ?></div>
                    <?php the_post_thumbnail()?>
                    </div>
                </a>
            </div>

        <?php endwhile;
        
        wp_reset_postdata(); 
        
        ?>
        
    </div>
</section>