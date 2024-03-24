<?php // custom page template for Articles ?>


<article class="container page-layout-articles">
    <div><a href="#" onclick="history.back()" class="back-button">BACK</a></div>

    <div class="row">
        <div class="col-lg-8">
            <h2><?php the_title() ;?></h2>
            <p><?php echo get_the_date( 'M j, Y' );?></p>
            <div>  
                <p><?php the_field('full_article') ?></p>
            </div>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-2">
            <p>Related resources</p>
            <?php
                        $args = array(  
                            'post_status' => 'publish',
                            'posts_per_page' => 4, 
                            'orderby' => 'title', 
                            'order' => 'ASC',
                            'category_name' => 'articles'
                        );

                        $loop = new WP_Query( $args ); ?>

                        <ul>

                        <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>

                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      
                        <?php endwhile;

                        wp_reset_postdata(); 
                        ?>

                        </ul>

        
                    
        </div>
    </div>
</article>