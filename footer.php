
<?php if(! is_404() && !is_search()) : $cus = get_field('our_customer', 'options'); ?>
<section class="customer" style="background: url(../assets/images/about-p-bg.png);">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-md-12 text-center">
                <div class="border-section-title">
                    <h2><?php echo $cus['title']; ?></h2>
                </div>
            </div>
        </div>
        <div class="row brands wow fadeInUp">
            <?php if($cus['brands']) : foreach ($cus['brands'] as $brand) : ?>
            <div class="col-sm-2 col-xs-4">
                <img src="<?php echo $brand['brand'] ?>" class="img-responsive" alt="">
            </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</section> <!-- / customers -->
<?php endif; ?>

    <?php 
    $social = get_field('social_media', 'options'); 
    $contact = get_field('contacts', 'options'); 
    $leave_phone = get_field('leave_phone', 'options'); 
    ?>
    <footer class="footer">
        <div class="footer-top" style="background: url(<?php echo get_theme_file_uri( '/assets/images/service-sce-bg.jpg' ); ?>);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-logo-area no-rtl">
                            <h2><?php echo $leave_phone['title']; ?></h2>
                            <h4><?php echo $leave_phone['sub_title']; ?></h4>

                            <?php echo do_shortcode( '[gravityform id=2 title=false description=false ajax=true tabindex=49]' ); ?>

                            <a href="<?php echo site_url(); ?>" class="footer-logo">
                                <img src="<?php the_field('footer_logo', 'options'); ?>" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <?php $cont = get_field('footer_content', 'options'); ?>
                        <div class="footer-right-area text-center">
                            <a target="<?php echo $cont['button']['target']; ?>" href="<?php echo $cont['button']['url']; ?>" class="btn"><?php echo $cont['button']['title']; ?></a>

                            <h4><?php echo $cont['description']; ?></h4>

                            <div class="footer-menu">

                                <?php if (function_exists('wp_nav_menu')): ?>
                                    <?php wp_nav_menu( 
                                          array(
                                          'menu'               => 'Footer Menu',
                                          'theme_location'     => 'menu-2',
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

                            <div class="contact-info">
                                <ul class="list-unstyle">
                                    <li>
                                        <div class="icon">
                                            <span class="fas fa-map-marker-alt"></span>
                                        </div>
                                        <a href="<?php echo $contact['location_link']; ?>"><?php echo $contact['location']; ?></a>
                                        
                                    </li>
                                    <li>
                                        
                                        <div class="icon">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                        <a href="tel:<?php echo $contact['phone']; ?>"><?php echo $contact['phone']; ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row align-center no-rtl">
                    <div class="col-md-8 text-right">
                        <p><?php the_field('copy_right', 'options'); ?></p>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-bottom-right">
                            
                        <div class="social-media">
                            <?php if ($social) : foreach ($social as $item) : ?>
                            <a target="_blank" href="<?php echo $item['url']; ?>"><span class="fab fa-<?php echo $item['icon']['value']; ?>"></span></a>
                            <?php endforeach; endif; ?>
                        </div>
                        <?php if (function_exists('wp_nav_menu')): ?>
                            <?php wp_nav_menu( 
                                  array(
                                  'menu'               => 'Language Menu',
                                  'theme_location'     => 'menu-3',
                                  'depth'              => 3,
                                  'container'          => 'false',
                                  'menu_class'         => 'list-inline list-unstyle mobile-lauguage-swister hidden',
                                  'menu_id'            => '',
                                  'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
                                  'walker'             => new wp_bootstrap_navwalker()
                                  ) 
                                ); 
                            ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <?php wp_footer(); ?>
    </body>
</html>