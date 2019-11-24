<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if(is_front_page()){ echo' Home '; echo' | '; echo bloginfo('name'); } else { wp_title(''); echo' | '; bloginfo('name');  } ?></title>
    <?php if(get_field('favicon', 'options')) : ?>
        <link rel="icon" href="<?php the_field('favicon', 'options'); ?>" sizes="32x32" />
    <?php endif; ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5d12ffe75a6f55001254f3ac&product=inline-share-buttons' async='async'></script> -->
    </head>
    <?php wp_head(); ?>
    <body <?php body_class(); ?>>

    <?php 
    $queried_object = get_queried_object();
    $logo = get_field('logo', 'options');
    $contact = get_field('contacts', 'options');
    $social = get_field('social_media', 'options');
    $header_bg = get_field('header_bg', 'options') ? get_field('header_bg', 'options') : get_theme_file_uri( '/assets/images/header-bg.jpg' ); 
    ?>

    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navigation">

                    <div class="navbar-header">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo $logo; ?>" class="img-responsive" alt="">
                        </a>
                    </div>

                    <div class="language-social-wrapper">
                        <div class="social-media">
                            <a href="#" id="search-icon"><span class="fas fa-search"></span></a>
                            <?php if ($social) : foreach ($social as $item) : ?>
                            <a target="_blank" href="<?php echo $item['url']; ?>"><span class="fab fa-<?php echo $item['icon']['value']; ?>"></span></a>
                            <?php endforeach; endif; ?>
                            <?php echo pet_search_form(); ?>
                        </div>

                        <?php if (function_exists('wp_nav_menu')): ?>
                            <?php wp_nav_menu( 
                                  array(
                                  'menu'               => 'Language Menu',
                                  'theme_location'     => 'menu-3',
                                  'depth'              => 3,
                                  'container'          => 'false',
                                  'menu_class'         => 'list-inline list-unstyle',
                                  'menu_id'            => '',
                                  'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                                  'walker'             => new wp_bootstrap_navwalker()
                                  ) 
                                ); 
                            ?>
                        <?php endif; ?>
                    </div>

                    <div id="sidr" class="collapse navbar-collapse">
                        <span class="closeMenu fa fa-long-arrow-alt-right"></span>
                        <?php if (function_exists('wp_nav_menu')): ?>
                            <?php wp_nav_menu( 
                                  array(
                                  'menu'               => 'Main Menu',
                                  'theme_location'     => 'menu-1',
                                  'depth'              => 3,
                                  'container'          => 'false',
                                  'menu_class'         => 'nav navbar-nav',
                                  'menu_id'            => '',
                                  'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                                  'walker'             => new wp_bootstrap_navwalker()
                                  ) 
                                ); 
                            ?>
                        <?php endif; ?>
                    </div>

                    <a href="#sidr" class="openMenu navbar-toggle collapsed">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/menu.png' ); ?>" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </nav><!-- / navigation  -->
    </header><!-- / Header Area  -->

    