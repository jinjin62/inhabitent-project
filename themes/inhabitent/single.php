<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div class="single-wrapper sidebar-container">
    <div class="single-content">
        <?php while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content', 'single'); ?>
        <div class="social-buttons">
            <button type="button" class="black-btn"><i class="fab fa-facebook-f"></i> Like</button>
            <button type="button" class="black-btn"><i class="fab fa-twitter"></i> Tweet</button>
            <button type="button" class="black-btn"><i class="fab fa-pinterest"></i> Pin</button>
        </div>
        <?php
        if (comments_open() || get_comments_number()): comments_template();
        endif;
        ?>
        <?php endwhile; ?>
    </div>


    <?php get_sidebar(); ?>

</div>
<?php get_footer(); ?> 