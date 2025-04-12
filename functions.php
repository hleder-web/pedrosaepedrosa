<?php

function meu_tema_enqueue_assets() {
  if (is_page() || is_front_page()) {
      global $post;
      $slug = $post ? $post->post_name : 'index';

      // Caminhos dos arquivos gerados pelo Webpack
      $js_file = get_template_directory() . "/build/{$slug}.js";
      $css_file = get_template_directory() . "/build/{$slug}.css";

      // Enfileirar JS se o arquivo existir
      if (file_exists($js_file)) {
          wp_enqueue_script($slug . '-js', get_template_directory_uri() . "/build/{$slug}.js", array(), null, true);
      }

      // Enfileirar CSS se o arquivo existir
      if (file_exists($css_file)) {
          wp_enqueue_style($slug . '-css', get_template_directory_uri() . "/build/{$slug}.css");
      }
  }
}

add_action('wp_enqueue_scripts', 'meu_tema_enqueue_assets');
