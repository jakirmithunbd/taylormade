<?php get_header(); ?>

<!-- begin Banner -->
<section class="default-page-banner page-banner" style="background: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>);">
    <div class="container">
        <div class="banner-content wow fadeInUp">
            <h1 class="page-title text-center"><?php echo get_the_title( get_the_ID() ); ?></h1>
        </div>
    </div>
</section><!--  /end of Banner -->

<div id="primary" class="content-area">
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-details wow fadeInUp">
                        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                            <?php the_field('service_content'); ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- /primary -->

<?php get_footer(); ?>