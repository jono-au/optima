<?php //cpt single-portfolio template ?>

<section class="porfolio-page container-fluid">
  <div class="container">
    <div class="row">

        <div class="col-lg-7">
          <h3><?php echo get_the_title()?></h3>
          <ul>
            <li><?php the_field('beds') ?> BED</li>
            <li><?php the_field('bathrooms') ?> BATH</li>
            <li><?php the_field('car_spaces') ?> CAR</li>
          </ul>
          <blockquote>"... <?php the_field('testimonial_snippet')?> ..."</blockquote>
          <div class="author"><?php the_field('testimonial_author') ?></div>
          <p><?php the_field('property_description') ?></p>
        </div>
        
        <div class="col-lg-5">
          <div class="gallery">
            <figure class="gallery__item gallery__item--1">
              <img src="<?php the_field('image_one')?>" class="gallery__img" alt="Image 1">
            </figure>
            <figure class="gallery__item gallery__item--2">
              <img src="<?php the_field('image_two')?>" class="gallery__img" alt="Image 2">
            </figure>
            <figure class="gallery__item gallery__item--3">
              <img src="<?php the_field('image_three')?>" class="gallery__img" alt="Image 3">
            </figure>
          </div>
        </div>

    </div>
  </div>
</section>