<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="container-section my-5">
        <div class="d-flex gap-4 flex-column">
            <?php the_content(); ?>
            <p class="d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7" />
                </svg>
                <span><?php esc_html_e('Ubicación: ') ?><?php echo esc_html(get_field('ubicacion')); ?></span>
            <p><?php echo wp_kses_post(get_field('informacion_complementaria')); ?></p>
            </p>
        </div>
    </section>

</div><!-- #post-<?php the_ID(); ?> -->