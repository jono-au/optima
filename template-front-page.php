<?php
/**
 * Template Name: Front Page
 */
?>
<div class="scroll-vertical">
<section class="container-fluid hero" style="background:url(<?php the_field('background_image') ?>)">
    <div class="row">
        <div class="col-md-6" id="hero-logo">
            <img src="<?php the_field('logo') ?>" alt="optima" id="logo">
        </div>
        <div class="col-md-6" id="hero-testimonial">
     
                <?php if ( have_rows('testimonial') ) : ?>

                <div class="testimonial-container">
                    <div class="quoteLoop">

                        <?php while( have_rows('testimonial') ) : the_row(); ?>
                            <blockquote class="quote"> 
                                <h5>&nbsp;<br>
                                &ldquo;<?php echo get_sub_field('quote'); ?>&rdquo;<br>
                                </h5>
                                <p><?php echo get_sub_field('client'); ?></p>
                                
                                <?php 
                                //get post object
                                $link = (get_sub_field('full_testimonial'));
                                $permalink = get_permalink( $link->ID );
                                ?>
                                <p><a href="<?php echo $permalink?>">See full</a></p>
                            </blockquote>
                        <?php endwhile; ?>

                    </div>
                </div>

                <?php endif; ?>

        </div>
    </div>
    <a href="#what-we-do" id="hero-arrow"></a>
</section>
</div>

<div id="scrollHorizontal">
<section class="what-we-do" id="what-we-do">

    <div class="section">
        <div>
            <p>what we do</p>
            <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
            <div class="buttons">
                <a href="#portfolio">See our portfolio</a>
                <a href="#meet-ryan">Meet Ryan</a>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="top">
            <img src="/app/uploads/2023/02/1Coogee_005-size-2.jpg" alt="optima">
            <h2>our process</h2>
            <p>Optimal purpose</p>
        </div>
        <div class="timeline"></div>
        <div class="bottom">
            <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            <blockquote>
                <h2>"Ryan got me the home of my dreams"</h2>
                <p>Street st, Rose Bay</p>
            </blockquote>
        </div>
    </div>

    <div class="section">
        <div class="top">    
            <blockquote>
                <h2>"Ryan got me the home of my dreams"</h2>
                <p>Street st, Rose Bay</p>
            </blockquote>
            <p>Optimal Property</p>
        </div>
        <div class="timeline"></div>
        <div class="bottom">
            <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            <img src="/app/uploads/2023/02/1Coogee_005-size-2.jpg" alt="optima">
        </div>
    </div>

    <div class="section">
        <div class="top">
            <img src="" alt="">
            <img src="/app/uploads/2023/02/1Coogee_005-size-2.jpg" alt="optima">
            <p>Optimal Protection</p>
        </div>
        <div class="timeline"></div>
        <div class="bottom">
            <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            <blockquote>
                <h2>"Ryan got me the home of my dreams"</h2>
                <p>Street st, Rose Bay</p>
            </blockquote>
        </div>
    </div>

    <div class="section">
        <div class="top">
            <blockquote>
                <h2>"Ryan got me the home of my dreams"</h2>
                <p>Street st, Rose Bay</p>
            </blockquote>
        </div>
        
        <div class="timeline">
            <div class="circle">
            <p>Optimal Profiles</p>
            <p>Optimal Price</p>
            <p>Optimal Play</p>
            <p>Optimal Negotiation</p>
        </div></div>
        <div class="bottom">
            <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p> 
        </div>
    </div>

    <div class="section">
        <div class="top">
            <img src="/app/uploads/2023/02/1Coogee_005-size-2.jpg" alt="optima">
            <p>Optimal Purchase</p>
        </div>
        <div class="timeline"></div>
        <div class="bottom">
            <p class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            <blockquote>
                <h2>"Ryan got me the home of my dreams"</h2>
                <p>Street st, Rose Bay</p>
            </blockquote>
        </div>
    </div>

    <div class="section">
        <div>
            <img src="/app/uploads/2023/02/Group-19.svg" alt="optima">
            <div>
                <p>Your Optimal Advantage</p>
                <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h2>
            </div>
        </div>
    </div>

</section>
</div>

<div class="scroll-vertical">
    <section class="container-fluid portfolio" id="portfolio">
        <div class="row">
            <?php

            $args = array(  
                'post_type' => 'portfolio',
                'post_status' => 'publish',
                'posts_per_page' => 6, 
                'orderby' => 'title', 
                'order' => 'ASC',
            );

            $loop = new WP_Query( $args ); 
                
            while ( $loop->have_posts() ) : $loop->the_post(); 
                $featured_img = wp_get_attachment_image_src( $post->ID ); ?>

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
            <div class="enquire-btn"><a href="/portfolio">See More</a></div>
        </div>
    </section>
</div>

<section id="contact-ryan" class="contact-ryan">   
    <section class="container-fluid meet" id="meet-ryan">
        <div class="container">
            <div class="row">

                <div class="col-lg-6"><img src="<?php the_field('image_one') ?>" alt="optima"></div>
                <div class="col-lg-6">
                        <p><?php the_field('name')?></p>
                        <h2><?php the_field('heading_one')?></h2>
                        <div class="content">
                            <?php the_field('content')?>
                        </div>
                        <div class="enquire-btn"><a href="#">Enquire</a></div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid contact-form" id="contact">
        <div class="row">
            <div class="col">
                <?php echo do_shortcode('[gravityform id="1" description="false" ajax="true"]')?>
            </div>
        </div>
    </section>
</section> 


<div class="scroll-vertical">
    <section class="container cpt-social archive-insights">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                    <?php
                            $args = array(  
                                'post_status' => 'publish',
                                'posts_per_page' => 2, 
                                'orderby' => 'title', 
                                'order' => 'ASC',
                                'category_name' => 'articles'
                            );

                            $loop = new WP_Query( $args ); 
                                
                            while ( $loop->have_posts() ) : $loop->the_post();  ?>

                                <div class="col-12">
                                    
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


                            <?php endwhile;

                            wp_reset_postdata(); 

                            ?>
                    </div>

                    <p><a href="/insights">See more insights</a></p>
                </div>
                
                
                <div class="col-md-6">

                </div>


            </div>
    </section>
        

    <section class="accordion5 container-fluid" id="faq">

        <?php if ( have_rows('faq') ) : ?>
        <div class="accordion accordion-flush" id="accordionFlush">
                <h1>Frequently asked questions</h1>
                <!-- faq single block start  -->
                <?php $item = 1;?>
                <?php while( have_rows('faq') ) : the_row(); ?>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading<?php echo $item;?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $item;?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $item;?>">
                            <?php echo get_sub_field('title'); ?>
                        </button>
                        </h2>
                        <div id="flush-collapse<?php echo $item;?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $item;?>" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"><?php echo get_sub_field('description'); ?></div>
                        </div>
                    </div>
                <?php $item++;?>
                <?php endwhile; ?>
        </div>

        <?php endif; ?>

    </section>
</div>


<style>

 @media (max-width: 992px) {
    #hero-logo {
        position: relative;
        bottom: -150px;
        opacity: 1;
        transition: 0.5s;
    }

    #hero-testimonial {
        position: absolute;
        bottom: 150px;
        opacity: 0;
        transition: 1s;
        transform: translateX(-500px);


    }

 }

</style>

<script>

if ( jQuery(window).width() < 991 ) { 
    
const myTimeout = setTimeout(playQoute, 3000);

function playQoute() {
    document.getElementById('hero-logo').style.opacity="0";
    document.getElementById('hero-logo').style.transform="translateX(500px)";
    document.getElementById('hero-logo').style.display="none";
    document.getElementById('hero-testimonial').style.opacity="1";
    document.getElementById('hero-testimonial').style.transform="translateX(0)";
//   clearTimeout(myTimeout);
    }
}

document.getElementById("menu-menu").addEventListener("click",function(e) {
    document.querySelector('#main-menu').classList.remove('show');
    
});
</script>

