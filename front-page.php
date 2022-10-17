<?php

/**
 * Template Name: トップページ (TOP)
 */

get_header(); ?>



<?php if (have_rows('top-image-video')) : ?>
    <?php while (have_rows('top-image-video')) : the_row(); ?>
        <?php get_template_part('components/top', 'carousel'); ?>
    <?php endwhile; ?>
<?php endif; ?>



<!-- メインバナー（画像、静止・動きなし） -->
<!-- <div class="jumbotron">
    <?php if (have_rows('banner_image')) : ?>
        <?php while (have_rows('banner_image')) : the_row(); ?>
            <?php get_template_part('components/top', 'banner'); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div> -->

<!-- <div class="" style="height:100vh; background:url(https://res.cloudinary.com/rfujiwar23/image/upload/v1612520150/pexels-jeremy-bishop-2922672.jpg); background-position:center; background-size:cover;" ></div> -->

<!-- <div class="container my-5"> -->
<div class="main-contents-area">
<?php if (have_rows('content')) : ?>

<?php while (have_rows('content')) : the_row(); ?>

    <!-- 内部リンク -->
    <?php if (get_row_layout() == 'inner_links') : ?>
        <?php get_template_part('components/top', 'fscategory'); ?>
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

    <!-- もっと見る（内部リンク） -->
    <?php if (get_row_layout() == 'image-link') : ?>
        <?php
        $linkUrl = get_sub_field('url');
        $linkImage = get_sub_field('image');
        $linkAlt = get_sub_field('alt');
        ?>

        <a href="<?php echo $linkUrl; ?>" style="text-decoration:none;">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 my-5">
                <img src="<?php echo $linkImage; ?>" alt="<?php echo $linkAlt; ?>" class="img-fluid">
            </div>
        </a>
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

<div class="container-fluid px-0" style="background:#dddddd;">
    <div class="company-profile col-md-10 offset-md-1">
        <?php if (have_rows('company_info')) : ?>
            <?php while (have_rows('company_info')) : the_row(); ?>
                <?php if (get_row_layout() == 'table') : ?>
                    <?php get_template_part('components/about', 'company'); ?>
                <?php endif; ?>
                <!-- もっと見る（内部リンク） -->
                <?php if (get_row_layout() == 'image-link') : ?>
                    <?php
                    $linkUrl = get_sub_field('url');
                    $linkImage = get_sub_field('image');
                    $linkAlt = get_sub_field('alt');
                    ?>

                    <a href="<?php echo $linkUrl; ?>" style="text-decoration:none;">
                        <div class="col-md-8 offset-md-2">
                            <img src="<?php echo $linkImage; ?>" alt="<?php echo $linkAlt; ?>" class="img-fluid">
                        </div>
                    </a>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1 news-section">
    <h3 class="text-center">NEWS</h3>
    <?php get_template_part('components/top', 'news'); ?>
    <div class="read-more text-center my-4">
        <a class="btn btn-read-more" href="<?php bloginfo('url') ?>/news">記事一覧</a>
    </div>
</div>

<!-- <hr> -->



<!-- </div> -->





<?php get_footer(); ?>