<?php
// $temp = $wp_query;
$args = array(
    'post_type' => 'eventos', //Modificar según nombre de CPT
    'post_status'    => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => 2
);

$eventloop = new WP_Query($args);

if ($eventloop->have_posts()) { ?>

    <?php while ($eventloop->have_posts()) {
        $eventloop->the_post() ?>

        <div class="my-4">
            <div class="p-0 m-0">
                <div class="mt-2">
                    <h3 class="text-white fs-4 m-0"><?php the_title(); ?></h3>
                    <p class="text-white m-0 text-capitalize"><?php echo esc_html(get_field('fecha_del_evento')); ?></p>
                    <a class="text-white" href="<?php the_permalink(); ?>"><?php esc_html_e('Ver más', 'teatro-el-eclipse'); ?></a>
                </div>
            </div>
        </div>


    <?php } ?>

<?php wp_reset_postdata();
} else {
    echo '<p class="text-white">No hay eventos publicados aún</p>';
}
