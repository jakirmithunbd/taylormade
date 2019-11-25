<?php 
/*
Template Name: Home
*/
get_header(); ?>
    <section class="gallery">
        <div class="container-fluid">
            <div class="masonry-container row">
                <?php $gallery = get_field('gallery'); if($gallery) : foreach ($gallery as $item) : ?>
                <div class="item col-md-4 col-sm-6 col-xs-12">
                    <img src="<?php echo $item['url']; ?>" class="img-responsive" alt="">
                </div><!-- / Gallery item -->
            <?php endforeach; endif; ?>
            </div>
        </div>
    </section>

    <section class="solution">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <?php $company_designations = get_field('company_designations'); ?>
                    <div class="company-designation">
                        <h4 class="wow fadeInUp"><?php echo $company_designations['title']; ?></h4>
                        <div class="company-content wow fadeInDown">
                            <?php echo $company_designations['content']; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <?php $taylormade_solutions = get_field('taylormade_solutions'); ?>
                    <div class="solution-content wow fadeInUp">
                        <h1><?php echo $taylormade_solutions['title']; ?></h1>
                        <div class="border"><span class="border-shape"></span></div>
                        <?php echo $taylormade_solutions['content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $services_content = get_field('services_content'); ?>
    <div class="service-home">
        <div class="service-title text-center" style="background: url(<?php echo $services_content['bg_image']; ?>);">
            <div class="container wow fadeInUp">
               <h2><?php echo $services_content['top_title']; ?></h2>
            </div>
        </div>

        <div class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-detail">
                            <div class="media wow fadeInUp">
                                <img src="<?php echo $services_content['image']['url']; ?>" class="img-responsive" alt="">
                            </div>
                            <div class="content wow fadeInUp">
                                <h2><?php echo $services_content['title']; ?></h2>
                                <p><?php echo $services_content['content']; ?></p>
                                <a target="<?php echo $services_content['button']['target']; ?>" class="btn" href="<?php echo $services_content['button']['url']; ?>"><?php echo $services_content['button']['title']; ?> <span class="triangle"><img src="<?php echo get_theme_file_uri( '/assets/images/arrow.png' ); ?>" class="img-responsive" alt=""></span></a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $clients_content = get_field('clients_content'); ?>
    <section class="clients">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="client-title"><?php echo $clients_content['title']; ?></h2>
                </div>
            </div>
        </div>

        <div class="border">
            <div class="container">
                <div class="border-shape"></div>
                <p class="wow fadeInUp"><?php echo $clients_content['description']; ?></p>

                <div class="images-wrapper row">
                    <?php $clients = $clients_content['client_logo']; if($clients) : foreach ($clients as $client) : ?>
                    <div class="client-image col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
                        <img src="<?php echo $client['url']; ?>" class="img-responsive" alt="<?php echo $client['title']; ?>">
                    </div>
                    <?php endforeach; endif; ?>

                </div>
            </div>
        </div>
    </section> <!-- / Clients -->

    <section class="testimonial" style="background: url('<?php the_field('testimonial_bg'); ?>');">
        <div class="container">
            <div class="testimonial-slider-wrapper">
                <img src="<?php echo get_theme_file_uri( '/assets/images/quote.png' ); ?>" class="img-responsive" alt="">
                <div class="testimonial-slider">

                    <?php $testimonials = get_field('testimonials'); if($testimonials) : foreach ($testimonials as $item) : ?>
                    <div class="slider-item">
                        <div class="testimonial-content wow fadeInUp">
                            <h1><?php echo $item['quote']; ?></h1>
                            <p><?php echo $item['name']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>