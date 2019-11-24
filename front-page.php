<?php 
/*
Template Name: Home
*/
get_header(); ?>
<div class="slider-wrapper">
    <div class="sliders">
        <?php $sliders = get_field('sliders'); 
        if($sliders) : foreach ($sliders as $get_slider) : 
        $slider = $get_slider['slider'];

        $bg = $slider['bg']['url'] ? $slider['bg']['url'] : get_theme_file_uri( '/assets/images/banner-1.jpg' );
        ?>
        <div class="item" style="background: url(<?php echo $bg; ?>);">
            <div class="container">
                <div class="banner-content">
                    <h1 class="wow fadeInDown"><?php echo $slider['title']; ?></h1>
                    <p class="wow fadeIn"><?php echo $slider['subtitle']; ?></p>
                    <a target="<?php echo $slider['button_link']['target']; ?>" class="btn wow fadeInUp" href="<?php echo $slider['button_link']['url']; ?>"><?php echo $slider['button_link']['title']; ?></a>
                </div>
            </div>
        </div>
       <?php endforeach; endif; ?>
    </div>

    <div class="slick-indicators">
        <a href="#" class="prev"> <span class="fas fa-angle-left"></span> <?php the_field('slider_previous_text'); ?></a>
        <a href="#" class="next"><?php the_field('slider_next_text'); ?> <span class="fas fa-angle-right"></a>
    </div>
</div>


<section class="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title wow fadeInDown">
                    <p class="s-title"><?php the_field('about_us_title'); ?></p>
                    <p><?php the_field('about_us_subtitle'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <div class="about-details-wrapper">
        <img src="<?php echo get_theme_file_uri( '/assets/images/about-bg.jpg' ); ?>" class="img-responsive" alt="">
        <div class="container list-items">
            <div class="row eq-height">
                <?php $about_items = get_field('about_items'); if($about_items) : foreach ($about_items as $about_item) : ?>
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp">
                    <div class="list-item">
                        <img src="<?php echo $about_item['icon']; ?>" class="img-responsive" alt="">
                        <h2><?php echo $about_item['title']; ?></h2>
                    </div>
                </div>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </div>

    <div class="about-video" style="background: url(<?php echo get_theme_file_uri( '/assets/images/about-p-bg.png' ); ?>);">
        <div class="container">
            <div class="row eq-height">
                
                <div class="col-md-5 col-xs-12 wow fadeInUp">
                    <div class="about-video-area">
                        <img src="<?php the_field('video_image'); ?>" class="img-responsive" alt="">

                        <div id="video_embed" class="embed-responsive embed-responsive-16by9 mfp-hide">
                            <iframe class="embed-responsive-item" src="<?php the_field('video_link'); ?>" allowfullscreen></iframe>
                        </div>

                        <a href="#video_embed" class="video_embed"><img src="<?php echo get_theme_file_uri( '/assets/images/play-icon.png' ); ?>" class="img-responsive" alt=""></a>
                    </div>
                </div>

                <div class="col-md-7 col-sm-12 wow fadeInDown">
                    <div class="about-content">
                        <?php the_field('video_content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / About -->

<?php $services = get_field('services_content'); 
    $sbg = $services['bg']['url'] ? $services['bg']['url'] : get_theme_file_uri( 'assets/images/service-sce-bg.jpg' );
?>
<section class="servies" style="background: url(<?php echo $sbg;  ?>);">
    <div class="container">
        <div class="service-section-title-wrapper">
            <div class="row wow fadeInUp justify-content-center">
                <div class="col-md-4 text-right">
                    <div class="border-section-title">
                        <h3><?php echo $services['title'] ?></h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-section-title">
                       <h4><?php echo $services['sub_title'] ?></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row wow fadeInUp eq-height">
            <?php $args = array(
                'post_type'  => 'services',
                'posts_per_page'    => 6
            ); 
            $loop = new WP_Query($args);

            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="service">
                    <?php $icon = get_field('service_icon', get_the_ID()); ?>
                    <div class="icon">
                        <img src="<?php echo $icon; ?>" class="img-responsive" alt="">
                    </div>

                    <a href="<?php the_permalink(); ?>" class="service-title"><?php the_title(); ?></a>

                    <div class="service-box">
                        <a href="<?php the_permalink(); ?>" class="service-title"><?php the_title(); ?></a>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            </div> <!-- item -->
            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>

        <div class="row wow fadeInUp">
            <div class="col-md-12 text-center">
                <a target="<?php echo $services['button']['target']; ?>" class="btn" href="<?php echo $services['button']['url']; ?>"><?php echo $services['button']['title']; ?></a>
            </div>
        </div>
    </div>
</section> <!-- / services -->


<?php $portfolio = get_field('portfolio_content', getPageID()); 
    $pbg = $portfolio['bg']['url'] ? $portfolio['bg']['url'] : get_theme_file_uri( 'assets/images/about-p-bg.png' );
?>
<section class="portfolios" style="background: url(<?php echo $pbg; ?>);">
    <div class="container">
        <div class="row wow fadeInUp">
            <div class="col-md-12 text-center">
                <div class="border-section-title">
                    <h3><?php echo $portfolio['title']; ?></h3>
                </div>
            </div>

            <div class="col-md-12">
                <div class="project-list">
                    <ul class="list-inline text-center hidden-xs">
                        <?php if (get_language_attributes() == 'lang="en-US"' || get_language_attributes() == 'lang="en"'): ?>
                        <li class="mixitup-control-active" data-filter="all"><?php _e('All', 'cli'); ?></li>
                        <?php else: ?>
                        <li class="mixitup-control-active" data-filter="all"><?php _e('الكل', 'cli'); ?></li>
                        <?php endif; ?>
                        <?php $cates = get_terms( 'portfolio_categories' ); foreach ($cates as $cate) : ?>
                        <li data-filter=".<?php echo $cate->slug ?>"><?php echo $cate->name ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 no-padding-custom">
                <div class="mobile-options-filter visible-xs nav-tabs">
                     <select name="" id="work_mobile_filter">
                        
                        <?php if (get_language_attributes() == 'lang="en-US"' || get_language_attributes() == 'lang="en"'): ?>
                        <option value="all"><?php _e('All', 'cli'); ?></option>
                        <?php else: ?>
                        <option value="all"><?php _e('الكل', 'cli'); ?></option>
                        <?php endif; ?>

                        <option value="all"><?php _e('الكل', 'cli'); ?></option>
                        <?php $mcates = get_terms( 'portfolio_categories' ); foreach ($mcates as $cate) : ?>
                        <option value=".<?php echo $cate->slug ?>"><?php echo $cate->name ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <div id="project-list" class="row wow eq-height fadeInUp">
            <?php $args = array(
                'post_type'  => 'portfolio',
                'posts_per_page'    => 12
            ); 
            $loop = new WP_Query($args);

            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();

                $terms = get_the_terms(get_the_ID(), 'portfolio_categories');
                    $term_slug = '';
                if($terms) {
                    foreach ($terms as $term) {
                        $term_slug .= ' ' . $term->slug;
                    }
                }
            ?>
            <div class="col-md-3 col-sm-4 col-xs-6 col mix <?php echo $term_slug; ?>">
                <div class="project">
                    <div class="project-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="">

                        <div class="hover-content">
                            <a title="<?php the_title(); ?>" class="popup-gallery" href="<?php the_permalink(); ?>"><?php the_field('hover_text'); ?></a>
                        </div>
                    </div>
                    <p><?php the_title(); ?></p>
                </div>
            </div><!-- / project item -->
            <?php endwhile; wp_reset_postdata(); endif; ?>

        </div>

        <div class="row wow fadeInUp">
            <div class="col-md-12 text-center">
                <a target="<?php echo $portfolio['button']['target']; ?>" class="btn" href="<?php echo $portfolio['button']['url']; ?>"><?php echo $portfolio['button']['title']; ?></a>
            </div>
        </div>
    </div>
</section>

<?php $gcbg = get_field('contact_bg'); 
    $cbg = $gcbg ? $gcbg : get_theme_file_uri( '/assets/images/contact-bg.jpg' );
?>
<section class="contact-area" style="background: url(<?php echo $cbg; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="counter-items">
                    <?php $counters = get_field('counters'); if($counters) : foreach ($counters as $counter) : ?>
                    <div class="item wow fadeInUp">
                        <img src="<?php echo get_theme_file_uri( '/assets/images/circle.png' ); ?>" alt="">
                        <div class="conuter-num">
                            <span class="counter"><?php echo $counter['number']; ?></span>
                            <p><?php echo $counter['type']; ?></p>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="contact-form  wow fadeInUp">
                    <p><?php the_field('contact_description'); ?></p>

                    <?php $form = get_field('form_shortcode'); echo do_shortcode( $form ); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>