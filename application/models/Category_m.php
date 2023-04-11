<?php
class Category_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать категорию|Кузнецов
    public function sel_category()
    {
        $query = $this->db->get('category');
        return $query->result_array();
    }
    
    //Добавить категорию|Кузнецов
    public function add_category($data)
    {
        $this->db->insert('category', $data);
    }

    //Удалить категорию|Кузнецов
    public function del_category($data)
    {
        $this->db->delete('category', $data);
    }
}