<nav class="navbar navbar-default navbar-static-top gq-navbar gq-main-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="<?= site_url('/static/img/home/gq_ci.png')?>" >
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse gq-navbar-collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-right gq-main-menu-nav">
                <li><a href="<?php echo base_url() ?>home">GOQUAL</a></li>
                <li>/</li>
                <li><a href="<?php echo base_url() ?>core">GOQUAL 블로그</a></li>
                <li>/</li>
                <li><a href="<?php echo base_url() ?>designer">디자인 블로그</a></li>
                <li>/</li>
                <li><a href="<?php echo base_url() ?>developer">개발 블로그</a></li>
            </ul>
        </div>
    </div>
</nav>
