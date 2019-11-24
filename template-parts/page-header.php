<?php get_header(); ?>
<?php
$bg = get_field('page_header_background', getPageID()) ? get_field('page_header_background', getPageID()) : get_theme_file_uri( '/assets/images/banner-1.jpg' ); 
 
?>
<!-- begin Banner -->
<section class="default-page-banner page-banner" style="background: url(<?php echo $bg; ?>);">
    <div class="container">
        <div class="banner-content wow fadeInUp">
            <?php if ($title): ?>
            <h1 class="page-title"><?php the_field('page_header_title', getPageID()); ?>
            <?php else : ?>
            <h1 class="page-title"><?php echo get_the_title( get_the_ID() ); ?></h1>
            <?php endif ?>
            <?php the_field('page_header_description', getPageID()); ?>
        </div>
    </div>
</section><!--  /end of Banner -->