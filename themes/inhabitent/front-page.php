<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

<?php $product_types = get_terms('product_type', array(
    'hide_empty' => false,
    'orderby' => 'name',
    'order' => 'ASC'
)); ?>

<div class="front-page-image">

</div>

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
            <img src="<?php echo get_template_directory_uri() . '/Images/product-type-icons/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
            <p>
                <?php echo $term->description; ?>
            </p>
            <p>
                <a href="<?php echo get_term_link($term); ?>" class="btn">
                    <?php echo $term->name; ?> Stuff</a>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
</section>

<section class="inhabitent-journal">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );
    $journal = get_posts($args);
    if (!empty($journal)): ?>
    <h2>Inhabitent journal</h2>
    <ul>
        <?php foreach ($journal as $post): setup_postdata($post); ?>
        <li>
            <?php if (has_post_thumbnail()): ?>
            <div class="thumbnail-wrapper">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <?php endif; ?>
            <div class="entry-meta-wrapper">
                <div class="entry-meta">
                    <?php red_starter_posted_on(); ?> /
                    <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> /
                    <?php red_starter_posted_by(); ?>
                </div>
                <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

                <a class="green-btn" href="<?php the_permalink(); ?>">Read Entry</a>
            </div>
        </li>

        <?php endforeach;
    wp_reset_postdata(); ?>
    </ul>
    <?php endif ?>
</section>

<section class=" adventure-wrapper">
    <p class="adventure-title"> Latest Adventures </p>
    <div class="adventure-pannels">
        <div class="canoe-girl">
            <div class="story-info">
                <a href="#" class="canoe-text">Getting back to nature in a canoe</a>
                <a href="#"><span class="read">Read More</span></a>
            </div><!-- story info -->
        </div>
        <!--canoe girl-->
        <div class="adventure-right">
            <div class="beach-bonfire">
                <div class="story-info">
                    <a href="#" class="" beach-text"">A night with friends at the beach</a>
                    <a href="#"><span class="read">Read More</span></a>
                </div><!-- story info -->
            </div>
            <!--beach bonfire-->
            <div class="adventure-bottom">
                <div class="mountain-hikers">
                    <div class="story-info">
                        <a href="#" class="bottom-adv-text">Taking in the view at big mountain</a>
                        <a href="#"><span class="read">Read More</span></a>
                    </div><!-- story info -->
                </div>
                <!--mountain hikers-->
                <div class="night-sky">
                    <div class="story-info">
                        <a href="#" class="bottom-adv-text">Star-gazing at the night sky</a>
                        <a href="#"><span class="read">Read More</span></a>
                    </div>
                    <!--story info-->
                </div>
                <!--night sky-->
            </div>
            <!--adventure-bottom-->
        </div><!-- adventure-right-->
    </div><!-- adventure pannels -->
</section><!-- adventure wrapper -->


<!-- <section>  TEST TEST
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
</section> -->



<?php get_footer(); ?> 