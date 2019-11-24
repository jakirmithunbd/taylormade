
<?php 
/*
Template Name: Clients
*/
get_header(); ?>

<?php echo get_template_part( 'template-parts/page-header' ); ?>

<?php $cbg = get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : get_theme_file_uri( '/assets/images/contact-bg.jpg' );
?>
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

<?php get_footer(); ?>