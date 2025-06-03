<?php
$args = array(
    'post_type' => 'post',
    'category_name' => 'destacados',
    'posts_per_page' => 3
);

$loop = new WP_Query($args);
if ($loop->have_posts()) {
    while ($loop->have_posts()) {
        $loop->the_post();

        //Manejo de la fecha
        $datestring = get_field('fecha_de_presentacion');
        $dates = explode(" ", $datestring);
        //print_r($dates);
        $month = $dates[0];
        $day = $dates[1];

        $excerpt = get_the_excerpt();
        $excerpt_limite = wp_trim_words($excerpt, 15, '...');
?>

        <div class="col-md-4 col-12 p-md-4 p-0 mb-5">
            <div class="image-post-container" <?php if (has_post_thumbnail()) { ?> style="background-image: url(<?php the_post_thumbnail_url(); ?>);" <?php } ?>>
                <div class="d-flex flex-column justify-content-center align-items-center dates-container">
                    <p class="post-date post-day text-white m-0"><?php echo $day; ?></p>
                    <p class="post-date fs-3 text-white m-0"><?php echo $month; ?></p>
                </div>
            </div>
            <div class="mt-3">
                <h3 class="m-0"><?php the_title(); ?></h3>
                <p class="m-0 mb-2"><?php echo $excerpt_limite; ?></p>
                <a class="link-sections-home" href="<?php the_permalink(); ?>"><?php echo esc_html_e('Ver más información', 'teatro-el-eclipse'); ?></a>
            </div>
        </div>

<?php }
    wp_reset_postdata();
} else {
    echo '<p>No hay entradas destacadas.</p>';
}
?>