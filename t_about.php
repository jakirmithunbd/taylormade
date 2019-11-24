
<?php 
/*
Template Name: About
*/
get_header(); ?>

<?php echo get_template_part( 'template-parts/page-header' ); ?>

<section class="about">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title wow fadeInDown">
                    <p class="s-title"><?php the_field('about_us_title'); ?></p>
                    <p class="hidden-xs"><?php the_field('about_us_subtitle'); ?></p>
                    <p class="visible-xs"> <?php //the_field('about_us_subtitle'); ?></p>
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
<?php $step_bg = get_field('step_bg'); 
    $sbg = $step_bg ? $step_bg : get_theme_file_uri( '/assets/images/banner-1.jpg' );
?>
<section class="work-flow" style="background: url(<?php echo $sbg; ?>);">
    <div class="container">
        <?php $section_title = get_field('section_title'); if($section_title) : ?>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <p><?php echo $section_title['title']; ?></p>
                    <h3><?php echo $section_title['sub_title']; ?></h3>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="steps">
                <?php $counter = 1; $steps = get_field('step_items'); if($steps) : foreach ($steps as $step) : ?>
                <div class="step text-center">
                    <?php if ($step['icon']): ?>
                    <div class="icon">
                        <img src="<?php echo $step['icon']; ?>" class="img-responsive" alt="">
                        <div class="count-number"><?php echo $counter; ?></div>
                    </div>
                    <?php endif; ?>
                    <div class="step-content">
                        <p><strong><?php echo $step['title']; ?></strong></p>
                        <p><?php echo $step['description']; ?></p>
                    </div>
                </div> <!-- /step -->
            <?php $counter++; endforeach; endif; ?>
            </div>
        </div>
    </div>
</section>

<?php echo get_template_part( '/template-parts/cta' ); ?>

<?php get_footer(); ?>