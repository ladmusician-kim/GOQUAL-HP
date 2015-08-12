<?php

class Core_category_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function gets()
    {
        $this->db->select('_categoryid, label, isdeprecated');
        $this->db->where(array('isdeprecated' => false));
        $this->db->from('core_category');
        return $this->db->get()->result();
    }
}