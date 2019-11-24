
<?php 
/*
Template Name: Portfolio
*/
get_header(); ?>
<?php echo get_template_part( 'template-parts/page-header' ); ?>
<?php $portfolio = get_field('portfolio_content', getPageID()); 
    $pbg = $portfolio['bg']['url'] ? $portfolio['bg']['url'] : get_theme_file_uri( 'assets/images/about-p-bg.png' );
?>
<section class="portfolios" style="background: url(<?php echo $pbg; ?>);">
    <div class="container">
        <div class="row wow fadeInUp">

            <div class="col-md-12">
                <div class="project-list">
                    <ul class="list-inline text-center hidden-xs">
                        <?php if (get_language_attributes() == 'lang="en-US"' || get_language_attributes() == 'lang="en"'): ?>
                        <li class="mixitup-control-active" data-filter="all"><?php _e('All', 'cli'); ?></li>
                        <?php else: ?>
                        <li class="mixitup-control-active" data-filter="all"><?php _e('الكل', 'cli'); ?></li>
                        <?php endif; ?>
                        <?php $cates = get_terms( 'portfolio_categories' ); foreach ($cates as $cate) : ?>
                        <li data-filter=".<?php echo $cate->slug ?>"><?php echo $cate->name ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-12 no-padding-custom">
                <div class="mobile-options-filter visible-xs nav-tabs">
                    <select name="" id="work_mobile_filter">
                        <?php if (get_language_attributes() == 'lang="en-US"' || get_language_attributes() == 'lang="en"'): ?>
                        <option value="all"><?php _e('All', 'cli'); ?></option>
                        <?php else: ?>
                        <option value="all"><?php _e('الكل', 'cli'); ?></option>
                        <?php endif; ?>

                        <option value="all"><?php _e('الكل', 'cli'); ?></option>
                        <?php $mcates = get_terms( 'portfolio_categories' ); foreach ($mcates as $cate) : ?>
                        <option value=".<?php echo $cate->slug ?>"><?php echo $cate->name ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>

        <div id="project-list" class="row wow eq-height fadeInUp">
            <?php $args = array(
                'post_type'  => 'portfolio',
                'posts_per_page'    => -1
            ); 
            $loop = new WP_Query($args);

            if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();

                $terms = get_the_terms(get_the_ID(), 'portfolio_categories');
                    $term_slug = '';
                if($terms) {
                    foreach ($terms as $term) {
                        $term_slug .= ' ' . $term->slug;
                    }
                }
            ?>
            <div class="col-md-3 col-sm-4 col-xs-6 col mix <?php echo $term_slug; ?>">
                <div class="project">
                    <div class="project-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="">

                        <div class="hover-content">
                            <a title="<?php the_title(); ?>" class="popup-gallery" href="<?php the_permalink(); ?>"><?php the_field('hover_text'); ?></a>
                        </div>
                    </div>
                    <p><?php the_title(); ?></p>
                </div>
            </div><!-- / project item -->
            <?php endwhile; wp_reset_postdata(); endif; ?>

        </div>
    </div>
</section>
<?php get_footer(); ?>