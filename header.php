<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 **/
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <?php wp_head(); ?>
    <style>
        :root {
            --menu-color : #333;
            --title-logo : #333;
        }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php get_template_part('template-parts/header'); ?>