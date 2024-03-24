<?php //articles template part ?>         
            
    <div class="col-md-6">
       
            <article class="panel-articles">
                <a href="<?php the_permalink(); ?>">
                    <div class="overlay">
                        <p><?php echo get_the_date( 'M j, Y' );?></p>
                        <p><?php the_title(); ?></p>
                    </div>
                </a>
                <?php the_post_thumbnail()?>
            </article>
       
    </div>


  