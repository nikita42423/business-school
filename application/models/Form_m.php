<?php
class Form_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать форму|Кузнецов
    public function sel_form()
    {
        $query = $this->db->get('form');
        return $query->result_array();
    }
    
}