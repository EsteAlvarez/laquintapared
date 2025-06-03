<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="container margins-sections">
        <div class="row my-5 p-0 m-0">
            <?php include get_template_directory() . "/assets/modulos/loop-cartelera.php"; ?>
        </div>
    </section>

</div><!-- #post-<?php the_ID(); ?> -->