<?php 

/**
 * Template Name: Type 4
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="custom-page-header pt-5 pt-3">
            <div class="container d-flex justify-content-center">
                    
                    <div class="col-lg-10 col-md-10">
                        <h1><?php echo get_the_title(); ?></h1>
                        <p><?php echo the_content(); ?></p>
                    </div>
                
            </div>
        </div>

    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<!-- list -->
<div class="list">
    <div class="head">Platinum</div>
    <div class="product_list">
        
    </div>
</div>

<?php get_footer(); ?>