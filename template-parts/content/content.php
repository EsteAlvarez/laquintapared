<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="container-section margin-sections">
        <?php the_content(); ?>
    </section>

</div><!-- #post-<?php the_ID(); ?> -->