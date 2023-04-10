<?php
class Type_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать тип|Кузнецов
    public function sel_type()
    {
        $query = $this->db->get('type');
        return $query->result_array();
    }
    
}