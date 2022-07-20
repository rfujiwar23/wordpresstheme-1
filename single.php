<?php get_header(); ?>

<div class="container mb-5">
<?php ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="">
    <?php ?>
    <?php if(has_post_thumbnail()): ?>
    <div class="blog-detail__image col-md-6 offset-md-3 col-sm-8 offset-sm-2">
        <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>">
    </div>
    <?php endif; ?>
    <?php ?>
    </div>

    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm1">
    <?php ?>
    <h2 class="blog-detail__title"><?php the_title(); ?></h2>
    <hr>
    <?php ?>	
    <p class="post-time"><i class="fa-solid fa-clock"></i>投稿日: <?php the_time('y/m/j') ?></p>
    </div>

    

    <?php ?>
    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
    <div class="blog-detail__body">
        <div class="blog-content"><?php echo the_content(); ?></div>
    </div>
    </div>
    <?php ?>

<?php endwhile; endif; ?>
<?php ?>
</div>

<?php get_footer(); ?>