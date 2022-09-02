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

                
                <?php if (get_row_layout() == 'page_top_banner') : ?>
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                        <img src="<?php echo get_sub_field('image'); ?>" alt="banner image" class="img-fluid">
                    </div>
                <?php endif; ?>

                <!-- commercial video -->
                <?php if (get_row_layout() == 'add_video') : ?>
                    <?php get_template_part('components/category', 'addvideo') ?>
                <?php endif; ?>

                <!-- トップページ　画像付きのメニュー -->
                <?php if (get_row_layout() == 'inner_links') :?>
                    <?php get_template_part('components/category', 'imagemenu') ?>
                <?php endif; ?>

                <!-- ２コラム画像 -->
                <?php if (get_row_layout() == 'two_column_img') : ?>
                    <?php get_template_part('components/category', 'twocolumn'); ?>
                <?php endif; ?>


                <!-- Free Text Area -->
                <?php if (get_row_layout() == 'free_text_area') : ?>
                    <?php get_template_part('components/category', 'freetext'); ?>
                <?php endif; ?>

                <!-- もっと見る（外部リンク） -->
                <?php if (get_row_layout() == 'linking_button_read_more') : ?>
                    <?php get_template_part('components/category', 'readmore1'); ?>
                <?php endif; ?>

                 <!-- もっと見る（内部リンク） -->
                <?php if (get_row_layout() == 'linking_button_read_more2') :?>
                    <?php get_template_part('components/category', 'readmore2'); ?>
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