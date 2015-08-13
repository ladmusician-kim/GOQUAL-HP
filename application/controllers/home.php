<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends GQ_Controller {

    function __construct () {
        parent::__construct();
    }

    function index()
    {
        $is_mobile = (bool)preg_match('#\b(ip(hone|od)|android\b.+\bmobile|opera m(ob|in)i|windows (phone|ce)|blackberry'.
            '|s(ymbian|eries60|amsung)|p(alm|rofile/midp|laystation portable)|nokia|fennec|htc[\-_]'.
            '|up\.browser|[1-4][0-9]{2}x[1-4][0-9]{2})\b#i', $_SERVER['HTTP_USER_AGENT'] );
        if ($is_mobile) {
            $this->__get_mobile_views('_Home/index');
        } else {
            $this->__get_views('_Home/index');
        }
    }
}
