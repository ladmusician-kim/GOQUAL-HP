<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends GQ_Controller
{
    function __construct()
    {
        parent::__construct();
    }


    function get_items()
    {

        $this->load->model('developer_model');
        $page = $this->input->get('page');
        $per_page = $this->input->get('per_page');

        if ($page === false || $per_page === false) {
            $page = 1;
            $per_page = 10;
        }

        $items = $this->developer_model->get_items($page, $per_page);
        $total_count = $this->developer_model->get_all_count();

        $last_page = ceil($total_count / $per_page);

        $view_data = array('items' => $items->return_body, 'page' => $page, 'per_page' => $per_page, 'last_page' => $last_page);
        $passe_data = array (
            'data' => $this->load->view('_PARTIAL/developer_item', $view_data, true),
            'page' => $page,
            'per_page' => $per_page,
            'total_count' => $total_count,
            'last_page' => $last_page
        );

        echo json_encode($passe_data);
    }
}
