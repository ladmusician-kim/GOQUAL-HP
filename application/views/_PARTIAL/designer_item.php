<?php
foreach($items as $item) {
    ?>
    <div class="gq-ds-content-item col-lg-4">
        <div class="gq-ds-content-item-inner">
            <div class="gq-ds-content-item-img">
                <img class="gq-ds-item-img" src="<?php echo $item->main_img_uri?>" />
            </div>
            <div class="gq-ds-content-body">
                <div class="gq-ds-content-item-title">
                    <?php echo $item->title ?>
                </div>
                <div class="gq-ds-content-item-summary">
                    <?php echo $item->summary ?>
                </div>
                <div class="gq-ds-content-item-created">
                    <?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>