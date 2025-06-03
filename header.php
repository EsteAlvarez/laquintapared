<?php

/**
 * @package teatro-el-eclipse
 * @version 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" />
  <?php wp_head(); ?>
</head>

<body <?php body_class('body-page'); ?>>
  <?php wp_body_open(); ?>

  <div id="content_loader" class="content-loader">
    <div class="loader"></div>
  </div>

  <div class="root-container"><!-- Root container -->

    <header class="header"><!-- Website header -->
      <?php if (is_front_page()) {
        get_template_part('template-parts/layout/header-content/header-layout/header-home');
      } else {
        get_template_part('template-parts/layout/header-content/header-layout/header-pages');
      } ?>
    </header>