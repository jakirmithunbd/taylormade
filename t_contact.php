
<?php 
/*
Template Name: Contact
*/
get_header(); ?>

<?php echo get_template_part( 'template-parts/page-header' ); ?>
<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12 col-xs-12">
                <div class="contact-form">
                    <?php echo do_shortcode( '[gravityform id=1 title=true description=false ajax=true tabindex=49]' ); ?>
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-xs-12">
                <div class="contact-information">
                    <h1><?php _e('Get In Touch', 'tay'); ?></h1>
                    <div class="border-shape"></div>

                    <?php $contacts = get_field('contacts', 'options'); ?>
                    <div class="info-list">
                        <span class="far fa-envelope"></span>
                        <a href="mailto:<?php echo $contacts['email']; ?>"><?php echo $contacts['email']; ?></a>
                    </div>

                    <div class="info-list">
                        <span class="fas fa-phone"></span>
                        <a href="tel:<?php echo $contacts['phone']; ?>"><?php echo $contacts['phone']; ?></a>
                    </div>

                    <div class="info-list">
                        <span class="fas fa-map-marker-alt"></span>
                        <a target="_blank" href="<?php echo $contacts['map_url']; ?>"><?php echo $contacts['map']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>