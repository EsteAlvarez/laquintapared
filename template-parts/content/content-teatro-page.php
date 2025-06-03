<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="container-section margins-sections"><!-- Sección nuestra historia -->
        <h2 class="text-capitalize"><?php echo esc_html(get_field('titulo_seccion_infraestructura_y_espacios')); ?></h2>
        <p><?php echo wp_kses_post(get_field('contenido_seccion_infraestructura_y_espacios')); ?></p>
    </section>

    <div class="container margins-sections d-flex flex-lg-row flex-column justify-content-center gap-4 mt-4">
        <?php if (get_field('imagen_separador_izquierda')): ?>
            <img class="img-fluid img-teather-direction" src="<?php the_field('imagen_separador_izquierda'); ?>" />
        <?php endif; ?>
        <?php if (get_field('imagen_separador_derecha')): ?>
            <img class="img-fluid img-teather-direction" src="<?php the_field('imagen_separador_derecha'); ?>" />
        <?php endif; ?>
    </div>

    <section class="container-section margins-sections"><!-- Sección nuestra historia -->
        <h2 class="text-capitalize"><?php echo esc_html(get_field('titulo_seccion_caracteristicas_secundarias')); ?></h2>
        <p><?php echo wp_kses_post(get_field('contenido_seccion_caracteristicas_secundarias')); ?></p>
    </section>

</div><!-- #post-<?php the_ID(); ?> -->