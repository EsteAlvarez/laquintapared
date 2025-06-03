<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<?php get_header(); ?>

<main><!-- Main container for not found -->

    <section class="container-section margins-sections">
        <header>
            <h1>
                <?php _e('¡Vaya! No se pudo encontrar esa página.'); ?>
            </h1>
        </header>

        <div>
            <p>
                <?php _e('Parece que no se encontró nada en esta ubicación. Explora otras secciones secciones o vuelve al inicio.'); ?>
            </p>

            <div class="mt-5">
                <a class="link-ticket" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php _e('Volver al inicio'); ?>">
                    <?php _e('Volver al inicio'); ?>
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>