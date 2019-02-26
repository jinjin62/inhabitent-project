<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="image-wrapper">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>
    </div>
    <!-- .entry-header -->
    <?php the_title('<p class="entry-title">', '</p>'); ?>

    <!-- <div class="entry-content">
            <?php the_content(); ?>
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html('Pages:'),
                'after'  => '</div>',
            ));
            ?>
        </div> -->
    <span>
        <?php echo CFS()->get('product_price'); ?>
    </span>
    <footer class="entry-footer">
        <?php red_starter_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## --> 