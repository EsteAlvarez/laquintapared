<?php

/**
 * Template Name: Inicio
 * @package teatro-el-eclipse
 * @version 1.0.0
 */

get_header(); ?>

<main><!-- Main container for page content -->
    
    <!-- Content loop -->
    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content/content', 'home-page'); ?>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>