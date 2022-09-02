<?
$innerLinks = get_sub_field('inner-link');
?>

<div class="page-links">
    <h2 class="text-center"><span><?php echo get_sub_field('title') ?></span></h2>
    <div class="row d-flex justify-content-center">
        <?php foreach ($innerLinks as $link) :
        ?>
            <div class="col-md-4 col-6">
                <div class="nav-card">
                    <div class="text">
                        <h3><?php echo $link['go_to_text']; ?></h3>
                        <p><?php echo $link['go_to_text_jp']; ?></p>
                    </div>
                    <div class="img">
                        <img src="<?php echo $link['go_to_image']; ?>" alt="" class="img-fluid">
                        <div class="inner-link">
                            <a href="<?php echo $link['link']['url']; ?>">もっと見る</a>
                        </div>
                        <?php if ($link['ext_link']) : ?>
                            <div class="ext-link">
                                <a href="<?php echo $link['ext_link']; ?>"><?php echo $link['link_text']; ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>