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
    
}