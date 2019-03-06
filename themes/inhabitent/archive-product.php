<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


        <!-- Product terms -->
        <section class="product-info-container">
            <h2>Shop Stuff</h2>
            <?php
            $terms = get_terms(array(
                'taxonomy'   => 'product_type',
                'hide_empty' => 0,
            ));
            if (!empty($terms)):
                ?>
            <div class="product-type-blocks">
                <?php foreach ($terms as $term):
                    ?>
                <div class="product-type-block-wrapper">

                    <p>
                        <a href="<?php echo get_term_link($term); ?>">
                            <?php echo $term->name; ?></a>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </section>


        <div class="content-block-wrapper">
            <?php 
            $args = array(
                'orderby' => 'title',
                'order' => 'ASC',
                'post_type' => 'product',
                'posts_per_page' => 16
            );
            // $prods = have_posts( $args );
            $the_query = new WP_Query($args);

            // ($the_query);
            if ($the_query->have_posts()): ?>
            </header><!-- .page-header -->

            <?php  /* Start the Loop */ ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>


            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <a href="<?php echo get_permalink(); ?>" rel="bookmark">
                        <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium'); ?>
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


                    <?php if ('post' === get_post_type()): ?>
                    <div class="entry-meta ">
                        <?php red_starter_posted_on(); ?> /
                        <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> /
                        <?php red_starter_posted_by(); ?>
                    </div><!-- .entry-meta -->
                    <?php endif; ?>
                </header><!-- .entry-header -->
            </article><!-- #post-## -->


            <?php endwhile;
        wp_reset_postdata();
        ?>



            <?php else: ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>
        </div> <!-- content-block-wrapper-->
    </main><!-- #main -->
</div><!-- #primar y -->

<?php get_footer();  ?> 