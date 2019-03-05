<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="single-wrapper">
    <div class="single-content sidebar-container">
        <?php while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>
        <?php the_content(); ?>
        <?php
        if (comments_open() || get_comments_number()): comments_template();
        endif;
        ?>
        <?php endwhile; ?>
    </div>


    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?> 