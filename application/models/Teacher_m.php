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

    //Добавить преподаватель|Кузнецов
    public function add_teacher($data)
    {
        $this->db->insert('teacher', $data);
    }

    //Удалить преподаватель|Кузнецов
    public function del_teacher($data)
    {
        $this->db->delete('teacher', $data);
    }
}