<?php
class Type_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать вид|Кузнецов
    public function sel_type()
    {
        $query = $this->db->get('type');
        return $query->result_array();
    }

    //Добавить вид|Кузнецов
    public function add_type($data)
    {
        $this->db->insert('type', $data);
    }

    //Удалить вид|Кузнецов
    public function del_type($data)
    {
        $this->db->delete('type', $data);
    }

    //Изменить вид|Кузнецов
    public function upd_type($id, $data)
    {
        $this->db->where('ID_type', $id)
                 ->update('type', $data);
    }
}