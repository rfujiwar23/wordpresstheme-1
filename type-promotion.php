<?php

/**
 * Template Name: Promotion Page
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header class="custom-page-header pt-5 pt-3">
            <div class="container d-flex justify-content-center">
                <div class="col-lg-6 col-md-8">

                    <?php

                    if (has_post_thumbnail()) { ?>
                        <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<? echo get_the_title() ?>">
                    <?php } else { ?>
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/image/placeholder.png" alt="<? echo get_the_title() ?>">
                    <?php }

                    ?>
                </div>
            </div>
            <div class="container d-flex justify-content-center">

                <div class="col-lg-10 col-md-10">
                    <h1><?php echo get_the_title(); ?></h1>


                    <p><?php echo the_content(); ?></p>

                    <?php

                    $link_data = get_field('upload_video');

                    if (!empty($link_data)) {
                        $link = $link_data['url'];

                    ?>

                        <div class="promotion-video">
                            <video controls muted autoplay class="tm-mb-40">
                                <source src="<?php echo $link; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                    <?php } ?>

                   

                    

                </div>

            </div>
        </header>

    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>