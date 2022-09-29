<?php if (get_row_layout() == 'page_top_banner') : ?>
    <div class="top_banner container px-0">
        <div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
            <img src="<?php echo get_sub_field('image'); ?>" alt="" class="img-fluid">
            <div class="logo">
                <h1><img src="<?php echo get_sub_field('logo'); ?>" alt="<?php echo get_sub_field('page_name'); ?>" class="img-fluid"></h1>
                <h4><?php echo get_sub_field('page_name'); ?></h4>
            </div>
        </div>
    </div>
<?php endif; ?>