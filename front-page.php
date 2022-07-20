<?php

/**
 * Template Name: Front Page
 */

get_header() ?>

<header class="main-header">
    <div class="container-fluid p-0">
        <img src="<?php echo get_template_directory_uri(); ?>/image/img001-tokio.png" alt="" class="img-fluid bg-main">
        <div class="logo-area">
            <h1><img src="<?php echo get_template_directory_uri(); ?>/image/tokio-inkarami-wh.svg" alt="TOKIO INKARAMI"></h1>
            <p>TOKIOインカラミ公式サイト</p>
        </div>
    </div>
</header>

<section class="top-contents my-5">
    <div class="container d-flex justify-content-center">

        <div class="col-lg-6 col-md-6 d-flex justify-content-center my-4">
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

        <div class="col-lg-10 offset-lg-1 col-md-10 offset-lg-1 col-sm-12">
            <div class="content-area">
                <?php the_content(); ?>
            </div>

            <?php if (get_field('youtube_url')) { ?>

                <div class="VideoWrapper">
                    <?php echo $embed_code = wp_oembed_get(get_field('youtube_url')); ?>
                </div>

            <?php } ?>

        </div>
    </div>

</section>

<section class="main-contents my-5">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                <a href="#" class="card text-decoration-none text-dark text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/tokio_bg001.png" alt="TOKIO INKARAMI">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">TOKIO サロンシステム</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                <a href="#" class="card text-decoration-none text-dark text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/tokio_bg002.png" alt="TOKIO INKARAMI">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">TOKIO IE ホームケア</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                <a href="#" class="card text-decoration-none text-dark text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/tokio_bg003.png" alt="TOKIO INKARAMI">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">メカニズム</h3>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6 mb-3">
                <a href="#" class="card text-decoration-none text-dark text-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/tokio-stars.png" alt="TOKIO INKARAMI">
                    <div class="card-body">
                        <h3 class="m-0 fs-6 fw-600">TOKIO STARS</h3>
                    </div>
                </a>
            </div>
        </div>

        <?php
        $args = array(

            'post_type' => 'post',
            "posts_per_page" => 3


        );
        $_posts = new WP_Query($args);
        ?>

        <?php if ($_posts->have_posts()) : ?>
            <div class="my-3">
                <h2 class="text-center my-4">NEWS</h2>
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                <?php while ($_posts->have_posts()) : $_posts->the_post(); ?>
                    <div class="row news">
                        <div class="col-lg-3 col-md-3 col-sm-2 col-3">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-10 col-9">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                            <h4 class="time">投稿：20<?php the_time('y-m-j') ?></h4>
                            <!-- <p><?php the_excerpt(); ?></p> -->
                            <p><?php echo mb_substr( get_the_excerpt(), 0, 45 ) . '...'; ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>

                <div class="read-more text-center my-4">
                <a href="#">もっと見る</a>
                </div>
                </div>
            </div>
        <?php endif; ?>
    </div>


</section>


<?php get_footer() ?>