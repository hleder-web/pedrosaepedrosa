<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header container">
    <a href="/" class="header__logo">
        <?php $image = get_theme_mod( 'header_logo', 'Pedrosa' ); ?>
        <img  src="<?php echo esc_url( $image ); ?>" alt="logo" />
    </a>
    <div class="header__grid">
   <p style="" class="header__lang">port - eng</p> 
    <nav class="header__menu" >
            <ul class="header__menu--list">
                  <?php 
        $items = wp_get_nav_menu_items('Menu Principal');
        foreach ($items as $item):
    ?>
    
          <li class="header__item">
              <a class="header__menu--list-item" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
          </li>
    <?php endforeach; ?>
            </ul>
    </nav>
    </div>

    </header>