<?php
get_header();

$projects = [];
$categories = [];

$args = ['post_type' => 'projects', 'posts_per_page' => -1];
$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        $terms = get_the_terms(get_the_ID(), 'types');
        $term_slug = $terms[0]->slug ?? '';
        $term_name = $terms[0]->name ?? '';

        if ($term_slug && !in_array($term_name, $categories)) {
            $categories[] = $term_name;
        }

        $images = [];
        if (tr_field('project_images')) {
            foreach (tr_field('project_images') as $img) {
                $images[] = wp_get_attachment_url($img['image']);
            }
        }

        $projects[] = [
            'name' => get_the_title(),
            'category' => $term_name,
            'description' => tr_field('description') ?? '',
            'images' => $images,
        ];
    }
    wp_reset_postdata();
}
?>

<script>
  window.projetosData = <?php echo json_encode($projects); ?>;
  window.projetosCategories = <?php echo json_encode($categories); ?>;
</script>

<div id="root"></div>
<script src="<?php echo get_template_directory_uri(); ?>/build/projetos.js"></script>
<?php get_footer(); ?>
