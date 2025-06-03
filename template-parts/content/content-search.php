<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("container-section margins-sections"); ?>>

    <header>
        <?php the_title('<h2 class="text-capitalize"><a class="search-post-title" href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>'); ?>
    </header>

    <div class="mb-5">
        <?php the_excerpt(); ?>
        <a class="search-post-link" href="<?php the_permalink(); ?>"><?php esc_html_e('Leer más'); ?></a>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->