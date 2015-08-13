<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends GQ_Controller {

    function __construct () {
        parent::__construct();
        $this->load->model('report_model');
    }

    function index()
    {
        $this->__get_views('_REPORT/index');
    }

    function detail()
    {
        $report_id = $this->input->get('reportid');

        if ($report_id === false || $report_id === null) {
            redirect('report/index');
        }

        $rtv = $this->report_model->get_by_id($report_id);

        if ($rtv == null || count($rtv) == 0) {
            redirect('report/index');
        }
        $report = $rtv[0];

        $this->__get_views('_REPORT/detail', array('item' => $report));
    }
}
