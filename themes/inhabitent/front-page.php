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

<?php get_sidebar(); ?>
<?php get_footer(); ?> 