
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<header class="header container" id="header">
  <a href="/" class="header__logo">
    <?php $image = get_theme_mod('header_logo', 'Pedrosa'); ?>
    <img src="<?php echo esc_url($image); ?>" alt="logo" />
  </a>

  <!-- Botão hambúrguer -->


  <div class="header__grid">
    <p class="header__lang">port - eng</p>
    <button class="menu-toggle" aria-label="Abrir menu">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_46_76)">
            <path d="M21 5H3" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M21 9H3" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M21 13H3" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M21 17H3" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
          </g>
          <defs>
            <clipPath id="clip0_46_76">
              <rect width="24" height="24" fill="white" />
            </clipPath>
          </defs>
        </svg>

      </button>
    <nav class="header__menu">

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
<nav class="header__menu-mob">


      <ul class="header__menu--list">
        <div class="header__menu--topmob">
          <a href="/" class="header__logo">
            <img src="<?php echo esc_url($image); ?>" alt="logo" style="filter: invert(1);" />
          </a>
          <button class="menu-close" aria-label="Fechar menu">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_46_28)">
                <path
                  d="M11.875 1.875H3.125C2.43464 1.875 1.875 2.43464 1.875 3.125V11.875C1.875 12.5654 2.43464 13.125 3.125 13.125H11.875C12.5654 13.125 13.125 12.5654 13.125 11.875V3.125C13.125 2.43464 12.5654 1.875 11.875 1.875Z"
                  fill="#58585A" stroke="#58585A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M5.625 5.625L9.375 9.375" stroke="white" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
                <path d="M9.375 5.625L5.625 9.375" stroke="white" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </g>
              <defs>
                <clipPath id="clip0_46_28">
                  <rect width="15" height="15" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </button>


        </div>
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
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggle = document.querySelector(".menu-toggle");
    const close = document.querySelector(".menu-close");
    const menu = document.querySelector(".header__menu-mob ");

    toggle.addEventListener("click", () => {
      menu.classList.toggle("active");
    });

    close.addEventListener("click", () => {
      menu.classList.remove("active");
    });
  });
</script>