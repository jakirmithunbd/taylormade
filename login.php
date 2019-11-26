
<?php 
/*
Template Name: Schedule
*/
get_header(); ?>

<?php
$bg = get_the_post_thumbnail_url(get_the_ID()) ? get_the_post_thumbnail_url(get_the_ID()) : get_theme_file_uri( '/assets/images/page-banner.jpg' ); 
 
?>
<section class="page-banner" style="background: url(<?php echo $bg; ?>);">
    <div class="container wow fadeInUp">
        <div class="text-center text-uppercase page-title"><?php _e('Schedule', 'tay'); ?></div>
    </div>
</section>

<div id="primary" class="content-area">
    <section class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-details wow fadeInUp">
                        <div class="schedules">
                        	<?php $schedule = get_field('schedule'); if($schedule) : foreach ($schedule as $item) : ?>
                        	<?php if (post_password_required()): ?>
                        		<div class="schedule">
	                        		<div class="date"><?php echo $item['date']; ?> - Schedule</div>
	                        		<a href="<?php echo $item['download']; ?>">VIEW</a>
	                        	</div>
                        	<?php endif; ?>
                        	<?php endforeach; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div><!-- /primary -->

<?php get_footer(); ?>