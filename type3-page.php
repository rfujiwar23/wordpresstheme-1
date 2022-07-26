<?php

/**
 * Template Name: Type 3
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
                </div>



            </div>
            <div class="container">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-6">

                            <?php
                            $link = get_field('salon_link_url');
                            if ($link) : ?>
                                <a style="text-decoration: none;" 
                                href="<?php echo esc_url($link); ?>">
                                    <div class="link-to-page">
                                        <div class="img">
                                            <?php
                                            $image = get_field('salon_link_img');
                                            if (!empty($image)) : ?>
                                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid" />
                                            <?php endif; ?>
                                        </div>
                                        <div class="text">
                                            <h4><?php the_field('salon_link_title'); ?></h4>
                                            <p><?php the_field('salon_link_desc'); ?></p>
                                        </div>
                                    </div>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>

    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>