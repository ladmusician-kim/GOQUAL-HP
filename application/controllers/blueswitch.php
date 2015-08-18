<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Blueswitch extends GQ_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('core_model');
    }

    function index()
    {
        $this->__get_views('_BLUESWITCH/index');
    }
}
