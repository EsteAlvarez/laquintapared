<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */

get_header(); ?>

<main><!-- Main container for page content -->

    <?php if (is_page("cartelera")) { ?>
        <div class="my-5 d-md-flex d-none container">
            <?php teatro_el_eclipse_breadcrumbs(); ?>
        </div>
    <?php } else { ?>
        <div class="my-5 d-md-flex d-none container-section">
            <?php teatro_el_eclipse_breadcrumbs(); ?>
        </div>
    <?php } ?>

    <!-- Content loop -->
    <?php while (have_posts()) : the_post(); ?>

        <?php
        if (is_page("sobre-nosotros")) {
            get_template_part('template-parts/content/content', 'nosotros-page');
        } elseif (is_page("nuestro-teatro")) {
            get_template_part('template-parts/content/content', 'teatro-page');
        } elseif (is_page("cartelera")) {
            get_template_part('template-parts/content/content', 'cartelera-page');
        } else {
            get_template_part('template-parts/content/content', 'page');
        }
        ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>