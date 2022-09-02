<?php
$linkText = get_sub_field('link_text');
$linkUrl = get_sub_field('link_url');
$color = get_sub_field('button_color');
?>

<a href="<?php echo $linkUrl; ?>" style="text-decoration:none;">
    <div class="link-button <?php echo $color; ?>">
        <?php echo $linkText; ?>
    </div>
</a>