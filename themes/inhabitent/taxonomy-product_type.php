<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if (have_posts()): ?>

        <header class="page-header">

            <h1>
                <?php echo str_replace("Product Type: ", "", get_the_archive_title()); ?>
            </h1>
            <?php the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header><!-- .page-header -->
        <div class="content-block-wrapper">
            <?php  /* Start the Loop */ ?>
            <?php while (have_posts()): the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <a href="<?php echo get_permalink(); ?>" rel="bookmark">
                        <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('large'); ?>
                    </a>
                    <?php endif; ?>

                    <div class="product-block-text">
                        <?php the_title(
                            sprintf(
                                '<h2 class="entry-title">',
                                esc_url(get_permalink())
                            ),
                            CFS()->get('product_price'),
                            '</h2>'
                        ); ?>
                    </div>
                </header><!-- .entry-header -->
            </article><!-- #post-## -->
            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>
        </div>
        <!--content-block-wrapper-->
    </main><!-- #main -->
</div><!-- #primary -->
<?php endif; ?>
<?php get_footer(); ?> 