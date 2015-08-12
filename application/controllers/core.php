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
        $this->load->model('core_category_model');
        $categories = $this->core_category_model->gets();
        $this->__get_views('_CORE/index', array('categories' => $categories));
    }

    function detail()
    {
        $core_id = $this->input->get('coreid');

        if ($core_id === false || $core_id === null) {
            redirect('core/index');
        }

        $rtv = $this->core_model->get_by_id($core_id);

        if ($rtv == null || count($rtv) == 0) {
            redirect('core/index');
        }
        $core = $rtv[0];

        $this->__get_views('_CORE/detail', array('item' => $core));
    }
}
