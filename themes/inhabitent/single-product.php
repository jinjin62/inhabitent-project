<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php while (have_posts()): the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>
            </header><!-- .entry-header -->
            <div class="single-product-text">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                <div class="entry-content">
                    <h3 class="product-price">
                        <?php echo CFS()->get('price'); ?>
                    </h3>
                    <!--display price -->
                    <?php the_content(); ?>
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html('Pages:'),
                        'after'  => '</div>',
                    ));
                    ?>

                </div><!-- .entry-content -->

                <footer class="entry-footer">
                    <?php red_starter_entry_footer(); ?>
                </footer><!-- .entry-footer -->
                <div class="social-buttons">
                    <button type="button" class="black-btn"><i class="fab fa-facebook-f"></i> Like</button>
                    <button type="button" class="black-btn"><i class="fab fa-twitter"></i> Tweet</button>
                    <button type="button" class="black-btn"><i class="fab fa-pinterest"></i> Pin</button>
                </div>
        </article><!-- #post-## -->

</div>


<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?> 