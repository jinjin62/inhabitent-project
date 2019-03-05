<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area sidebar-container">
    <main id="main" class="site-main journal-container" role="main">

        <?php if (have_posts()): ?>

        <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header><!-- .page-header -->

        <?php  /* Start the Loop */ ?>
        <?php while (have_posts()): the_post(); ?>

        <?php
        get_template_part('template-parts/content');
        ?>
        <a href="<?php echo get_permalink(); ?>" rel="bookmark" class="journal-readmore">Read More →</a>
        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

        <?php else: ?>

        <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
    <?php get_sidebar(); ?>
</div><!-- #primary -->

<?php get_footer(); ?> 