<?php 
$innerLinks = get_sub_field('inner-link');
?>

<?php foreach ($innerLinks as $link) : ?>
    <?php if ($link['video-link'] || $link['video'] === false ) : ?>
        <!-- should be from a video link from outside source
        <pre><?php echo $link['video-link']; ?></pre>
        <pre><?php echo $link['go_to_image']?></pre> -->
        <div class="bg-video-wrap">
            <video src="<?php echo $link['video-link']; ?>" poster="<?php echo $link['go_to_image']?>" loop muted autoplay playsinline >
            </video>
            <div class="overlay">
            </div>
            <div class="text">
                <h2><?php echo $link['go_to_text']; ?></h2>
                <p><?php echo $link['go_to_text_jp']; ?></p>
                <p><?php echo $link['description']; ?></p>
                <div class="inner-link">
                    <a href="<?php echo $link['Link']; ?>">もっと見る <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
                <?php if ($link['ext_link']) : ?>
                    <div class="ext-link">
                        <a href="<?php echo $link['ext_link']; ?>"><?php echo $link['link_text']; ?> <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif ?>
    <?php if ($link['video'] || $link['video-link'] === false ) : ?>
        <!-- video link from wordPress only
        <pre><?php echo $link['video']; ?></pre> -->
        <div class="bg-video-wrap">
            <video src="<?php echo $link['video']; ?>" poster="<?php echo $link['go_to_image']?>" loop muted autoplay playsinline>
            </video>
            <div class="overlay">
            </div>
            <div class="text">
                <h2><?php echo $link['go_to_text']; ?></h2>
                <p><?php echo $link['go_to_text_jp']; ?></p>
                <p><?php echo $link['description']; ?></p>
                <div class="inner-link">
                    <!-- <p><?php echo $link['video-link']; ?></p> -->
                    <a href="<?php echo $link['Link']; ?>">もっと見る <i class="fa-solid fa-circle-arrow-right"></i></a>
                </div>
                <?php if ($link['ext_link']) : ?>
                    <div class="ext-link">
                        <a href="<?php echo $link['ext_link']; ?>"><?php echo $link['link_text']; ?> <i class="fa-solid fa-circle-arrow-right"></i></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endif ?>

<?php endforeach; ?>