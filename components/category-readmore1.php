<?php
$linkText = get_sub_field('link_text');
$linkUrl = get_sub_field('link_url');
?>

<a href="<?php echo $linkUrl; ?>" style="text-decoration:none;">
    <div class="link-button external-site">
        <?php echo $linkText; ?> <i class="fa-solid fa-arrow-up-right-from-square"></i>
    </div>
</a>