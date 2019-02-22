<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

<?php $product_posts = inhabitent_get_latest_posts(); ?>
<?php foreach ($product_posts as $post): setup_postdata($post); ?>
<?php get_template_part('template-parts/content');  ?>
<a href="<?php the_permalink(); ?>">Read Entry</a>
<?php endforeach;
wp_reset_postdata(); ?>
<section>
    <?php $product_types = get_terms('product_type'); ?>
    <?php foreach ($product_types as $term): setup_postdata($term); ?>
    <div>
        <img src=<?php echo get_template_directory_uri() . '/images/product-type-icon/product-type-icons/' . $term->slug . '.svg' ?>>
        <p>
            <?php echo $term->description ?>
        </p>
        <a href=<?php echo get_term_link($term) ?>>
            <?php echo $term->name ?> stuff</a>
    </div>
    <?php endforeach;
   wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?> 