<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: About page
 * 
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-about" role="main">

        <div class="about-content">
            <?php while (have_posts()): the_post(); ?>
            <?php get_template_part('template-parts/content', 'about'); ?>
            <?php endwhile; ?>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 