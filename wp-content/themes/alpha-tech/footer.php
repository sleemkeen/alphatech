<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alpha_business
 */

?>

	

	  <footer class="site-footer site-footer--inverse inverse-text">
            <div class="site-footer__section site-footer__section--seperated">
                <div class="background-img gradient-5"></div>
                <div class="container">
                    <div class="site-footer__section-inner">
                        <div class="subscribe-form subscribe-form--horizontal text-center max-width-sm">
                            <p class="typescale-1">Join our <b class="text-white">868,537</b> subscribers and get
                                access to the latest News, Updates, product announcements and much more!</p><br>
                            <div class="subscribe-form__fields">
                                <p><input type="email" name="EMAIL" placeholder="Your email address" required="">
                                    <input type="submit" value="Subscribe" class="btn btn-primary"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer__section site-footer__section--seperated site-footer__section--bordered">
                <div class="container">
                    <nav class="footer-menu footer-menu--bold">
                        <ul id="menu-footer-menu" class="navigation navigation--footer navigation--center">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">About out Ads</a></li>
                            <li><a href="#">Code of Conduct</a></li>
                            <li><a href="#">Terms of Service</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="site-footer__section">
                <div class="container">
                    <ul class="social-list social-list--lg list-center">
                        <li><a href="#">
                                <img class="img-footer" src="<?php echo get_template_directory_uri(); ?>/img/logo/tnoof_white.png" />
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="site-footer__section">
                <div class="container">
                    <div class="text-center">Alpha Tech &copy; 2019. Made with &#9749; by <a href="#"
                            target="_blank">Alpha
                            and Jam</a></div>
                </div>
            </div>
        </footer><!-- Sticky header -->
</div><!-- #content -->

<?php wp_footer(); ?>

</body>
</html>
