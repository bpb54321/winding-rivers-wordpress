<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="kNpZnV6Hy9fATPbqZi_wgJIVnA9nE1HwrhFvUkSHObw" />
        
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">

        <title>
            <?php wp_title('|', true, 'right'); ?>
            <?php bloginfo( 'name' ); ?>

        </title> 

        <?php wp_head(); ?>

        <!-- Google Analytics -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })

          (window,document,'script','//www.google-analytics.com/analytics.js','ga'); //Regular version
          //(window,document,'script','//www.google-analytics.com/analytics_debug.js','ga');  //Debug version

          ga('create', 'UA-69225955-1', 'auto');
          ga('send', 'pageview');

        </script>
        <!-- End Google Analytics -->

    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation" >
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" 
                        data-target="#menu-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">WINDING RIVERS</a>-->
                <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
            </div>
            <div class="collapse navbar-collapse" id="menu-navbar-collapse">

                <?php 
                    $args = array(
                        'menu'          =>  'header_menu',
                        'menu_class'    =>  'nav navbar-nav',
                        'container'     =>  'false'
                    );

                    wp_nav_menu( $args );

                ?>
                
                <form class="navbar-form navbar-right" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="PEXH3B2NKBGX6">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </nav>