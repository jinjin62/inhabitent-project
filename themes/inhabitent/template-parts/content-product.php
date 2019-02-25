<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>

        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
    </header><!-- .entry-header -->
    <section>

        <div class="entry-content">
            <?php the_content(); ?>
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html('Pages:'),
                'after'  => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->
        <span>
            <?php echo CFS()->get('product_price'); ?>
        </span>
    </section>
    <footer class="entry-footer">
        <?php red_starter_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## --> 