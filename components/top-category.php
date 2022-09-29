<?php
$innerLinks = get_sub_field('inner-link');
?>

<div class="page-links">
    <h2 class="text-center"><span><?php echo get_sub_field('title') ?></span></h2>
    <div class="row d-flex justify-content-center">
        <?php foreach ($innerLinks as $link) :
        ?>
            <div class="col-lg-4 col-md-6 col-sm-6 col-10 offset-col-1">
                <div class="nav-card">
                    <a href="<?php echo $link['Link']; ?>">
                        <div class="img-1" style="background:url(<?php echo $link['go_to_image']; ?>) no-repeat; background-position:center; background-size:cover;">
                        </div>
                    </a>
                    <div class="links">
                        <h3><?php echo $link['go_to_text']; ?><br><span><?php echo $link['go_to_text_jp']; ?></span></h3>
                        <p class="px-2"><?php echo $link['description']; ?></p>
                        <div class="row mb-3">
                            <div class="ext-link col-6">
                                <?php if ($link['ext_link']) : ?>
                                    <a href="<?php echo $link['ext_link']; ?>"><?php echo $link['link_text']; ?> <i class="lni lni-arrow-right"></i></a>
                                <?php endif; ?>
                            </div>
                            <div class="inner-link col-6 text-end">
                                <a href="<?php echo $link['Link']; ?>">もっと見る <i class="lni lni-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>