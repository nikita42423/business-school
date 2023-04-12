<?php
class Form_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать форму обучения|Кузнецов
    public function sel_form()
    {
        $query = $this->db->get('form');
        return $query->result_array();
    }

    //Добавить форму обучения|Кузнецов
    public function add_form($data)
    {
        $this->db->insert('form', $data);
    }

    //Удалить форму обучения|Кузнецов
    public function del_form($data)
    {
        $this->db->delete('form', $data);
    }

    //Изменить форму обучения|Кузнецов
    public function upd_form($id, $data)
    {
        $this->db->where('ID_form', $id)
                 ->update('form', $data);
    }
}