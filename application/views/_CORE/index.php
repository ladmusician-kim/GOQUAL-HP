<input type="hidden" id="categoryid" value="<?php echo $categoryid?>" >
<section class="gq-core-main">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 gq-core-main-title">
                GOQUAL 블로그
            </div>
            <div class="col-lg-12 gq-core-main-content">
                - 우리는 어제의 우리와 경쟁합니다 -
            </div>
        </div>
    </div>
</section>

<section class="gq-core-content">
    <div class="container gq-core-container">
        <ul class="gq-core-category-wrapper text-center">
            <li class="gq-core-category-item"><a href="<?= site_url('/core/index')?>">전체보기</a></li>
            <li class="gq-core-category-item">/</li>
            <?php
            foreach($categories as $idx=>$value) {
                if ($idx != count($categories) - 1) {
                    ?>
                    <li class="gq-core-category-item"><a href="<?= site_url('/core/index?categoryid='.$value->_categoryid)?>"><?php echo $value->label ?></a></li>
                    <li class="gq-core-category-item">/</li>
                    <?php
                } else {
                    ?>
                    <li><a href="<?= site_url('/core/index?categoryid='.$value->_categoryid)?>"><?php echo $value->label ?></a></li>
                    <?php
                }
            }
            ?>
        </ul>

        <div id="gq-core-content-container">
            <ul class="gq-core-ul">
                <li class="gq-core-li col-lg-3 col-xs-6 col-md-3">
                </li>
                <li class="gq-core-li col-lg-3 col-xs-6 col-md-3">
                </li>
                <li class="gq-core-li col-lg-3 col-xs-6 col-md-3">
                </li>
                <li class="gq-core-li col-lg-3 col-xs-6 col-md-3">
                </li>
            </ul>
        </div>
    </div>
    <div class="gq-ajax-loader-container text-center">
        <img class="gq-ajax-loader" src="/static/img/loader.gif" />
    </div>
</section>