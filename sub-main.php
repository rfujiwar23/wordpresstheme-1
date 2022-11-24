<?php

/**
 * Template Name: 下層ページ
 */

get_header(); ?>

<?php if (have_rows('sub-page')) : ?>
    <?php while (have_rows('sub-page')) : the_row(); ?>
        <?php get_template_part('components/sub', 'topvidimg'); ?>
    <?php endwhile; ?>
<?php endif; ?>


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


                <?php if (get_row_layout() == 'inner_links') :
                    $innerLinks = get_sub_field('inner-link');
                ?>

                    <div class="page-links">
                        <h2 class="text-center"><span><?php echo get_sub_field('title') ?></span></h2>
                        <div class="row d-flex justify-content-center">
                            <?php foreach ($innerLinks as $link) :
                            ?>

                                <div class="col-lg-4 col-md-6 col-sm-6 col-10 offset-col-1">
                                    <div class="nav-card">
                                        <a href="<?php echo $link['Link']; ?>">
                                            <div class="img-1" style="background:url(<?php echo $link['go_to_image']; ?>) no-repeat; background-position:center; background-size:cover;">

                                            </div>
                                        </a>

                                        <!-- <div class="img">
                                        <h3><ruby><?php echo $link['go_to_text']; ?><rt><?php echo $link['go_to_text_jp']; ?></rt></ruby></h3>
                                        <img src="<?php echo $link['go_to_image']; ?>" alt="" class="img-fluid">
                                    </div> -->
                                        <!-- <pre><?php echo $link['Link']; ?></pre> -->
                                        <div class="links">
                                            <h3><?php echo $link['go_to_text']; ?><br><span><?php echo $link['go_to_text_jp']; ?></span></h3>
                                            <p class="px-2"><?php echo $link['description']; ?></p>
                                            <div class="row mb-3">
                                                <div class="ext-link col-6">
                                                    <?php if ($link['ext_link']) : ?>
                                                        <a href="<?php echo $link['ext_link']; ?>"><?php echo $link['link_text']; ?> <i class="lni lni-arrow-right"></i></a>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="inner-link col-6 text-end">
                                                    <a href="<?php echo $link['Link']; ?>">もっと見る <i class="lni lni-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>

                <?php endif; ?>


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
                <?php if (get_row_layout() == 'inner_links') : ?>
                    <?php get_template_part('components/category', 'imagemenu') ?>
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


                <!-- 画像付きで別ページ飛ばし -->
                <?php if (get_row_layout() == 'landscape_view_link_image') : ?>
                    <?php get_template_part('components/category', 'imagelink'); ?>
                <?php endif; ?>

                <!-- 画像付きで別ページ飛ばし -->
                <?php if (get_row_layout() == 'external-link-with-image') : ?>
                    <?php get_template_part('components/category', 'linkwithimage'); ?>
                <?php endif; ?>

                <!-- 動画付きで別ページ飛ばし -->
                <?php if (get_row_layout() == 'landscape_view_link_video') : ?>
                    <?php get_template_part('components/category', 'videolink'); ?>
                <?php endif; ?>

                <!-- 商品の紹介 -->
                <?php if (get_row_layout() == 'brand_and_items') : ?>
                    <?php get_template_part('components/category', 'products'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'brand_and_items2') : ?>
                    <?php get_template_part('components/category', 'products2'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'list-of-stylists') : ?>
                    <?php get_template_part('components/category', 'stylists'); ?>
                <?php endif; ?>

                <?php if (get_row_layout() == 'user-voice') : ?>
                    <?php get_template_part('components/category', 'uservoices'); ?>
                    
                <?php endif ?>



            <?php endwhile; ?>
        <?php endif; ?>



        <?php if (have_rows('promotion-links')) : ?>
            <?php while (have_rows('promotion-links')) : the_row(); ?>
                <div class="promotion-page-links col-lg-10 offset-lg-1">
                    <?php if (get_row_layout() == 'promotional-external-link') : ?>
                        <?php get_template_part('components/promotion', 'links'); ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>




    </div>
    <div class="container px-0">
        <div class="company-history col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1 col-12 py-5">
            <?php if (have_rows('company_info')) : ?>
                <?php while (have_rows('company_info')) : the_row(); ?>
                    <?php if (get_row_layout() == 'company-history') : ?>
                        <?php get_template_part('components/about', 'history'); ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>