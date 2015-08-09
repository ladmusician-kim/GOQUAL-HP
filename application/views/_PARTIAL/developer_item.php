<?php
    foreach($items as $item) {
?>
        <div class="gq-dev-content-item">
            <div class="gq-dev-content-body">
                <img class="gq-dev-img" src="<?php echo base_url(); ?>static/img/member/dj_profile.png">
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
        </div>
<?php
    }
?>