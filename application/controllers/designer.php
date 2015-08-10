<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Designer extends GQ_Controller {

    function __construct () {
        parent::__construct();
        $this->load->model('designer_model');
    }

    function index()
    {
        $this->__get_views('_DESIGNER/index');
    }

    function detail()
    {
        $designer_id = $this->input->get('designerid');

        if ($designer_id === false || $designer_id === null) {
            redirect('designer/index');
        }

        $rtv = $this->designer_model->get_by_id($designer_id);

        if ($rtv == null || count($rtv) == 0) {
            redirect('designer/index');
        }
        $designer = $rtv[0];

        $this->__get_views('_DESIGNER/detail', array('item' => $designer));
    }
}
