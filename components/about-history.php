<?php while (have_rows('history-row')) : the_row(); ?>
    <?php $newRow = get_sub_field('contents-by-month'); ?>
    <div class="row row-by-year">
        <div class="col-lg-2 col-sm-2 year">
            <p><?php echo get_sub_field('year'); ?></p>
        </div>
        <div class="col-lg-10 col-sm-10 description">
            <?php foreach ($newRow as $row) : ?>
                <div class="month-and-contents row">
                    <div class="col-2">
                        <p><?php echo $row['month']; ?></p>
                    </div>
                    <div class="col-10">
                        <?php echo $row['description']; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endwhile; ?>