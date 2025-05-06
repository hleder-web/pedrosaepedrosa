<?php
/*
Template Name: Home
*/
get_header();
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/build/home.css">
<!-- <div id="root"></div> -->

<?php 
// $homeimages = get_theme_mod('mainbanner_images', []);

// $formattedImages = [];

// if (is_array($homeimages)) {
//     foreach ($homeimages as $item) {
//         if (!empty($item['image'])) {
//             $formattedImages[] = ['src' => $item['image']];
//         }
//     }
// }

// echo '<script>window.sliderImages = ' . json_encode($formattedImages) . ';</script>';
?>
<div style="background: #fff;position: fixed;width: 100%;height: 100%;display: flex;justify-content: center;align-items: center;flex-direction: column;">
<?php $image = get_theme_mod( 'header_logo', 'Pedrosa' ); ?>
<img style="filter: invert(1);"  src="<?php echo esc_url( $image ); ?>" alt="logo" />
    <p style="font-size: 20px;">Em breve</p>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/build/index.js"></script>
<?php get_footer(); ?>
