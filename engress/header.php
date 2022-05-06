<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name=“robots” content=“noindex”>
  <meta name="format-detection" content="telephone=no">

  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description') ?>">
  <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/common/icon.jpg' ?>">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>