<?php
$post_objects = get_sub_field('stylist');
if ($post_objects) : ?>
    <div class="stylists px-2">

    <div class="kami-charisma col-lg-10 offset-lg-1">
    <p>
        <img src="<?php echo get_template_directory_uri(); ?>/image/kamisma-logo2.png" alt="KAMISMA LOGO" height="30">
        <br>
        <small>*カミカリスマ美容師として活躍されています</small>
    </p>
    
    </div>
        

        <ul class="px-0">
        
            <?php foreach ($post_objects as $post) : ?>

                
                <?php setup_postdata($post); ?>

                

                <li id="<?php echo esc_attr($post->post_name); ?>" class="stylist">
                    <div class="my-4 col-lg-10 offset-lg-1">
                        <div class="name_and_salon">
                            <div class="name">
                                <h5><ruby><?php the_field('last-name'); ?><rt><?php the_field('furigana-last'); ?></rt></ruby> <ruby><?php the_field('first-name'); ?><rt><?php the_field('furigana-first'); ?></rt></ruby> <span>氏</span></h5>
                            </div>
                            <div class="salon d-flex align-items-center justify-content-center">
                                <p class="mb-0"><?php the_field('salon-name'); ?> ／ <?php the_field('salon-area'); ?></p>
                            </div>
                        </div>
                        <div class="content row py-3 mx-0">
                            <div class="image col-md-3 col-sm-4 col-5 d-flex justify-content-center align-items-center" style="background:#f7f6ef;">
                                <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="<?php the_field('salon_name'); ?> <?php the_title(); ?>">
                            </div>
                            <div class="col-md-9 col-sm-8 col-12 stylist-info">
                                <div class="text">
                                    <div class="the_contents">
                                        <?php the_content(); ?>
                                        <?php if (get_field('kamisma-page')): ?>
                                            <a href="<?php the_field('kamisma-page'); ?>" class="btn-kamisma"><?php the_field('last-name'); ?> <?php the_field('first-name'); ?>氏 の活躍を見る</a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="kamisma-stylist">
                                    <?php if (get_field('kamismastylist')): ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/image/kamisma-logo2.png" alt="KAMISMA LOGO" width="100%">
                                    <?php endif; ?>
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