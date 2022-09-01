<?php

/**
 * Template Name: Test Template #2
 */

get_header(); ?>


<div class="jumbotron">
    <?php if (have_rows('banner_image')) : ?>
        <?php while (have_rows('banner_image')) : the_row(); ?>
            <!--  -->
            <?php get_template_part('components/top', 'jumbotron'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="main">
    <div class="container">
        <div class="page-title">
            <h2 class="text-center"><span><?php echo get_the_title(); ?></span></h2>
        </div>

        <?php if (have_rows('content')) : ?>

            <?php while (have_rows('content')) : the_row(); ?>

                <?php if (get_row_layout() == 'column_section') : $columns = get_sub_field('columns'); ?>
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

                <?php if (get_row_layout() == 'page_top_banner') : ?>
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="banner image" class="img-fluid">
                    </div>
                <?php endif; ?>

                <!-- commercial video -->
                <?php if (get_row_layout() == 'add_video') : ?>
                    <div class="commercial-video col-md-8 offset-md-2 col-sm-10 offset-md-1">
                        <video id="videoBG" muted playsinline loop controls poster="<?php echo get_sub_field('cover_image') ?>" controlsList="nodownload">
                            <source src="<?php echo get_sub_field('video') ?>" type="video/mp4">
                        </video>
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


                <!-- Free Text Area -->
                <?php if (get_row_layout() == 'free_text_area') : ?>
                    <?php get_template_part('components/category', 'freetext'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'linking_button_read_more') :
                    
                ?>
                    <?php get_template_part('components/category', 'readmore1'); ?>
                    

                <?php endif; ?>

                <?php if (get_row_layout() == 'linking_button_read_more2') :
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


                <!-- 画像付きで別ページ飛ばし -->
                <?php if (get_row_layout() == 'landscape_view_link_image') :?>
                    <?php get_template_part('components/category', 'imagelink'); ?>  
                <?php endif; ?>

                <!-- 動画付きで別ページ飛ばし -->
                <?php if (get_row_layout() == 'landscape_view_link_video') : ?>
                    <?php get_template_part('components/category', 'videolink'); ?>  
                <?php endif; ?>

                <!-- 商品の紹介 -->
                <?php if (get_row_layout() == 'brand_and_items') :?>
                    <?php get_template_part('components/category', 'products'); ?>
                <?php endif; ?>

            <?php endwhile; ?>

        <?php endif; ?>



        <?php if (have_rows('promotion-links')) :?>
            <?php while (have_rows('promotion-links')) : the_row(); ?>
            <div class="promotion-page-links col-lg-10 offset-lg-1">
                <?php if (get_row_layout() == 'promotional-external-link') :?>
                    <?php get_template_part('components/promotion', 'links'); ?>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>    


    </div>
</div>

<?php get_footer(); ?>