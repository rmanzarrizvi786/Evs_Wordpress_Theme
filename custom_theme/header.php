<!Doctype html>
<html>
    <head>
        <title>Custom Theme Title</title>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <!-- This function gives the body element different classes and can be added, typically, in the header.php’s HTML body tag. -->
    <nav class="navbar gradient-bg main-custom-nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class = "navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example">
                <ul class="nav navbar-nav navbar-right">
                <?php 
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class' => 'primary-menu',
                    'container' => false,
                    'items_wrap' => '%3$s'
                ));
                ?>
                </ul>
            </div>
        </div><!-- container-fluid -->
    </nav>