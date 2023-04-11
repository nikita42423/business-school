<?php
class Type_doc_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать вид документа|Кузнецов
    public function sel_type_doc()
    {
        $query = $this->db->get('type_doc');
        return $query->result_array();
    }
    
    //Добавить вид документа|Кузнецов
    public function add_type_doc($data)
    {
        $this->db->insert('type_doc', $data);
    }

    //Удалить вид документа|Кузнецов
    public function del_type_doc($data)
    {
        $this->db->delete('type_doc', $data);
    }
}