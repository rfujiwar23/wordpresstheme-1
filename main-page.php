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


            <!-- トップページ　画像付きのメニュー -->
            <?php if (get_row_layout() == 'inner_links') : ?>
                <?php get_template_part('components/category', 'imagemenu') ?>
            <?php endif; ?>


            <!-- ２カラム画像 -->
            <?php if (get_row_layout() == 'two_column_img') : ?>
                <?php get_template_part('components/category', 'twocolimg'); ?>
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
            <?php if (get_row_layout() == 'linking_button_read_more2') : ?>
                <?php get_template_part('components/category', 'readmore2'); ?>
            <?php endif; ?>



            <!-- youTUbe動画 -->
            <?php if (get_row_layout() == 'add_youTube_video') : ?>
                <?php get_template_part('components/category', 'youtube'); ?>
            <?php endif; ?>

            <!-- 商品の紹介 -->
            <?php if (get_row_layout() == 'brand_and_items') : ?>
                <?php get_template_part('components/category', 'products'); ?>
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