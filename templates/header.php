<?php if ( class_exists( 'WooCommerce' ) ) {
  get_template_part('templates/modal-product-search');
} ?>

<header class="page-header">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="/app/uploads/2023/01/Optima-Logo.svg" alt="optima"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="main-menu" class="navbar-collapse collapse"> <?php // add .width class for flyout menu ?>
        <?php if (has_nav_menu('primary_navigation')) {
          wp_nav_menu( [
            'theme_location'  => 'primary_navigation',
            'depth'           => 3, // 2 = with dropdowns, 1 = no dropdowns.
            'container'       => '',
            'container_class' => '',
            'container_id'    => 'main-menu',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'items_wrap'      => '<ul id="%1$s" class="%2$s" >%3$s</ul>',
            'walker'          => new WP_Bootstrap_Navwalker()
          ] );

        } ?>
      </div>
    </div>
  </nav>
</header>


