<?php
foreach($items as $item) {
    ?>
    <div class="gq-report-content-item">
        <div class="col-lg-2 col-md-2 gq-web-content">
            <p class="institution"><?php echo $item->institution ?></p>
            <p class="published"><?php echo $item->published ?></p>
        </div>
        <a class="gq-report-content col-lg-10 col-md-10" href="<?php echo $item->url ?>" target="_blank">
            <div class="gq-report-content-body">
                <div class="gq-mobile-content">
                    <p class="institution"><?php echo $item->institution ?> | <?php echo $item->published ?></p>
                </div>
                <div class="gq-report-content-title">
                    <?php echo $item->title ?>
                </div>
                <div class="gq-report-content-summary">
                    <?php echo $item->summary ?>....
                </div>
            </div>
        </a>
    </div>
    <?php
}
?>