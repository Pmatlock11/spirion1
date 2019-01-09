<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<footer class="wrapper" id="wrapper-footer">
    <div class="<?php echo esc_attr($container); ?>">
        <div class="row">
            <div class="col-12 col-sm-3 col-6 xs_none">
                <a href="#" class="footer_logo"><img src="<?php bloginfo('template_url'); ?>/img/footer_logo.png" class="max_width"></a>
                <p>Lorem ipsum dolor sit <br>amet, consectetur <br>adipscing elit. In ut <br>velit lectus.</p>
            </div>
            <div class="col-12 col-sm-2 col-6">
                <div class="col_holder">
                    <strong>List Title</strong>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#">List Item</a></li>
                    </ul>
                </div>
                <div class="col_holder">
                    <strong>List Title</strong>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-2 col-6">
                <div class="col_holder">
                    <strong>List Title</strong>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                    </ul>
                </div>
                <div class="col_holder">
                    <strong>List Title</strong>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-2 col-6">
                <div class="col_holder">
                    <strong>List Title</strong>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                    </ul>
                </div>
                <div class="col_holder">
                    <strong>List Title</strong>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-2 col-6">
                <div class="col_holder">
                    <ul class="list-unstyled socials border_bottom">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col_holder">
                    <ul class="list-unstyled border_bottom">
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                    </ul>
                </div>
                <div class="col_holder">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                        <li><i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#">List Item</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- row end -->
        <div class="row">
            <div class="col-12 col-sm-3 col-6 lg_none">
                <a href="#" class="footer_logo"><img src="<?php bloginfo('template_url'); ?>/img/footer_logo.png" class="max_width"></a>
                <p>Lorem ipsum dolor sit <br>amet, consectetur <br>adipscing elit. In ut <br>velit lectus.</p>
            </div>
            <div class="col-12 text-center rights">
                <p>2018 Spirion, LLC, All rights Reserved. | <a href="#">Legal</a> | <a href="#">Privacy</a></p>
            </div>
        </div>
    </div><!-- container end -->
</footer><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->
<script>
    jQuery('.nav_opener').click(function(e) {
        e.preventDefault();
        jQuery('#nav').slideToggle();

    });
    jQuery('.text_toggler').click(function(e) {
        e.preventDefault();
        jQuery('.toggled_text').slideToggle();
    });

    jQuery('.tabs a').click(function(e) {
        e.preventDefault();

        jQuery('.tabs li').removeClass('active');
        jQuery(this).closest('li').addClass('active');
        jQuery('.tab').removeClass('active');
        var curr_tab = jQuery(this).attr('href');
        jQuery(curr_tab).addClass('active');
    });

    jQuery(document).ready(function() {
        jQuery(".auto_tabs li:first-child").addClass("active");
        setTimeout(autoAddClass, 3000);

        jQuery('').click(function() {

        });
    });

    function autoAddClass() {
        var next = jQuery(".auto_tabs li.active").removeClass("active").next();
        if (next.length)
            jQuery(next).addClass('active');
        else
            jQuery('.auto_tabs li:first-child').addClass('active');
        setTimeout(autoAddClass, 3000);
        jQuery('.tab').removeClass('active');
        var curr_tab = jQuery('.auto_tabs li.active').find('a').attr('href');
        jQuery(curr_tab).addClass('active');
    }
</script>
<?php wp_footer(); ?>
</body>

</html>