<?php

/**
 * Template Name: Test Template #1
 */

get_header(); ?>


<div class="jumbotron">
    <?php if (have_rows('banner_image')) : ?>
        <?php while (have_rows('banner_image')) : the_row(); ?>
            <?php if (get_row_layout() == 'page_top_banner') : ?>
                <div class="top_banner container px-0">
                    <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="" class="img-fluid">

                        <div class="logo">
                            <h1><img src="<?php echo get_sub_field('logo'); ?>" alt="<?php echo get_sub_field('page_name'); ?>" class="img-fluid"></h1>
                            <h4><?php echo get_sub_field('page_name'); ?></h4>
                        </div>
                    </div>

                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="container">
    <?php if (have_rows('content')) : ?>
        <?php while (have_rows('content')) : the_row(); ?>
            <?php if (get_row_layout() == 'column_section') :
                $columns = get_sub_field('columns');
            ?>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php foreach ($columns as $column) :
                    ?>
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-img-top">
                                    <img src="<?php echo $column['content_image']; ?>" alt="" class="img-fluid">
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $column['title']; ?></h4>
                                    <p><?php echo $column['content']; ?></p>
                                </div>
                                <div class="card-footer">
                                    <?php if ($column['link']) : ?>
                                        <a href="<?php echo $column['link']['url'] ?>">Check for More</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>


            <?php if (get_row_layout() == 'inner_links') :
                $innerLinks = get_sub_field('inner-link');
            ?>

                <div class="page-links">
                    <h2 class="text-center"><span><?php echo get_sub_field('title') ?></span></h2>
                    <div class="row d-flex justify-content-center">
                        <?php foreach ($innerLinks as $link) :
                        ?>
                            <div class="col-md-4 col-6">
                                <div class="nav-card">
                                    <div class="text">
                                        <h3><?php echo $link['go_to_text']; ?></h3>
                                        <p><?php echo $link['go_to_text_jp']; ?></p>
                                    </div>
                                    <div class="img">
                                        <img src="<?php echo $link['go_to_image']; ?>" alt="" class="img-fluid">
                                        <div class="inner-link">
                                            <a href="<?php echo $link['link']['url']; ?>">もっと見る</a>
                                        </div>
                                        <?php if ($link['ext_link']) : ?>
                                            <div class="ext-link">
                                                <a href="<?php echo $link['ext_link']; ?>"><?php echo $link['link_text']; ?></a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endif; ?>


            <?php if (get_row_layout() == 'textarea_with_image') :
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                $image = get_sub_field('image');
                $picture = $image['sizes']['large'];
                $side = get_sub_field('image_side');
            ?>

                <div class="row my-5">
                    <?php if ($side == 'left') : ?>
                        <div class="col-lg-6"><img src="<?php echo $picture; ?>" alt="<?php echo $title; ?>" class="img-fluid"></div>
                        <div class="col-lg-6">
                            <h4><?php echo $title; ?></h4>
                            <?php echo $content; ?>
                        </div>
                    <?php else : ?>
                        <div class="col-lg-6">
                            <h4><?php echo $title; ?></h4>
                            <?php echo $content; ?>
                        </div>
                        <div class="col-lg-6"><img src="<?php echo $picture; ?>" alt="<?php echo $title; ?>" class="img-fluid"></div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if (get_row_layout() == 'two_column_img') : ?>
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-10 offset-1">
                    <div class="row">
                        <div class="col-6"><img src="<?php echo get_sub_field('left_image'); ?>" alt="banner image" class="img-fluid"></div>
                        <div class="col-6"><img src="<?php echo get_sub_field('right_image'); ?>" alt="banner image" class="img-fluid"></div>
                    </div>
                </div>
            <?php endif; ?>


            <?php if (get_row_layout() == 'free_text_area') : ?>

                <div class="text-area">
                    <div class="title">
                        <h3 class="text-center"><?php echo get_sub_field('title'); ?></h3>
                    </div>
                    <div class="text-body">
                        <p><?php echo get_sub_field('text_area_only') ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (get_row_layout() == 'linking_button_read_more') :
                $linkText = get_sub_field('link_text');
                $linkUrl = get_sub_field('link_url');
                $color = get_sub_field('button_color');
            ?>
                <a href="<?php echo $linkUrl; ?>" style="text-decoration:none;">
                    <div class="link-button <?php echo $color; ?>">
                        <?php echo $linkText; ?>
                    </div>
                </a>

            <?php endif; ?>

            <?php if (get_row_layout() == 'add_youTube_video') : ?>
                <div class="videos-1 col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                    <h2><span><?php echo get_sub_field('sub_header'); ?></span></h2>
                    <div class="embed-responsive video">
                        <iframe class="embed-responsive-item" src="<?php echo get_sub_field('video_link'); ?>"></iframe>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (get_row_layout() == 'brand_and_items') :
                $brandText = get_sub_field('type');
                $description = get_sub_field('description');
                $logo = get_sub_field('logo');
                $items = get_sub_field('items');
            ?>

                <div class="brand_and_items <?php echo $brandText; ?>">
                    <div class="logo">
                        <img src="<?php echo $logo; ?>" alt="<?php echo $brandText; ?>" class="img-fluid">
                    </div>
                    <div class="top-text">
                        <h4><span><em><?php echo $brandText; ?></em> Series</span></h4>
                        <p><?php echo $description; ?></p>
                    </div>


                    <div class="row d-flex justify-content-center">
                        <?php foreach ($items as $item) : ?>
                            <div class="col-sm-4 col-6 inkarami-items">
                                <img src="<?php echo $item['product_image']; ?>" alt="<?php echo $item['name']; ?>" class="img-fluid">
                                <h4><?php echo $item['name']; ?><br><span><?php echo $item['jp_name']; ?></span></h4>
                                <hr>
                                <h5><?php echo $item['size']; ?></h5>
                                <?php if ($item['true_or_false'] = 1) : ?>
                                    <p>900mlサイズ有</p>
                                <?php endif; ?>

                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>




            <?php endif; ?>

        <?php endwhile; ?>

    <?php endif; ?>






</div>




<section class="main-contents my-5">

    <div class="container-fluid">


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
                                <p><?php echo mb_substr(get_the_excerpt(), 0, 45) . '...'; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <div class="read-more text-center my-4">
                        <a class="btn btn-primary" href="<?php bloginfo('url') ?>/news">もっと見る</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    
    


</section>





<?php get_footer(); ?>