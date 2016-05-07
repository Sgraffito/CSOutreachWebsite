<?php include 'header-main.php'; ?>

    <!--
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    SECTION: HEADER (with image)
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    -->
    <div id="main-header">
        <div class="container-fluid">
            <div class="intro-text">

                <!-- Sub Title -->
                <div class="intro-lead-in">
                    Welcome to Michigan Technological University's CSOutreach Website
                </div>

                <!-- Head Title -->
                <div class="intro-heading">
                    We're Bringing Computing to the U.P. and Beyond!
                </div>


                <!-- Button -->
                <div>
                    <a class="btn" type="button" href="http://outreach.cs.mtu.edu/index.php/about-us-2/">Learn More About Us</a>
<!--                    <button type="button" class="btn btn-lg" href="http://outreach.cs.mtu.edu/index.php/about-us-2/">Learn More About Us</button>-->
                </div>
            </div>
        </div>
    </div>

    <!--
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    SECTION: ABOUT
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    -->
    <section id="about" class="sections">
        <div class="container">
            <div class="row" id="main-about">
                <div class="col-lg-12">
                    <h1 class="section-heading">About</h1>
                    <p>De lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </section>

    <!--
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    SECTION: PHOTOS
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    -->
    <section id="main-photos" class="sections">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body content-block">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/BreakingDigitalBarriers.jpg"/>
                            <h3>Breaking Digital Barriers</h3>
                            <p>De lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a class="btn btn-primary btn-lg" type="button" href="http://outreach.cs.mtu.edu/index.php/breaking-digital-barriers">Learn More</a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body content-block">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/WorkingOnComputer2014.jpeg"/>
                            <h3>Women in Computer Science</h3>
                            <p>De lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                            <a class="btn btn-primary btn-lg" type="button" href="http://outreach.cs.mtu.edu/index.php/women-in-computer-science/">Learn More</a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body content-block">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/CS4All.jpeg"/>
                            <h3>CS4All</h3>
                            <p>De lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                            <a class="btn btn-primary btn-lg" type="button" href="http://outreach.cs.mtu.edu/index.php/cs4all/">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body content-block">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/CodeJam2015.jpg"/>
                            <h3>Copper Country Coders</h3>
                            <p>De lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                            <a class="btn btn-primary btn-lg" type="button" href="http://outreach.cs.mtu.edu/index.php/copper-country-coders/">Learn More</a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body content-block">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/RioMioSite.png"/>
                            <h3>Citizen Science</h3>
                            <p>Creating apps for collecting environmental data designed and developed by MTU

                                students with scientists. They empower citizens and scientists with mobile tools for

                                solving environmental problems and collaborating with scientists.</p>
                            <a class="btn btn-primary btn-lg" type="button" href="http://outreach.cs.mtu.edu/index.php/citizen-science/">Learn More</a>
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-body content-block">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/WiCS.jpeg"/>
                            <h3>NCWIT</h3>
                            <p>De lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                            <a class="btn btn-primary btn-lg" type="button" href="http://outreach.cs.mtu.edu/index.php/national-center-for-women-information-technology-ncwit/ ">Learn More</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    SECTION: EVENTS
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    -->
    <section id="news" class="sections">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-lg-8">
                    <h1 class="section-heading">News</h1>


                            <?php if ( have_posts() ) : ?>

                                <?php if ( is_home() && ! is_front_page() ) : ?>
                                    <header>
                                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                    </header>
                                <?php endif; ?>

                                <?php /* Start the Loop */ ?>
                                <?php while ( have_posts() ) : the_post(); ?>

                                    <?php

                                    /*
                                     * Include the Post-Format-specific template for the content.
                                     * If you want to override this in a child theme, then include a file
                                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                     */
                                    get_template_part( 'template-parts/content', get_post_format() );
                                    ?>

                                <?php endwhile; ?>

                                <?php the_posts_navigation(); ?>

                            <?php else : ?>

                                <?php get_template_part( 'template-parts/content', 'none' ); ?>

                            <?php endif; ?>



                </div>
                <div class="col-xs-12 col-sm-4 col-lg-4" sidebar">
                    <?php include 'sidebar.php'?>
                </div>
            </div>
        </div>
    </section>



    <!-- JQuery: Required for Bootstrap  -->
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>

<?php include 'footer-main.php'; ?>