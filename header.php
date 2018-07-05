<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package adviso
 */
?>
<!-- Head -->
<?php get_template_part('modules/header/head'); ?>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <!-- Masthead -->
    <?php get_template_part('modules/header/masthead'); ?>

    <!--- Contact Info ----->
    <?php get_template_part('modules/header/contact', 'info'); ?>

    <?php get_template_part('framework/featured-components/featured', 'posts' ); ?>

    <?php get_template_part('framework/featured-components/featured-carousel', 'product' ); ?>

    <?php get_template_part('framework/featured-components/posts', 'cat' ); ?>

    <?php get_template_part('framework/featured-components/featured-product', 'triangles'); ?>

    <div class="mega-container">

        <div id="content" class="site-content container">
