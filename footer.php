<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom-themev2
 */

?>

<footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Products Column -->
             
                <div class="col-md-6 col-sm-6 mb-4">
                    <?php dynamic_sidebar('footer_widget-col-one'); ?>
                </div>


                <div class="col-md-6 col-sm-6 mb-4">
                    <?php dynamic_sidebar('footer_widget-col-two'); ?>
                </div>
                </div>

               
                <div>
                <?php dynamic_sidebar('footer_widget-col-three'); ?>
                </div>
                
       

            <!-- Footer Last Banner -->
            <div class="footer-last-banner text-center">
                <p class="mb-0">
                    <a href="#">Cookie Settings</a> | 
                    <a href="#">Privacy Policy</a> | 
                    <a href="#">Terms and Conditions</a> | 
                    <a href="#">Imprint</a> | 
                    <span>© 2025 Randomize Online Store</span>
                </p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
