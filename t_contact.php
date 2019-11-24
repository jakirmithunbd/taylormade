
<?php 
/*
Template Name: Contact
*/
get_header(); ?>

<?php echo get_template_part( 'template-parts/page-header' ); ?>

<?php $cbg = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_theme_file_uri( '/assets/images/contact-bg.jpg' );
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

                    <?php echo do_shortcode( '[gravityform id=1 title=false description=false ajax=true tabindex=49]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>