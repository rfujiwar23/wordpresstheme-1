<?php if (get_row_layout() == 'top_page') : ?>
    <div class="bg-video-wrap">
        <video src="<?php echo get_sub_field('movie'); ?>" loop muted autoplay playsinline poster="<?php echo get_sub_field('image'); ?>">
        </video>
        <div class="overlay">
        </div>
        <div class="title">
            <h1><img src="<?php echo get_sub_field('title-logo'); ?>" alt="<?php echo get_sub_field('web-site-catch-phrase') ?>" class="img-fluid"></h1>
        </div>
    </div>
<?php endif; ?>


<div id="carousel" class="owl-carousel owl-theme">
    <?php if (get_row_layout() == 'banner-slider') :
        $banners = get_sub_field('image-list');
    ?>
        <?php foreach ($banners as $banner) : ?>
            <div class="top">
                <a href="<?php echo $banner['link']; ?>">
                    <img src="<?php echo $banner['image']; ?>" alt="<?php echo $banner['product-name']; ?>" class="top-img">
                </a>
            </div>
        <?php endforeach ?>
    <?php endif; ?>
</div>

