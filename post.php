<?php get_header(); 
/**
 * Template Name: Posts
 */

?>

<?php if (have_rows('sub-page')) : ?>
    <?php while (have_rows('sub-page')) : the_row(); ?>
        <?php get_template_part('components/sub', 'topvidimg'); ?>
    <?php endwhile; ?>
<?php endif; ?>



<header>
	

    <div class="row d-flex justify-content-center my-5">
        <h3 class="text-center">お知らせ</h3>
        <p class="text-center"><?php wpb_total_posts(); ?>件</p>
    </div>
</header>


<div class="postsAll">
<?php query_posts('posts_per_page=-1'); ?>
<?php if (have_posts()) : ?>
    <div class="container">
        <div class="col-sm-8 offset-sm-2">
            <?php while (have_posts()) : the_post(); ?>
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