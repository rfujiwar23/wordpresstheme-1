<?php get_header(); ?>

<header>
    <div class="container p-0">
        <img src="<?php echo get_template_directory_uri(); ?>/image/img001-tokio.png" alt="TOKIO INKARAMI" class="img-fluid">
    </div>
    <div class="row d-flex justify-content-center my-5">
        <h3 class="text-center">検索結果：<q><?php echo get_search_query(); ?></q></h3>
    </div>
</header>

<div class="search-result container py-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action small">
                <div class="row my-3">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 d-flex align-items-center justify-content-center">
                        <?php

                        if (has_post_thumbnail()) { ?>
                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<? echo get_the_title() ?>">
                        <?php } else { ?>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/image/placeholder.png" alt="<? echo get_the_title() ?>">
                        <?php }

                        ?>

                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-9">
                        <h3 class="fs-5 fw-600"><?php echo get_the_title(); ?></h3>
                        <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                </div>
            </a>
        <?php endwhile;
    else : ?>
        <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>