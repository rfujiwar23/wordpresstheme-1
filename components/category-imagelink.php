<?php

$image = get_sub_field('image');
$title = get_sub_field('title');
$link = get_sub_field('link');
$desc = get_sub_field('description');

?>

<div class="row my-5">
    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-10 offset-1 landscape_view_link px-0">
        <a href="<?php echo $link; ?>"><img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-fluid"></a>
        <div class="text">
            <h4><span><?php echo $title; ?></span></h4>
            <div class="disc"><?php echo $desc; ?></div>
            <a href="<?php echo $link; ?>" class="bottom-link"><?php echo get_sub_field('link-text'); ?> <i class="lni lni-arrow-right"></i></a>
        </div>
    </div>
</div>