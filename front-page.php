<?php 
/*
Template Name: Home
*/
get_header(); ?>
    <section class="gallery">
        <div class="container-fluid">
            <div class="masonry-container row">
                <?php $gallery = get_field('gallery'); if($gallery) : foreach ($gallery as $item) : ?>
                <div class="item col-md-4 col-xs-12">
                    <img src="<?php echo $item['url']; ?>" class="img-responsive" alt="">
                </div><!-- / Gallery item -->
            <?php endforeach; endif; ?>
            </div>
        </div>
    </section>

    <section class="solution">
        <div class="container">
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
                        <hr>
                        <?php echo $taylormade_solutions['content']; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="service-home">
        <div class="service-title text-center" style="background: url(../assets/images/s-banner.jpg);">
            <div class="container wow fadeInUp">
               <h2>Services</h2>
            </div>
        </div>

        <div class="service-details">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="service-detail">
                            <div class="media wow fadeInUp">
                                <img src="../assets/images/services-details.jpg" class="img-responsive" alt="">
                            </div>
                            <div class="content wow fadeInUp">
                                <h2>Janitorial Cleaning</h2>
                                <p>We specialize in evaluating and delivering personalized, cost effective janitorial services and solutions for a variety of business types. We are the 24/7, 365-day single source provider for all your janitorial service needs – whether you need a one-time service call or an ongoing maintenance program. </p>
                                <a class="btn" href="#">Learn More <span class="triangle"><img src="../assets/images/arrow.png" class="img-responsive" alt=""></span></a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="clients">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="client-title">Our Clients</h2>
                </div>
            </div>
        </div>

        <div class="border">
            <div class="container">
                <div class="border-shape"></div>
                <p class="wow fadeInUp">We pride ourselves in providing service with the very highest quality. Integrity is at the center of our decisions. Great working relationships with our clients is paramount. Here are some of the businesses where our services are experienced. We bring out your best so you can do the rest.</p>

                <div class="images-wrapper row">
                    <div class="client-image col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
                        <img src="../assets/images/client-1.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="client-image col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
                        <img src="../assets/images/client-2.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="client-image col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
                        <img src="../assets/images/client-3.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="client-image col-md-3 col-sm-3 col-xs-6 wow fadeInUp">
                        <img src="../assets/images/client-4.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="client-image col-md-3 col-sm-3 col-xs-6">
                        <img src="../assets/images/client-5.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="client-image col-md-3 col-sm-3 col-xs-6">
                        <img src="../assets/images/client-6.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="client-image col-md-3 col-sm-3 col-xs-6">
                        <img src="../assets/images/client-7.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="client-image col-md-3 col-sm-3 col-xs-6">
                        <img src="../assets/images/client-8.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- / Clients -->

    <section class="testimonial" style="background: url('../assets/images/testimonial-bg.jpg');">
        <div class="container">
            <div class="testimonial-slider-wrapper">
                <img src="../assets/images/quote.png" class="img-responsive" alt="">
                <div class="testimonial-slider">
                    <div class="slider-item">
                        <div class="testimonial-content wow fadeInUp">
                            <h1>"Improved quality from our previous company!"</h1>
                            <p><span>Mark Anderson</span>Maryland</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="testimonial-content wow fadeInUp">
                            <h1>"Improved quality from our previous company!"</h1>
                            <p><span>Mark Anderson</span>Maryland</p>
                        </div>
                    </div>
                    <div class="slider-item">
                        <div class="testimonial-content wow fadeInUp">
                            <h1>"Improved quality from our previous company!"</h1>
                            <p><span>Mark Anderson</span>Maryland</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>