<?php 

/**
 * Template Name: Type 5 (Mechanism)
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="main-contents pt-5 pt-3">
            <div class="container d-flex justify-content-center">
                    
                    <div class="col-lg-10 col-md-10">
                        <h2 class="text-center"><?php echo get_the_title(); ?></h2>
                        <p><?php echo the_content(); ?></p>
                        <div class="part1">
                            <h3>特許技術インカラミ反応</h3>
                            <p>TOKIOの圧倒的なケア効果を可能にするTOKIOでしか実現できない技術です。</p>

                            <div class="part1-area1">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>

    <?php endwhile;
else : ?>
    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>