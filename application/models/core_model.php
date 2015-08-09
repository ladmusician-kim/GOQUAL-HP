<?php
class Core_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function get_all_count () {
        return $this->db->count_all_results('core');
    }
    function get_by_id($core_id){
        return $this->db->get_where('core', array('_coreid'=>$core_id))->row();
    }
    function get_items($page = 1, $per_page = 10) {
        $base_dto = new BASE_DTO;

        if ($page === 1) {
            $this->db->limit($per_page);

        } else {
            $this->db->limit($per_page, ($page - 1) * $per_page);
        }

        $this->db->select('core._coreid, core.title, core.summary, core.main_img_uri, core.updated, user.username');
        $this->db->from('core');
        $this->db->join('user', 'user._id = core.for_userid');

        $result = $this->db->get()->result();

        $base_dto->set_value($result);
        return $base_dto;
    }
}   