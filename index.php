<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/build/home.css">
<?php get_header(); ?>
<div id="root"></div>
<div style="background: #fff">
    <h1>MENU</h1>
    <?php 
        $items = wp_get_nav_menu_items('Menu Principal');
        foreach ($items as $item):
    ?>
        <li class="header__item">
            <a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
        </li>
    <?php endforeach; ?>
    <h1>HEADER LOGO</h1>
    <a href="/">
        <?php $image = get_theme_mod( 'header_logo', 'Pedrosa' ); ?>
        <img src="<?php echo esc_url( $image ); ?>" alt="Pedrosa" />
    </a>
    <h1>IMAGENS SLIDER HOME</h1>
    <?php 
	    $homeimages = get_theme_mod( 'mainbanner_images', 'RoyalPoolSolution' );
	?>
    <?php foreach( $homeimages as $item ) : ?>
        <img src="<?php echo wp_get_attachment_url($item['image']); ?>" alt="Slider" />
    <?php endforeach; ?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/build/index.js"></script>
<?php get_footer();?>