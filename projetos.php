<?php
    /*
        Template Name: projetos
    */
    get_header(); 
?>

<div id="root" ></div>

<div>
    <h1>FILTROS</h1>
    <?php 
        $terms = get_terms([
            'taxonomy' => 'types',
            'hide_empty' => true,
        ]); 
        foreach($terms as $item):
    ?>
        <li class="services__card-info">
            <a href="/sizes/<?php echo $item->slug; ?>">
                <h3><?php echo $item->name; ?></h3>
            </a>
        </li>
    <?php endforeach; ?>
    <h1>lista de posts</h1>
    <?php 
        $args = array('post_type'=> 'projects'); 
        $result = new WP_Query($args);
        $total = $result->found_posts;
        if($total > 0):
    ?>
        <?php while ( $result->have_posts() ) : 
            $result->the_post(); 
        ?>  
        
            <?php echo the_title(); ?>
            <?php if(tr_field('project_images')): ?>
                    <?php 
                        $images = tr_field('project_images');
                        foreach($images as $item):
                    ?>
                        <?php echo wp_get_attachment_url($item['image']); ?>
                    <?php endforeach; ?>
            <?php endif; ?>
            <?php echo tr_field('description'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<script src="<?php echo get_template_directory_uri(); ?>/build/projetos.js"></script>
<?php get_footer(); ?>