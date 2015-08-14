<section class="gq-core">
    <div class="container gq-core-container">
        <div class="row text-center">
            <div class="col-lg-12 gq-core-profile text-center">
                <img class="gq-core-profile-img"
                     src="<?php echo $item->profile_uri?>">
            </div>
            <div class="col-lg-12 gq-core-user">
                <?php echo $item->title ?>
            </div>
            <div class="col-lg-12 gq-core-created">
                <?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?> | <?php echo $item->label ?>
            </div>
            <div class="col-lg-12 gq-core-content">
                <?php echo $item->content ?>
            </div>
            <a class="col-lg-12 gq-core-share" target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?= site_url('core/detail?coreid='.$item->_coreid)?>">
                페이스북 공유하기
            </a>
        </div>
    </div>
</section>
