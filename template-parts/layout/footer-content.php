<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<div class="container p-4 text-md-center text-start d-flex flex-column gap-3">
        <h2><a class="logo fs-1" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h2>
        <div>
            <?php if (is_active_sidebar('navegacion')) : ?>
                <?php dynamic_sidebar('navegacion'); ?>
            <?php endif; ?>
        </div>
        <div>
            <?php if (is_active_sidebar('rrss')) : ?>
                <?php dynamic_sidebar('rrss'); ?>
            <?php endif; ?>
        </div>
</div>