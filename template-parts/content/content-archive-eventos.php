<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class("col-lg-3 col-md-4 col-6"); ?>>

    <a class="text-decoration-none text-black" href="<?php the_permalink(); ?>">
        <figure class="p-0 m-0">
            <?php the_post_thumbnail('medium', array('class' => 'img-fluid img-cuadrada')); ?>
            <figcaption class="mt-2">
                <h3 class="fs-4 m-0"><?php the_title(); ?></h3>
                <p class="m-0 text-capitalize"><?php echo esc_html(get_field('fecha_del_evento')); ?></p>
            </figcaption>
        </figure>
    </a>

</div><!-- #post-<?php the_ID(); ?> -->