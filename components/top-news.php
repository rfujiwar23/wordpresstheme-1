<div class="container">
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
            <?php endwhile;
        else : ?>
            <p class="text-center">投稿数：0件</p>
        <?php endif;
        wp_reset_postdata(); ?>
</div>