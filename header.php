<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="header container">
    <img class="header__logo" src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="logo">
    <div class="header__grid">
      <p class="header__lang">port - eng</p>
    <nav class="header__menu">
            <ul class="header__menu--list">
                <li ><a class="header__menu--list-item" href="#">Home</a></li>
                <li ><a class="header__menu--list-item" href="/escritorio">Escritório </a></li>
                <li ><a class="header__menu--list-item" href="#">Projetos</a></li>
                <li ><a class="header__menu--list-item" href="#">Clipping</a></li>
                <li ><a class="header__menu--list-item" href="#">Contato</a></li>
            </ul>
    </nav>
    </div>

    </header>