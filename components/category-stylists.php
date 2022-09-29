<?php
$post_objects = get_sub_field('stylist');
if ($post_objects) : ?>
    <div class="stylists px-2">
        

        <ul class="px-0">
        
            <?php foreach ($post_objects as $post) : ?>

                
                <?php setup_postdata($post); ?>

                

                <li id="<?php echo esc_attr($post->post_name); ?>" class="stylist">
                    <div class="my-4 col-lg-10 offset-lg-1">
                        <div class="name_and_salon">
                            <div class="name">
                                <h5><ruby><?php the_field('last-name'); ?><rt><?php the_field('furigana-last'); ?></rt></ruby> <ruby><?php the_field('first-name'); ?><rt><?php the_field('furigana-first'); ?></rt></ruby> <span>氏</span></h5>
                            </div>
                            <div class="salon">
                                <p class="mb-0"><?php the_field('salon-name'); ?> ／ <?php the_field('salon-area'); ?></p>
                            </div>
                        </div>
                        <div class="content row py-3 mx-0">
                            <div class="image col-md-3 col-sm-4 col-5">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_field('salon_name'); ?> <?php the_title(); ?>">
                            </div>
                            <div class="col-md-9 col-sm-8 col-12">
                                <div class="text">
                                    <div class="the_contents">
                                        <?php the_content(); ?>
                                        <a href="<?php the_field('kamisma-page'); ?>" class="btn-kamisma">もっと詳しく見る</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li><!-- /stylist -->
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </ul>
    </div><!-- /stylists -->
<?php endif; ?>