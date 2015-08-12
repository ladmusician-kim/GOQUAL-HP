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
        </div>
    </div>
</section>
