<!--
///////////////////////////////////////////
///////////////////////////////////////////
FOOTER
///////////////////////////////////////////
///////////////////////////////////////////
-->
<footer class="page-footer">
    <section class="sections">
        <div class="container">
            <div class="row border-between">
                <div class="col-sm-8 col-md-8 col-lg-8 footer-info">

                    <div class="col-sm-12">

                        <div class="row sponsor-info">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3> Our Sponsors </h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>Google CS4HS</h4>
                                    <p>CS4HS provides funding to computer science education experts for the planning and development of CS teacher professional development</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>Google IgniteCS</h4>
                                    <p>A Google initiative that supports college students who want to make a difference in their local communities through computer science mentoring</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <h4>NCWIT AspireIT</h4>
                                    <p>NCWIT AspireIT connects high school and college women with K-12 girls interested in computing</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 logo">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/SponsorLogos/cs4hs-logo.png"/> <br>
                        </div>
                        <div class="col-sm-4 logo">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/SponsorLogos/GoogleIgniteCS.png"/> <br>
                        </div>
                        <div class="col-sm-4 logo">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/SponsorLogos/ncwitAspireitLogo.png"/> <br>
                        </div>
                    </div>
                    
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 footer-info">
                    <h3> Our Location </h3>
                    Michigan Technological University <br>
                    1400 Townsend Dr. <br>
                    Houghton, MI  49931 <br> <br>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/MTULogo.png"/> <br>
                </div>

            </div>
        </div>
    </section>
</footer>


</footer>

<footer id="" class="page-footer-theme" role="contentinfo">
    <div class="">

        <div id="footer-copywrite">
        <span class="copyright">Copyright &copy;
            Nicole Yarroch 2016</span>
        </div>

        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cs_outreach_theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'cs_outreach_theme' ), 'WordPress' ); ?></a>
        <span class="sep"> | </span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'cs_outreach_theme' ), 'cs_outreach_theme', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->

<!--
///////////////////////////////////////////
///////////////////////////////////////////
JAVASCRIPT - at end of body for faster loading
///////////////////////////////////////////
///////////////////////////////////////////
-->


<?php wp_footer(); ?>

</body>
</html>
