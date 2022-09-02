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




<div class="container my-5">
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

                            <div class="col-md-4 col-sm-6 col-10 offset-col-1">
                                <div class="nav-card">
                                    <div class="img-1" style="background:url(<?php echo $link['go_to_image']; ?>) no-repeat; background-position:center; background-size:cover;" >
                                    <!-- <img src="<?php echo $link['go_to_image']; ?>" alt="" class="img-fluid"> -->
                                    </div>

                                    <!-- <div class="img">
                                        <h3><ruby><?php echo $link['go_to_text']; ?><rt><?php echo $link['go_to_text_jp']; ?></rt></ruby></h3>
                                        <img src="<?php echo $link['go_to_image']; ?>" alt="" class="img-fluid">
                                    </div> -->

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
                                                    <a href="<?php echo $link['link']['url']; ?>">もっと見る <i class="lni lni-arrow-right"></i></a>
                                                </div>
                                        </div>
                                    </div>

                                    
                                </div>

                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>

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

    <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1 my-3">
        <h3 class="text-center">NEWS</h3>
        <?php
        //get the posts
        $args = array(
            // post per page
            'posts_per_page' => 3, 
            // order by ID
            'orderby' => 'ID', 
            // descending order
            'order' => 'DESC', 
        );

        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) : 
            while ($the_query->have_posts()) :
                $the_query->the_post(); 
        ?>
                            <div class="news">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                                <h4 class="time">投稿：<?php the_time('Y.m.d') ?></h4>
                                <p class="category"><span><?php the_category(' '); ?></span></p>
                                <p><?php echo mb_substr(get_the_excerpt(), 0, 50) . '...'; ?>
                                <a href="<?php the_permalink(); ?>">もっと読む</a>
                                </p>
                            </div>
            <?php endwhile; else : ?>

            <p class="text-center">投稿数：0件</p>

        <?php endif; wp_reset_postdata(); ?>
    </div>

    

    <div class="container">
        <div class="company-profile col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-10 offset-sm-1 my-5">
            <?php if (have_rows('company_info')) : ?>
                <?php while (have_rows('company_info')) : the_row(); ?>
                    <?php if (get_row_layout() == 'table') :?>
                        <?php get_template_part('components/about', 'company'); ?>                        
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>

</div>



<?php get_footer(); ?>