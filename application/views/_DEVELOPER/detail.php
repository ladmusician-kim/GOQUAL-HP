<section class="gq-dev">
    <div class="container gq-dev-container">
        <div class="row text-center">
            <div class="col-lg-12 gq-dev-profile text-center">
                <img class="gq-dev-profile-img" src="<?php echo $item->profile_uri ?>">
            </div>
            <div class="col-lg-12 gq-dev-user">
                <?php echo $item->title ?>
            </div>
            <div class="col-lg-12 gq-dev-created">
                <?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?>
            </div>
            <div class="col-lg-12 gq-dev-content">
                <?php echo $item->content ?>
            </div>
            <a class="col-lg-12 gq-dev-share" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?= site_url('developer/detail?developerid='.$item->_developerid)?>">
                페이스북 공유하기
            </a>
        </div>
    </div>
</section>
