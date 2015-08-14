<section class="gq-ds">
    <div class="container gq-ds-container">
        <div class="row text-center">
            <div class="col-lg-12 gq-ds-profile text-center">
                <img class="gq-ds-profile-img" src="<?php echo $item->profile_uri ?>">
            </div>
            <div class="col-lg-12 gq-ds-user">
                <?php echo $item->title ?>
            </div>
            <div class="col-lg-12 gq-ds-created">
                <?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?>
            </div>
            <div class="col-lg-12 gq-ds-content">
                <?php echo $item->content ?>
            </div>
            <a class="col-lg-12 gq-ds-share" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?= site_url('designer/detail?designerid='.$item->_designerid)?>">
                페이스북 공유하기
            </a>
        </div>
    </div>
</section>
