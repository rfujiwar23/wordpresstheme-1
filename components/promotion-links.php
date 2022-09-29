<div class="row row-flex d-flex justify-content-center">
    <?php 
    $innerBlock = get_sub_field('block');
    foreach ($innerBlock as $block) :
    ?>
        <div class="col-md-6 px-0 item">
            <!-- <a href="<?php echo $block['promotion-link']; ?>" style="text-decoration:none;" class="item"> -->
                <div class="item-text" style="aspect-ratio:2/1; background: linear-gradient(rgba(255,255,255,0.6),rgba(255,255,255,0.5)), url(<?php echo $block['promotion-image']; ?>); background-position:center top; background-size:cover;">
                <div class="title">
                <h4><?php echo $block['promotion-title-eng']; ?></h4>
                <h5><?php echo $block['promotion-title']; ?></h5>
                </div>
                    <div class="show">
                        
                        <div class="text">
                        <div class="contents">
                        <p><?php echo $block['promotion-desc']; ?></p>
                        <p class="text-center "><a href="<?php echo $block['promotion-link']; ?>">もっと見る</a></p>
                        </div>
                        </div>
                    </div>
                </div>
            <!-- </a> -->
        </div>
    <?php endforeach; ?>
</div>