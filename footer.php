    <footer class="footer">
        <div class="footer-wrapper">
            <div class="container-fluid">
                <div class="row align-center">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <a href="<?php echo site_url(); ?>">
                                <img src="<?php the_field('footer_logo', 'options'); ?>" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <?php $contacts = get_field('contacts', 'options'); ?>
                        <div class="contact-info">
                            <div class="info-item">
                                <span class="fas fa-phone"></span>
                                <a href="tel:<?php echo $contacts['phone']; ?>"><?php echo $contacts['phone']; ?></a>
                            </div>
                            <div class="info-item">
                                <span class="fas fa-map-marker-alt"></span>
                                <a target="_blank" href="<?php echo $contacts['map_url']; ?>"><?php echo $contacts['map']; ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="copy-right text-right">
                            <p><?php the_field('copy_right', 'options'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <?php wp_footer(); ?>
    </body>
</html>