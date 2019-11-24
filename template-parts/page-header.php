<?php get_header(); ?>
<?php
$bg = get_the_post_thumbnail_url(get_the_ID()) ? get_the_post_thumbnail_url(get_the_ID()) : get_theme_file_uri( '/assets/images/page-banner.jpg' ); 
 
?>
<section class="page-banner" style="background: url(../assets/images/page-banner.jpg);">
    <div class="container wow fadeInUp">
        <div class="text-center text-uppercase page-title"><?php echo get_the_title( get_the_ID() ); ?></div>
    </div>
</section>