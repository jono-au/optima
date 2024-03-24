<?php // custom page template for Testimonails ?>


<article class="container page-layout-testimonial">
    <h2>Industry Leader</h2>
    <div><a href="#" onclick="history.back()" class="back-button">BACK</a></div>

    <div class="row">
        <div class="col-lg-8">
            <h2><?php the_title() ;?></h2>
            <p><?php the_field('author_title'); ?></p>
            <?php the_field('full_testimonial') ?>
        </div>
        <div class="col-lg-4">
            <h1>"... <?php the_field('testimonial_excerpt')?>..."</h1>
        </div>
    </div>
</article>
