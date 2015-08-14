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
        $this->db->select('core._coreid, core.title, core.summary, core.content, core.updated, core.isdeprecated, user.profile_uri, user.username, core_category.label');
        $this->db->from('core');
        $this->db->where('core._coreid = ' . $core_id);
        $this->db->where('core.isdeprecated = false');
        $this->db->join('user', 'user._id = core.for_userid');
        $this->db->join('core_category', 'core_category._categoryid = core.for_categoryid');

        return $this->db->get()->result();
    }
    function get_items($page = 1, $per_page = 10, $categoryid = -1) {
        $base_dto = new BASE_DTO;


        if ($page === 1) {
            $this->db->limit($per_page);

        } else {
            $this->db->limit($per_page, ($page - 1) * $per_page);
        }

        $this->db->select('core._coreid, core.title, core.summary, core.main_img_uri, core.updated, user.username, core_category.label');
        $this->db->from('core');
        $this->db->where('core.isdeprecated = false');
        $this->db->order_by("core._coreid", "desc");
        $this->db->join('user', 'user._id = core.for_userid');
        $this->db->join('core_category', 'core_category._categoryid = core.for_categoryid');

        if ($categoryid) {
            $this->db->where('core.for_categoryid = '.$categoryid);
        }

        $result = $this->db->get()->result();

        $base_dto->set_value($result, true);

        return $base_dto;
    }
}   