    <?php
        foreach($items['first'] as $item) {
    ?>
        <div class="inner">
            <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                <img class="gq-core-item-img" src="<?php echo $item->main_img_uri?>" />
            </a>

            <p class="gq-core-item-container">
                <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                    <span class="title"><?php echo $item->title ?> <span class="category"> | <?php echo $item->label ?></span></span>
                    <span class="summary"><?php echo $item->summary ?></span>
                </a>
                <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                    <span class="info"><?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?>  </span>
                </a>
            </p>
        </div>
    <?php
        }
    ?>
    <?php
    foreach($items['second'] as $item) {
        ?>
        <div class="inner">
            <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                <img class="gq-core-item-img" src="<?php echo $item->main_img_uri?>" />
            </a>

            <p class="gq-core-item-container">
                <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                    <span class="title"><?php echo $item->title ?> | <?php echo $item->label ?></span>
                    <span class="summary"><?php echo $item->summary ?></span>
                </a>
                <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                    <span class="info"><?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?>  </span>
                </a>
            </p>
        </div>
        <?php
    }
    ?>
    <?php
    foreach($items['third'] as $item) {
        ?>
        <div class="inner">
            <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                <img class="gq-core-item-img" src="<?php echo $item->main_img_uri?>" />
            </a>

            <p class="gq-core-item-container">
                <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                    <span class="title"><?php echo $item->title ?> | <?php echo $item->label ?></span>
                    <span class="summary"><?php echo $item->summary ?></span>
                </a>
                <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                    <span class="info"><?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?>  </span>
                </a>
            </p>
        </div>
        <?php
    }
    ?>
    <?php
    foreach($items['fourth'] as $item) {
        ?>
        <div class="inner">
            <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                <img class="gq-core-item-img" src="<?php echo $item->main_img_uri?>" />
            </a>

            <p class="gq-core-item-container">
                <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                    <span class="title"><?php echo $item->title ?> | <?php echo $item->label ?></span>
                    <span class="summary"><?php echo $item->summary ?></span>
                </a>
                <a href="<?php echo base_url();?>core/detail?coreid=<?php echo $item->_coreid ?>">
                    <span class="info"><?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?>  </span>
                </a>
            </p>
        </div>
        <?php
    }
    ?>
