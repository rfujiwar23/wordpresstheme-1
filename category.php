<div class="wrapper">
<?php get_header();

/**
 * Template Name: Posts
 */

?>

    <div class="bg-image-wrap" style="height:100vh; background:linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(20,20,20,0.7) 100%), url(<?php echo get_template_directory_uri(); ?>/image/new-banner.png); background-position:center; background-size:cover;">
            <div class="title">
            <h2>カテゴリー</h2>
			<p class="text-center">
				<a href="#articles" class="go-to-bottom" style="color: #fff; font-size:2em;">
					<i class="lni lni-chevron-down-circle"></i>
				</a>
				</p>
            </div>
        </div>

<header>
	
    <div class="row d-flex justify-content-center my-5">
        <h3 class="text-center">カテゴリ: <q><?php echo single_cat_title(); ?></q></h3>
    </div>
</header>
<div class="postsAll" id="articles">
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