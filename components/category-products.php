                    <?php 
                    $brandText = get_sub_field('type');
                    $description = get_sub_field('description');
                    $logo = get_sub_field('logo');
                    $items = get_sub_field('items');
                    ?>
                    
                    <div class="brand_and_items <?php echo $brandText; ?>">
                        <div class="logo">
                            <img src="<?php echo $logo; ?>" alt="<?php echo $brandText; ?>" class="img-fluid">
                        </div>
                        <div class="top-text">
                            <h4><span><em><?php echo $brandText; ?></em> Series</span></h4>
                            <p><?php echo $description; ?></p>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <?php foreach ($items as $item) : ?>
                                <div class="col-sm-4 col-6 inkarami-items">
                                    <img src="<?php echo $item['product_image']; ?>" alt="<?php echo $item['name']; ?>" class="img-fluid">
                                    <h4><?php echo $item['name']; ?><br><span><?php echo $item['jp_name']; ?></span></h4>
                                    <hr>
                                    <h5><?php echo $item['size']; ?></h5>
                                    <?php if ($item['true_or_false'] = 1) : ?>
                                        <p>900mlサイズ有</p>
                                    <?php endif; ?>

                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>