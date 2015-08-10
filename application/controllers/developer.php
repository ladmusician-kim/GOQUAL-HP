<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Developer extends GQ_Controller {

    function __construct () {
        parent::__construct();
        $this->load->model('developer_model');
    }

    function index()
    {
        $this->__get_views('_DEVELOPER/index');
    }

    function detail()
    {
        $developer_id = $this->input->get('developerid');

        if ($developer_id === false || $developer_id === null) {
            redirect('developer/index');
        }

        $rtv = $this->developer_model->get_by_id($developer_id);

        if ($rtv == null || count($rtv) == 0) {
            redirect('developer/index');
        }
        $developer = $rtv[0];

        $this->__get_views('_DEVELOPER/detail', array('item' => $developer));
    }
}
