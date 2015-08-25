<?php
foreach($items['first'] as $item) {
    ?>
    <div class="inner">
        <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
            <img class="gq-ds-item-img" src="<?php echo $item->main_img_uri?>" />
        </a>

        <p class="gq-ds-item-container">
            <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
                <span class="title"><?php echo $item->title ?></span>
                <span class="summary"><?php echo $item->summary ?></span>
            </a>
            <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
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
        <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
            <img class="gq-ds-item-img"
                 id="<?php echo $item->_designerid ?>"
                 src="<?php echo $item->main_img_uri?>" />
        </a
        <p class="gq-ds-item-container">
            <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
                <span class="title"><?php echo $item->title ?></span>
                <span class="summary"><?php echo $item->summary ?></span>
            </a>
            <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
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
        <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
            <img class="gq-ds-item-img"
                 id="<?php echo $item->_designerid ?>"
                 src="<?php echo $item->main_img_uri?>" />
        </a>
        <p class="gq-ds-item-container">
            <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
                <span class="title"><?php echo $item->title ?></span>
                <span class="summary"><?php echo $item->summary ?></span>
            </a>
            <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
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
        <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
            <img class="gq-ds-item-img"
                 id="<?php echo $item->_designerid ?>"
                 src="<?php echo $item->main_img_uri?>" />
        </a>
        <p class="gq-ds-item-container">
            <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
                <span class="title"><?php echo $item->title ?></span>
                <span class="summary"><?php echo $item->summary ?></span>
            </a>
            <a href="<?php echo base_url();?>designer/detail?designerid=<?php echo $item->_designerid ?>">
                <span class="info"><?php echo date ("Y-m-d",strtotime($item->updated)); ?> | <?php echo $item->username ?>  </span>
            </a>
        </p>
    </div>
    <?php
}
?>
