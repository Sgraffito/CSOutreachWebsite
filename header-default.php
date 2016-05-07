<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MTU_CS_Outreach_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!--
///////////////////////////////////////////
///////////////////////////////////////////
HEAD
///////////////////////////////////////////
///////////////////////////////////////////
-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
</head>

<!--
///////////////////////////////////////////
///////////////////////////////////////////
BODY - start
///////////////////////////////////////////
///////////////////////////////////////////
-->
<body <?php body_class(); ?>>


<header id="masthead" class="site-header" role="banner">

    <!--
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    NAV BAR
    ///////////////////////////////////////////
    ///////////////////////////////////////////
    -->
    <nav class="navbar navbar-fixed-top navbar-default ">
        <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'cs_outreach_theme' ); ?></a>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                <span class="sr-only"><?php _e('Toggle navigation', 'cs_outreach_theme'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url')?>"><?php bloginfo('name')?></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <ul class="nav navbar-nav">
                <?php if( has_nav_menu( 'primary' ) ) :
                    wp_nav_menu( array(
                            'theme_location'  => 'primary',
                            'container'       => false,
                            //'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
                            'walker'          => new Bootstrap_Nav_Menu(),
                            'fallback_cb'     => null,
                            'items_wrap'      => '%3$s',// skip the containing <ul>
                        )
                    );
                else :
                    wp_list_pages( array(
                            'menu_class'      => 'nav navbar-nav',//  'nav navbar-right'
                            'walker'          => new Bootstrap_Page_Menu(),
                            'title_li'        => null,
                        )
                    );
                endif; ?>
            </ul>
        </div><!-- /.navbar-collapse -->

    </nav><!-- #site-navigation -->
</header><!-- #masthead -->


