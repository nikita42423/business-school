<?php
class Teacher_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать преподаватель|Кузнецов
    public function sel_teacher()
    {
        $query = $this->db->get('teacher');
        return $query->result_array();
    }
    
}