<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Top Bar -->
  <div class="topbar">
    <div class="container">
      <a href="tel:<?php echo esc_attr( koreatextile_contact( 'phone' ) ); ?>">📞 <?php echo koreatextile_contact( 'phone' ); ?></a>
      <a href="mailto:<?php echo esc_attr( koreatextile_contact( 'email' ) ); ?>">✉️ <?php echo koreatextile_contact( 'email' ); ?></a>
    </div>
  </div>

  <!-- Header -->
  <header class="header">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav__logo">Korea<span>Textile</span></a>
      <nav aria-label="Main navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'walker'         => new KoreaTextile_Walker(),
            'container'      => false,
            'items_wrap'     => '<ul class="nav__menu">%3$s</ul>',
            'fallback_cb'    => false,
        ) );
        ?>
      </nav>
      <button class="nav__toggle" aria-label="Toggle navigation menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
    <div class="nav__overlay"></div>
  </header>
