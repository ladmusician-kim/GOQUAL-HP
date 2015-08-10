<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Core extends GQ_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('core_model');
    }

    function index()
    {
        $this->__get_views('_CORE/index');
    }

    function detail()
    {
        $core_id = $this->input->get('coreid');

        if ($core_id === false || $core_id === null) {
            redirect('_CORE/index');
        }

        $rtv = $this->core_model->get_by_id($core_id);

        if ($rtv == null || count($rtv) == 0) {
            redirect('_CORE/index');
        }
        $core = $rtv[0];

        $this->__get_views('_CORE/detail', array('item' => $core));
    }
}
