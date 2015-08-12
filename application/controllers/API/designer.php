<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designer extends GQ_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function get_items()
    {
        $this->load->model('designer_model');
        $page = $this->input->get('page');
        $per_page = $this->input->get('per_page');

        if ($page === false || $per_page === false) {
            $page = 1;
            $per_page = 9;
        }

        $items = $this->designer_model->get_items($page, $per_page);
        $total_count = $this->designer_model->get_all_count();

        $last_page = ceil($total_count / $per_page);

        $view_data = array('items' => $items->return_body, 'page' => $page, 'per_page' => $per_page, 'last_page' => $last_page);
        $passe_data = array (
            'data' => $this->load->view('_PARTIAL/designer_item', $view_data, true),
            'page' => $page,
            'per_page' => $per_page,
            'total_count' => $total_count,
            'last_page' => $last_page,
            'first_count' => $items->first_count,
            'second_count' => $items->second_count,
            'third_count' => $items->third_count,
            'fourth_count' => $items->fourth_count,
        );

        echo json_encode($passe_data);
    }
}
