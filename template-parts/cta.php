
<?php $cta = get_field('cta_content','options'); 
$bg = $cta['image'] ? $cta['image'] : get_theme_file_uri( '/assets/images/banner-1.jpg' );
?>
<section class="cta" style="background: url(<?php echo $bg; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="wow fadeInUp"><?php echo $cta['title']; ?></h2>
                <p class="wow fadeInUp"><?php echo $cta['subtitle']; ?></p>
                <a target="<?php echo $cta['btn']['target']; ?>" href="<?php echo $cta['btn']['url']; ?>" class="btn wow fadeInUp"><?php echo $cta['btn']['title']; ?></a>
            </div>
        </div>
    </div>
</section>