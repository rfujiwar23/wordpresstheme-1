<?php get_header(); ?>

<div class="container post-page">
<?php ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <div class="top">
    <?php ?>
    <?php if(has_post_thumbnail()): ?>
    <div class="blog-detail__image col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1 mb-5 d-flex align-items-center">
        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>">
    </div>
    <?php endif; ?>
    <?php ?>
    </div>

    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
    <?php ?>
    <h2 class="blog-detail__title"><?php the_title(); ?></h2>
    <hr>
    <p class="postmetadata"><?php _e( 'カテゴリ：' );?> <span><?php the_category( ' ' ); ?></span></p>
    <?php ?>	
    <p class="post-time"><i class="fa-solid fa-clock"></i>公開日: <?php the_time('Y.m.d') ?>
    <br><i class="fa-solid fa-clock"></i>更新日: <?php the_modified_date('Y.m.d') ?></p>
    </div>

    

    <?php ?>
    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1 pt-2 pb-3 px-4 post-page">
    <div class="blog-detail__body">
        
        <div class="blog-content"><?php echo the_content(); ?></div>
        
    </div>

    <div class="previous-and-next">
        <?php the_post_navigation( array(
            'prev_text'  => __( '← 前の記事' ),
            'next_text'  => __( '次の記事 →' ),
        ));
        ?>
    </div>

    <a href="<?php bloginfo('url') ?>/news">一覧を見る</a>

    </div>
    <?php ?>

<?php endwhile; endif; ?>
<?php ?>
</div>

<?php get_footer(); ?>