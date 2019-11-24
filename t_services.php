
<?php 
/*
Template Name: Services
*/
get_header(); ?>

<?php echo get_template_part( 'template-parts/page-header' ); ?>

<section class="service-list">
    <div class="container">
        <?php $counter = 1; $services = get_field('services'); if($services) : foreach ($services as $service) : 
        $class = $counter % 2 == 0 ? 'reverse' : '';
        ?>
        <div class="row align-center <?php echo $class; ?>">
            <div class="col-md-6 col-sm-12">
                <div class="media wow fadeInUp">
                    <img src="<?php echo $service['image']; ?>" class="img-responsive" alt="">
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="service-content wow fadeInUp">
                    <?php echo $service['content']; ?>
                </div>
            </div>
        </div>
        <?php $counter++; endforeach; endif; ?>

    </div>
</section>

<?php $about = get_field('about'); ?>
<section class="about">
    <div class="container">
        <h1><?php echo $about['title']; ?></h1>
    </div>
    <div class="border">
        <div class="container">
            <div class="border-shape"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-content">
                    <?php echo $about['content']; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>