<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>
<!-- Header Desktop Container -->
<div class="header-desktop-container" <?php if (has_post_thumbnail()) { ?> style="background-image: url(<?php the_post_thumbnail_url(); ?>);" <?php } ?>>

    <!-- Nav Container -->
    <nav class="navigation-desktop-container" aria-label="<?php esc_attr_e('Menú principal'); ?>">
        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'navigation-desktop-container__menu-list',
            'container' => false,
            'walker' => new teatro_el_eclipse_Menu_Walker()
        )); ?>
        <?php get_search_form(); ?>
    </nav>

    <!-- Header Text Content -->
    <div class="text-content-header">
        <h2><a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h2>
        <p class="slogan"><?php echo esc_html(get_field('slogan')); ?></p>
        <p class="secondary-slogan"><?php echo wp_kses_post(get_field('subtitulo')); ?></p>
    </div>
</div>

<!-- Header mobile Container -->
<div class="header-mobile-container" <?php if (has_post_thumbnail()) { ?> style="background-image: url(<?php the_post_thumbnail_url(); ?>);" <?php } ?>>

    <div class="navigation-menu-logo menu-mobile-container">
        <button class="btn border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <i class="bi bi-list fs-2 text-white"></i>
        </button>

        <div class="offcanvas offcanvas-start mobile-menu-teatro bg-black" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header d-flex justify-content-end">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="ps-2">
                    <?php get_search_form(); ?>
                </div>
                <nav class="theme-navigation-mobile" aria-label="<?php esc_attr_e('Menú de navegación móvil'); ?>">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'theme-navigation-mobile__menu-list',
                        'container' => false,
                        'walker' => new teatro_el_eclipse_Menu_Walker()
                    )); ?>
                </nav>
            </div>
        </div>
    </div>

    <div class="text-content-header">
        <h2><a class="logo" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h2>
        <p class="slogan"><?php echo esc_html(get_field('slogan')); ?></p>
        <p class="secondary-slogan"><?php echo wp_kses_post(get_field('subtitulo')); ?></p>
    </div>

</div>