<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header>
        <?php the_title('<h1>', '</h1>'); ?>
    </header>

    <div>
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<nav>',
            'after'  => '</nav>',
            'link_before' => '<span>',
            'link_after' => '</span>',
        ));
        ?>
    </div>

    <?php if (get_edit_post_link()) : ?>
        <footer>
            <?php
            edit_post_link(
                sprintf(
                    __('Editar<span> "%s"</span>', 'teatro-el-eclipse'),
                    get_the_title()
                ),
                '<span>',
                '</span>'
            );
            ?>
        </footer>
    <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->