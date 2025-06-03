<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<article class="container-section margins-sections">
    <header>
        <h1><?php esc_html_e('No se ha encontrado ninguna publicación'); ?></h1>
    </header>

    <div>
        <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <p><?php printf(wp_kses(__('¿Listo para publicar tu primera entrada? <a href="%1$s">Comienza aquí</a>.'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>

        <?php elseif (is_search()) : ?>
            <p><?php esc_html_e('Lo sentimos, pero no se encontraron resultados. Intenta nuevamente con diferentes palabras.'); ?></p>

        <?php elseif (is_category()) : ?>
            <p><?php printf(esc_html__('No hay entradas en la categoría "%s".'), single_cat_title('', false)); ?></p>

        <?php elseif (is_tag()) : ?>
            <p><?php printf(esc_html__('No hay entradas con la etiqueta "%s".'), single_tag_title('', false)); ?></p>

        <?php else : ?>
            <p><?php esc_html_e('Parece que no podemos encontrar lo que estás buscando. Tal vez una búsqueda pueda ayudar.'); ?></p>

        <?php endif; ?>
    </div>
</article>