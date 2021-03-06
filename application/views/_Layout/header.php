<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <title>GOQUAL</title>
    <meta name="keywords" content="블루투스,블루투스4.0,IOT,사물인터넷,홈네트워크,smart,home,smarthome,스위치,switch,control,컨트롤,조명제어,조명,제어" />
    <meta name="description" content="사물인터넷, 홈네트워크, 스마트 스위치, 스마트 홈, 조명제어, 안드로이드 조명제어, 아이폰 조명제어, IOT" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/static/img/gq_symbol.png" />

    <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>static/css/common.css" rel="stylesheet">
    <link href="/static/lib/animation/animate.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>

    <?php
    $total_url = $_SERVER['PHP_SELF'];
    $arr_splitted_url = explode('/', $total_url);

    if ($arr_splitted_url[count($arr_splitted_url) - 1] === "") {
        unset($arr_splitted_url[count($arr_splitted_url) - 1]);
    }

    $ctrl_name = $arr_splitted_url[count($arr_splitted_url) - 2];
    $view_name = $arr_splitted_url[count($arr_splitted_url) - 1];
    $filename = "";

    if ($ctrl_name == 'index.php') {
        $filename = 'static/css/'.strtolower($view_name).'/index.css';
    } else {
        $filename = 'static/css/'.strtolower($ctrl_name).'/'.strtolower($view_name).'.css';
    }

    if(file_exists($filename)) {
    ?>
    <link href="/GOQUAL/<?php echo $filename; ?>" rel="stylesheet">
    <?php
    }
    if (strpos($filename, 'index.php')) {
    ?>
    <link href="/GOQUAL/static/css/home/index.css" rel="stylesheet">
    <?php
    }
    if (strpos($filename, 'index.php') || strpos($filename, 'home')) {
    ?>
    <script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3.exp&region=KR"></script>
    <?php
    }
    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-66281996-1', 'auto');
        ga('send', 'pageview');

    </script>
    <?php
    if (strpos($filename, 'detail')) {
    ?>
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo $item->title?>">
        <meta property="og:description" content="<?php echo $item->summary?>">
    <?php
    }
    ?>
</head>
<body>

<!--<div class="gq-page-loader"></div>-->
<div class="gq-body-container">