<?php
    foreach($items as $item) {
?>
    <div class="gq-dev-content-item">
        <a href="<?php echo base_url()?>developer/detail?developerid=<?php echo $item->_developerid?>">
            <div class="gq-dev-content-body">
                <img class="gq-dev-img" src="<?php echo $item->profile_uri ?>">
                <div class="gq-dev-content-title">
                    <?php echo $item->title ?>
                </div>
                <div class="gq-dev-content-summary">
                    <?php echo $item->summary ?>
                </div>
                <div class="gq-dev-content-created">
                    <?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?>
                </div>
            </div>
        </a>
    </div>
<?php
}
?>