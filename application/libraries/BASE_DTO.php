<?php
class BASE_DTO {
    public $result, $return_body, $total_count;

    function set_value($data) {
        $this->result = TRUE;
        $this->return_body = $data;
        $this->total_count = count($data);
    }
}     
