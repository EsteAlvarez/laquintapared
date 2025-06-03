<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="container-section margins-sections"><!-- Sección nuestra historia -->
        <h2 class="text-capitalize"><?php echo esc_html(get_field('titulo_seccion_nuestra_historia')); ?></h2>
        <p><?php echo wp_kses_post(get_field('contenido_seccion_nuestra_historia')); ?></p>
    </section>

    <div class="container text-center margins-sections"><!-- Banner separador -->
        <?php if (get_field('imagen_banner_separador')): ?>
            <img class="banner-img-about-us" src="<?php the_field('imagen_banner_separador'); ?>" />
        <?php endif; ?>
    </div>

    <section class="container-section margins-sections d-flex flex-md-row flex-column align-items-center gap-4"><!-- Extracto del fundador -->
        <div>
            <?php if (get_field('foto_de_perfil_fundador')): ?>
                <img class="rounded-circle" src="<?php the_field('foto_de_perfil_fundador'); ?>" />
            <?php endif; ?>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179m10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621c.537-.278 1.24-.375 1.929-.311c1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5a3.87 3.87 0 0 1-2.748-1.179" />
            </svg>
            <p class="fst-italic"><?php echo wp_kses_post(get_field('resena_del_fundador')); ?></p>
            <span class="fst-italic"><?php echo wp_kses_post(get_field('nombre_del_fundador')); ?></span>
        </div>
    </section>

    <section class="container-section margins-sections"><!-- Sección Equipo y Dirección -->
        <h2 class="text-capitalize"><?php echo esc_html(get_field('titulo_seccion_equipo_y_direccion')); ?></h2>
        <p><?php echo wp_kses_post(get_field('contenido_seccion_equipo_y_direccion')); ?></p>
    </section>

    <div class="container d-flex flex-lg-row flex-column justify-content-center gap-4 margins-sections">
        <?php if (get_field('imagen_izquierda_equipo_y_direccion')): ?>
            <img class="img-fluid img-team-direction" src="<?php the_field('imagen_izquierda_equipo_y_direccion'); ?>" />
        <?php endif; ?>
        <?php if (get_field('imagen_derecha_equipo_y_direccion')): ?>
            <img class="img-fluid img-team-direction" src="<?php the_field('imagen_derecha_equipo_y_direccion'); ?>" />
        <?php endif; ?>
    </div>


</div><!-- #post-<?php the_ID(); ?> -->