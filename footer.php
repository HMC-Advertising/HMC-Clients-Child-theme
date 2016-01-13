</div><!-- #content -->
<?php

    $footer_email = get_theme_mod('riba_lite_email', 'contact@site.com');
    $footer_phone = get_theme_mod('riba_lite_phone', '0 332 548 954');
    $footer_copyright = get_theme_mod('riba_lite_footer_copyright', sprintf('&copy; %s', __('Macho Themes 2015. All Rights Reserved', 'riba-lite') ) );
?>

<footer id="footer" class="site-footer container-fluid" role="contentinfo">
    
    <div class="footer-copyright-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <p class="footer-copyright">
                        &copy; 2016 <a href="http://wearehmc.com" target="_blank">HMC Advertising</a>
                       
                        
                    </p>
                </div><!--/.text-center-->
            </div><!--/.col-lg-12-->
        </div><!--/.row-->
    </div><!--/.footer-contact-container-->


</footer>
</div><!-- #page -->
	<a href="#" class="mt-top"><?php _e('Top', 'riba-lite'); ?></a>


<?php wp_footer(); ?>


</body>
</html>