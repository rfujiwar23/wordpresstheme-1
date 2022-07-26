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
            
        </header>
        <div class="container main-area d-flex justify-content-center">

                <div class="col-lg-10 col-md-10">
                    <h2><span><?php echo get_the_title(); ?></span></h2>

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


                   <div class="main-contents col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                   <p><?php echo the_content(); ?></p>
                   </div>

                    


                    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <div class="row">
                        <div class="col-6">
                            <?php

                            $image = get_field('add_image');

                            if (!empty($image)) : ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid"/>

                            <?php endif; ?>
                        </div>
                        <div class="col-6">
                            <?php

                            $image = get_field('add_image2');

                            if (!empty($image)) : ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />

                            <?php endif; ?>
                        </div>
                    </div>
                    </div>









                </div>

            </div>

    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>