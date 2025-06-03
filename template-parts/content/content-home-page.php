<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="container margins-sections home-section"><!-- Sección descubre nuestra cartelera -->
        <h2 class="text-center text-capitalize"><?php echo esc_html(get_field('titulo_seccion_descubre_nuestra_cartelera')); ?></h2>
        <p class="col-lg-6 col-md-9 col-10 mx-auto text-center"><?php echo wp_kses_post(get_field('contenido_seccion_descubre_nuestra_cartelera')); ?></p>
        <div class="mt-5 container p-0">
            <div class="row my-4 p-0 m-0">
                <?php include get_template_directory() . '/assets/modulos/loop-descubre-cartelera-home.php'; ?>
            </div>
            <a class="link-sections-home d-flex" href="<?php echo site_url('/cartelera'); ?>"><?php echo esc_html('Ver cartelera completa', 'teatro-el-eclipse') ?></a>
        </div>
    </section>

    <section class="events-section d-flex justify-content-center align-items-center margins-sections" style="background-image: linear-gradient(to right, rgba(0, 0, 0, 1) 0%, rgba(17, 17, 17, 0.7) 70%, rgba(17, 17, 17, 0.4) 100%), url('<?php the_field('background_seccion_eventos'); ?>'); background-size: cover; background-position: center;">
        <!-- Sección eventos -->
        <div class="container home-section p-0 py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <h2 class="text-white text-capitalize"><?php echo esc_html(get_field('titulo_seccion_eventos')); ?></h2>
                    <p class="text-white"><?php echo wp_kses_post(get_field('contenido_seccion_eventos')); ?></p>
                </div>
                <div class="col-lg-6 col-12">
                    <?php include get_template_directory() . '/assets/modulos/eventos/loop-eventos.php'; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="grid-section margins-sections container home-section">
        <div class="text-block">
            <h2 class="text-capitalize"><?php echo esc_html(get_field('titulo_seccion_compania')); ?></h2>
            <p><?php echo wp_kses_post(get_field('contenido_seccion_compania')); ?></p>
            <a class="link-sections-home" href="<?php echo site_url('/sobre-nosotros'); ?>"><?php echo esc_html('Conoce a quienes hacen posible esta historia') ?></a>
        </div>
        <div class="image-block">
            <?php if (get_field('imagen_seccion_compania')): ?>
                <img src="<?php the_field('imagen_seccion_compania'); ?>" />
            <?php endif; ?>
        </div>
        <div class="image-block">
            <?php if (get_field('imagen_seccion_infraestructura')): ?>
                <img src="<?php the_field('imagen_seccion_infraestructura'); ?>" />
            <?php endif; ?>
        </div>
        <div class="text-block">
            <h2 class="text-capitalize"><?php echo esc_html(get_field('titulo_seccion_infraestructura')); ?></h2>
            <p><?php echo wp_kses_post(get_field('contenido_seccion_infraestructura')); ?></p>
            <a class="link-sections-home" href="<?php echo site_url('/nuestro-teatro'); ?>"><?php echo esc_html('Conoce nuestro teatro') ?></a>
        </div>
    </section>

</div><!-- #post-<?php the_ID(); ?> -->