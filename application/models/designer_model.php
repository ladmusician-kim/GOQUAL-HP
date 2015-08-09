<?php
class Designer_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function get_all_count () {
        return $this->db->count_all_results('designer');
    }
    function get_by_id($designer_id){
        return $this->db->get_where('designer', array('_designerid'=>$designer_id))->row();
    }
    function get_items($page = 1, $per_page = 10) {
        $base_dto = new BASE_DTO;

        if ($page === 1) {
            $this->db->limit($per_page);

        } else {
            $this->db->limit($per_page, ($page - 1) * $per_page);
        }

        $this->db->select('designer._designerid, designer.title, designer.summary, designer.main_img_uri, designer.updated, user.username');
        $this->db->from('designer');
        $this->db->join('user', 'user._id = designer.for_userid');

        $result = $this->db->get()->result();

        $base_dto->set_value($result);

        return $base_dto;
    }
}   