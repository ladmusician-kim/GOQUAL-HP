<?php
class Core_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function get_all_count () {
        return $this->db->count_all_results('core');
    }

    function get_by_id($core_id)
    {
        $this->db->limit(1);
        $this->db->select('core._coreid, core.title, core.content, core.updated, core.isdeprecated, user.profile_uri, user.username');
        $this->db->from('core');
        $this->db->where('core._coreid = ' . $core_id);
        $this->db->where('core.isdeprecated = false');
        $this->db->join('user', 'user._id = core.for_userid');

        return $this->db->get()->result();
        //return $this->db->get_where('core', array('_coreid'=>$core_id))->row();
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
        $this->db->where('core.isdeprecated = false');
        $this->db->order_by("core._coreid", "desc");
        $this->db->join('user', 'user._id = core.for_userid');

        $result = $this->db->get()->result();

        $base_dto->set_value($result);

        return $base_dto;
    }
}   