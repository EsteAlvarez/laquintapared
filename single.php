<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */

get_header(); ?>

<main><!-- Main container for single post -->

    <div class="my-5 d-md-flex d-none container-section">
        <?php teatro_el_eclipse_breadcrumbs(); ?>
    </div>

    <!-- Content loop -->
    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();

            if (get_post_type() === 'eventos') {
                get_template_part('template-parts/content/content-single-eventos', 'eventos');
            } else {
                get_template_part('template-parts/content/content-single', get_post_type());
            }

        endwhile;

    else :

        get_template_part('template-parts/content/content', 'none');

    endif;
    ?>


</main>

<?php get_footer(); ?>