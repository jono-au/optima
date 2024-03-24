<?php //testimonial template part ?>         
            
    <div class="col-md-6">
        
            <article class="panel-testimonial <?php echo (get_field('colour'))? 'gold' : '' ?>">
                <p><?php the_field('testimonial_lines'); ?></p>
                
              
                    <div class="overlay">
                        <div>
                            <p><?php the_title(); ?></p>
                            <p><?php the_field('author_title'); ?></p>
                        </div>
                        <div>
                            <p><a href="<?php the_permalink(); ?>">Read full testimonial</a></p> 
                        </div>       
                    </div>
            </article>
            
    </div>