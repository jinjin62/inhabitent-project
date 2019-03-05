<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div id="find-us-wrapper-id" class="find-us-page-wrapper">
    <div id="primary" class="findus-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()): the_post(); ?>

            <?php get_template_part('template-parts/content', 'page'); ?>

            <?php endwhile; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_sidebar(); ?>

</div>
<!--find-us-page-wrapper -->
<?php get_footer(); ?> 