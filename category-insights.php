<?php ?>

<div class="container archive-insights-heading">
    <div class="row">
        <div class="col">
            <h1>The best buyers agents have their fingers on the pulse of the latest trends and developments.</h1>
        </div>
    </div>
</div>
<div class="archive-wrapper"> 
    <div class="container archive-insights">
        <div class="row">

            <div class="col-lg-2">
                <div class="type">
                    <p>Type</p>
                    <?php echo do_shortcode('[facetwp facet="categories"]'); ?>
                </div>
            </div>
            
            <div class="col-lg-10">
                <div class="row">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    
                        <?if (in_category('testimonial')) { ?>

                            <?php get_template_part('templates/tpl-testimonial'); ?>

                        <?php } elseif (in_category('articles')) { ?>

                            <?php get_template_part('templates/tpl-articles'); ?>
                            
                        <?php } ?>

                    <?php endwhile; else : ?> 
                            <p><?php _e( 'No Posts To Display.' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            

        </div>
    </div>
   
 </div>
