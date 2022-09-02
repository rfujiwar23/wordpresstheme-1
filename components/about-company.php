<?php
$items = get_sub_field('table-row');
?>


<h4 class="text-center mb-3"><?php echo get_sub_field('sub-title') ?></h4>
<?php foreach ($items as $item) : ?>
    <dl class="list_table">
        <dt><?php echo $item['list-title']; ?></dt>
        <dd><?php echo $item['description']; ?></dd>
    </dl>
<?php endforeach; ?>