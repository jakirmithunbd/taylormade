
<?php 
/*
Template Name: Services
*/
get_header(); ?>

<?php echo get_template_part( 'template-parts/page-header' ); ?>

<?php  
    $sbg = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_theme_file_uri( 'assets/images/service-sce-bg.jpg' );
?>
<section class="servies" style="background: url(<?php echo $sbg;  ?>);">
    <div class="container">

        <div class="row wow fadeInUp eq-height">
            <?php $args = array(
                'post_type'  => 'services',
                'posts_per_page'    => -1
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
    </div>
</section> <!-- / services -->

<section class="testimonials">
    <div class="container">
        <?php $s_stitle = get_field('section_title'); if($s_stitle) : ?>
        <div class="row justify-content-center wow fadeInUp">
            <div class="col-md-8">
                <div class="section-title text-center">
                    <p><?php echo $s_stitle['title']; ?></p>
                    <h3><?php echo $s_stitle['sub_title']; ?></h3>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-slider no-rtl">
                    <?php $ssliders = get_field('sliders'); if($ssliders) : foreach ($ssliders as $sslider) : ?>
                    <div class="slick-slider wow fadeInUp">
                        <div class="client-img">
                            <img src="<?php echo $sslider['image']; ?>" class="img-responsive" alt="">
                        </div>

                        <div class="content">
                            <h3><?php echo $sslider['name']; ?></h3>
                            <h4><?php echo $sslider['title']; ?></h4>
                            <p><?php echo $sslider['message']; ?></p>
                        </div>
                    </div> <!-- /slider item -->
                    <?php endforeach; endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php echo get_template_part( '/template-parts/cta' ); ?>

<?php get_footer(); ?>