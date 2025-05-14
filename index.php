<?php
/*
Template Name: Home
*/
get_header();
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/build/home.css">
<div id="root"></div>

<?php 

$homeimages = get_theme_mod('mainbanner_images', []);

$formattedImages = [];

if (is_array($homeimages)) {
    foreach ($homeimages as $item) {
        if (!empty($item['image'])) {
            $formattedImages[] = ['src' => $item['image']];
        }
    }
}

echo '<script>window.sliderImages = ' . json_encode($formattedImages) . ';</script>';
?>


<script src="<?php echo get_template_directory_uri(); ?>/build/index.js"></script>
<?php get_footer(); ?>
