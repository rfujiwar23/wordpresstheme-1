<?php if (get_row_layout() == 'sub_page_video') : ?>
    <div class="bg-video-wrap">
        <video src="<?php echo get_sub_field('movie'); ?>" loop muted autoplay poster="<?php echo get_sub_field('image'); ?>">
        </video>
        <div class="overlay">
        </div>
        <div class="title">
            <!-- <h2><?php echo get_sub_field('title'); ?></h2> -->
            <h2><?php echo get_the_title(); ?></h2>
        </div>
    </div>
<?php endif; ?>

<?php if (get_row_layout() == 'sub_page_video_ext') : ?>
    <div class="bg-video-wrap">
        <video src="<?php echo get_sub_field('movie'); ?>" loop muted autoplay poster="<?php echo get_sub_field('image'); ?>">
        </video>
        <div class="overlay">
        </div>
        <div class="title">
            <!-- <h2><?php echo get_sub_field('title'); ?></h2> -->
            <h2><?php echo get_the_title(); ?></h2>
        </div>
    </div>
<?php endif; ?>

<?php if (get_row_layout() == 'sub_page_image') : ?>
    <div class="bg-image-wrap" style="height:100vh; background:linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(20,20,20,0.7) 100%), url(<?php echo get_sub_field('banner-image'); ?>); background-position:center; background-size:cover;">
            <div class="title">
            <h2><?php echo get_the_title(); ?></h2>
            </div>
        </div>
<?php endif; ?>




