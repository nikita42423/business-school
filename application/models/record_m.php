<?php
class Record_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать клиент|Пручковский
    public function sel_record()
    {
        $query = $this->db->select("*")
                          ->from("`program`,`type`,`type_doc`,`form`,`category`,`teacher`")
                          ->where("program.ID_category=category.ID_category")
                          ->where("program.ID_type=type.ID_type")
                          ->where("program.ID_type_doc=type_doc.ID_type_doc")
                          ->where("program.ID_form=form.ID_form")
                          ->where("program.ID_teacher=teacher.ID_teacher")
                          ->get();
        return $query->result_array();
    }

    //Выбрать категория|Пручковский
    public function sel_category()
    {
        $query = $this->db->get('category');
        return $query->result_array();
    }

    //Выбрать фид|Пручковский
    public function sel_type()
    {
        $query = $this->db->get('type');
        return $query->result_array();
    }

    //Выбрать форма|Пручковский
    public function sel_form()
    {
        $query = $this->db->get('form');
        return $query->result_array();
    }

    //Выбрать форма|Пручковский
    public function sel_teaching()
    {
        $query = $this->db->select("*")
                          ->from("`teaching`,`client`,`schedule`,`program`")
                          ->where("`teaching`.`ID_client`=`client`.`ID_client`")
                          ->where("`teaching`.`ID_schedule`=`schedule`.`ID_schedule`")
                          ->where("`schedule`.`ID_program`=`program`.`ID_program`")
                          ->get();
        return $query->result_array();
    }
}