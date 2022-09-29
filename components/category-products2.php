<?php
$brandText = get_sub_field('type');
$description = get_sub_field('description');
$logo = get_sub_field('logo');
$items = get_sub_field('items');
?>

<div class="brand_and_items my-5 <?php echo $brandText; ?>">
    <div class="logo">
        <img src="<?php echo $logo; ?>" alt="<?php echo $brandText; ?>" class="img-fluid">
    </div>
    <div class="top-text">
        <h4 class="text-center"><span><em><?php echo $brandText; ?></em> Series</span></h4>
        <p><?php echo $description; ?></p>
    </div>
    <div class="row d-flex justify-content-center">
        <?php foreach ($items as $item) : ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-6 inkarami-items2">
                <img src="<?php echo $item['product_image']; ?>" alt="<?php echo $item['name']; ?>" class="img-fluid">
                <h4><ruby><?php echo $item['name']; ?><rt><?php echo $item['jp_name']; ?></rt></ruby></h4>
                
                <p><?php echo $item['size']; ?></p>
                <hr>
                <p class="text-center"><a href="<?php echo $item['purchase_url']; ?>" class="purchase-url">購入する</a></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>