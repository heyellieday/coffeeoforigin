<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
  <script src="<?php echo get_template_directory_uri();; ?>/assets/js/vendor/bigSlide.min.js"></script>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();; ?>/assets/css/jquery.skippr.css">
   <script src="<?php echo get_template_directory_uri();; ?>/assets/js/app.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-sanitize.js"></script>
  

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
</head>
