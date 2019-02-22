<?php
/**
 * The template for displaying the footer.
 *
 * @package inhabitent_Theme
 */
?>

<footer class="site-footer">
    <div class="contact-info">
        <h3> contact info </h3>
        <p><i class="fas fa-envelope"></i><a href="<?php echo esc_url('#'); ?>">
                <?php printf(esc_html('info@inhabitent.com')); ?></a></p>
        <p><i class="fas fa-phone"></i><a href="<?php echo esc_url('#'); ?>">
                <?php printf(esc_html('778-456-7891')); ?></a></p>
        <p>
            <span><i class="fab fa-facebook-square"></i></span>
            <span><i class="fab fa-twitter-square"></i></span>
            <span><i class="fab fa-google-plus-square"></i></span>
        </p>
    </div><!-- .contact-info -->
    <div class="business-hours">
        <h3> business hours </h3>
        <p><span class='strong'> Monday-Friday: </span> 9am to 5pm</p>
        <p><span class='strong'> Saturday: </span> 10am to 2pm</p>
        <p><span class='strong'> Sunday: </span> Closed</p>
    </div>
    <div class="logosvg">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" /></a>
    </div>
    <div class="footer-copyright">
        <p>copyright &copy; 2019 inhabitent </p>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html> 