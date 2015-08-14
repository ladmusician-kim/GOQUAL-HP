<?php

class Report_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_all_count()
    {
        return $this->db->count_all_results('report');
    }

    function get_by_id($report_id)
    {
        $this->db->limit(1);
        $this->db->select('*');
        $this->db->from('report');
        $this->db->where('report._reportid = ' . $report_id);
        $this->db->where('report.isdeprecated = false');

        return $this->db->get()->result();
    }

    function get_items($page = 1, $per_page = 10)
    {
        $base_dto = new BASE_DTO;

        if ($page === 1) {
            $this->db->limit($per_page);

        } else {
            $this->db->limit($per_page, ($page - 1) * $per_page);
        }

        $this->db->select('*');
        $this->db->from('report');
        $this->db->where('report.isdeprecated = false');
        $this->db->order_by('_reportid', 'desc');

        $result = $this->db->get()->result();

        $base_dto->set_value($result, false);
        return $base_dto;
    }
}   