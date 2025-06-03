<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */

get_header(); ?>

<main><!-- Main container for index -->

  <!-- Content loop -->
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <?php get_template_part('template-parts/content/content', get_post_type()); ?>

    <?php endwhile; ?>

    <!-- Navigation for posts -->
    <?php the_posts_navigation(); ?>

  <?php else : ?>

    <!-- Template in case no content is found -->
    <?php get_template_part('template-parts/content/content', 'none'); ?>

  <?php endif; ?>

</main>

<?php get_footer(); ?>