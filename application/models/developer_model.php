<?php

class Developer_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_all_count()
    {
        return $this->db->count_all_results('developer');
    }

    function get_by_id($developer_id)
    {
        $this->db->limit(1);
        $this->db->select('developer._developerid, developer.title, developer.content, developer.updated, developer.isdeprecated, user.username');
        $this->db->from('developer');
        $this->db->where('developer._developerid = ' . $developer_id);
        $this->db->where('developer.isdeprecated = false');
        $this->db->join('user', 'user._id = developer.for_userid');

        return $this->db->get()->result();
        //return $this->db->get_where('developer', array('_developerid'=>$developer_id))->row();
    }

    function get_items($page = 1, $per_page = 10)
    {
        $base_dto = new BASE_DTO;

        if ($page === 1) {
            $this->db->limit($per_page);

        } else {
            $this->db->limit($per_page, ($page - 1) * $per_page);
        }

        $this->db->select('developer._developerid, developer.title, developer.summary, developer.updated, user.username');
        $this->db->from('developer');
        $this->db->where('developer.isdeprecated = false');
        $this->db->join('user', 'user._id = developer.for_userid');

        $result = $this->db->get()->result();

        $base_dto->set_value($result);
        return $base_dto;
    }
}   