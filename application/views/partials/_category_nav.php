<ul class="nav nav-tabs nav-stacked nav-coupon-category">
    <li
    <?php echo (is_all($this->uri->segment(2))) ? 'class="active"' : '' ?>
        >
        <a href="<?= $categories->base_url ?>">
            <i class="icon-ticket"></i>All
        </a>
    </li>
    <?php foreach ($categories->items() as $value) { ?>
        <li <?php echo $value->active ? 'class="active"' : '' ?> >
            <a href="<?= $value->link ?>">
                <i class="icon-angle-right"></i><?= $value->name ?>
            </a>
        </li>
    <?php } ?>
</ul>
<?php

function is_all($url) {
    return strcmp($url, 'all') === 0 ||
            empty($url) ||
            is_numeric($url);
}
?>