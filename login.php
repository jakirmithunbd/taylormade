<?php 
/*
Template Name: Schedule
*/
get_header(); ?>

<?php
$bg = get_the_post_thumbnail_url(get_the_ID()) ? get_the_post_thumbnail_url(get_the_ID()) : get_theme_file_uri( '/assets/images/page-banner.jpg' ); 
 
?>
<?php if (!post_password_required()): ?>
<section class="page-banner" style="background: url(<?php echo $bg; ?>);">
    <div class="container wow fadeInUp">
        <div class="text-center text-uppercase page-title"><?php _e('Bulletin Board', 'tay'); ?></div>
    </div>
</section>
<?php endif; ?>

<div id="primary" class="content-area">
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-details wow fadeInUp">
                        <div class="schedules">
                        	<?php if (have_posts()): while (have_posts()): the_post(); ?>
	                            <?php the_content(); ?>
	                        <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- /primary -->

<?php get_footer(); ?>