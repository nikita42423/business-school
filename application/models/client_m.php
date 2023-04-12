<?php
class Client_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать клиент|Пручковский
    public function sel_client()
    {
        $query = $this->db->get('client');
        return $query->result_array();
    }

    //Добавить клиент|Пручковский
    public function add_client($data)
    {
        $this->db->insert('client', $data);
    }

    //Изменить клиент|Пручковский
    public function upd_client($ID_client,$data)
    {
        $this->db->where('ID_client', $ID_client)
                 ->update('client', $data);
    }

    //Удалить клиента|Пручковский
    public function del_client($data)
    {
        $this->db->delete('client', $data);
    }

}