
<?php 
$video = get_sub_field('video');
$title = get_sub_field('title');
$desc = get_sub_field('description');
$link = get_sub_field('link');
?>
<div class="row my-5">
    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-10 offset-1 landscape_view_link px-0">
        <div class="video">
            <iframe class="embed-responsive-item" src="<?php echo $video; ?>"></iframe>
        </div>
        <div class="text">
            <h4><span><?php echo $title; ?></span></h4>
            <div class="disc"><?php echo $desc; ?></div>
            <a href="<?php echo $link; ?>" class="bottom-link"><?php echo get_sub_field('link-text'); ?> <i class="lni lni-arrow-right"></i></a>
        </div>
    </div>
</div>