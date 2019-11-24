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
                        <div class="popup-gallery">
                            <div class="project">
                                <div class="row">
                                    <?php $gallery = get_field('gallery'); if($gallery) : foreach ($gallery as $item) : ?>
                                    <div class="col-md-4 col-sm-6 col-xs-6 col">
                                        <div class="project-img">
                                            <img src="<?php echo $item['url']; ?>" class="img-responsive" alt="">
                                            <a title="<?php the_title(); ?>" class="hover-content popup-gallery" href="<?php echo $item['url']; ?>"><span class="fas fa-plus"></span></a>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php if (have_posts()): while (have_posts()): the_post(); ?>
                            <?php the_field('portfolio_content'); ?>
                        <?php endwhile; endif; ?>

                        <div class="pagination-wrapper">
                            <?php
                                $prev_post = get_previous_post();
                                if($prev_post) {
                                   echo '<a href="' . get_permalink($prev_post->ID) . '" class="prev">< Previous Post </a>';
                                }

                                $next_post = get_next_post();
                                if($next_post) {
                                   echo '<a href="' . get_permalink($next_post->ID) . '" class="next"> Next Post ></a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- /primary -->

<?php get_footer(); ?>