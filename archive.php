<?php
get_header(); ?>

<main class="container-section margins-sections">
    <?php if (have_posts()) : ?>

        <div class="my-5 d-md-flex d-none">
            <?php teatro_el_eclipse_breadcrumbs(); ?>
        </div>

        <?php if (get_post_type() === 'eventos') : ?>
            <section class="container my-5">
                <div class="row">
                <?php endif; ?>

                <?php
                while (have_posts()) : the_post();

                    if (get_post_type() === 'eventos') {
                        get_template_part('template-parts/content/content-archive-eventos', get_post_type());
                    } else {
                        get_template_part('template-parts/content/content-archive', get_post_type());
                    }

                endwhile;
                ?>

                <?php if (get_post_type() === 'eventos') : ?>
                </div>
            </section>
        <?php endif; ?>

        <div class="container my-4">
            <?php the_posts_navigation(); ?>
        </div>

    <?php else : ?>
        <?php get_template_part('template-parts/content/content', 'none'); ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>