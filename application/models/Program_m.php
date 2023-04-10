<?php
class Program_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать программу|Кузнецов
    public function sel_program()
    {
        $query = $this->db->where('program.ID_category = category.ID_category')
                          ->where('program.ID_type = type.ID_type')
                          ->where('program.ID_form = form.ID_form')
                          ->where('program.ID_type_doc = type_doc.ID_type_doc')
                          ->where('program.ID_teacher = teacher.ID_teacher')
                          ->get('program, category, type, form, type_doc, teacher');
        return $query->result_array();
    }
    
}