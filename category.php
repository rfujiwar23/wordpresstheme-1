<div class="wrapper">
<?php get_header();

/**
 * Template Name: Posts
 */

?>



<header>

    <div class="row d-flex justify-content-center my-5">
        <h3 class="text-center">カテゴリ: <q><?php echo single_cat_title(); ?></q></h3>
    </div>
</header>
<div class="postsAll">
<?php if(have_posts('posts_per_page=-1')) : ?>
<div class="container">
        <div class="col-sm-8 offset-sm-2">
            <?php while(have_posts()) : the_post(); ?>
                <section>
                    <h5><span><?php the_time('Y.m.d'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class="list-category"><span><?php the_category( ' ' ); ?></span></p>
                    <p class="exc"><?php echo get_the_excerpt(); ?></p>
                </section>
            <?php endwhile; ?>
        </div>
</div>
<?php endif; ?>
</div>
<?php get_footer(); ?>
</div>