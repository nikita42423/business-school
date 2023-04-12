<?php
class Manager_m extends CI_Model {

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

    //Выбрать категория для фильтр|Пручковский
    public function sel_category_filter($ID_category = null)
    {
        $query = $this->db->select("*")
                          ->from("`program`,`type`,`type_doc`,`form`,`category`,`teacher`")
                          ->where("program.ID_category=category.ID_category")
                          ->where("program.ID_type=type.ID_type")
                          ->where("program.ID_type_doc=type_doc.ID_type_doc")
                          ->where("program.ID_form=form.ID_form")
                          ->where("program.ID_teacher=teacher.ID_teacher")
                          ->where("program.ID_category=$ID_category")
                          ->get();
        return $query->result_array();
    }

    //Выбрать вид для фильтр|Пручковский
    public function sel_type_filter($ID_type = null)
    {
        $query = $this->db->select("*")
                          ->from("`program`,`type`,`type_doc`,`form`,`category`,`teacher`")
                          ->where("program.ID_category=category.ID_category")
                          ->where("program.ID_type=type.ID_type")
                          ->where("program.ID_type_doc=type_doc.ID_type_doc")
                          ->where("program.ID_form=form.ID_form")
                          ->where("program.ID_teacher=teacher.ID_teacher")
                          ->where("program.ID_type=$ID_type")
                          ->get();
        return $query->result_array();
    }

    //Выбрать форм для фильтр|Пручковский
    public function sel_form_filter($ID_form = null)
    {
        $query = $this->db->select("*")
                          ->from("`program`,`type`,`type_doc`,`form`,`category`,`teacher`")
                          ->where("program.ID_category=category.ID_category")
                          ->where("program.ID_type=type.ID_type")
                          ->where("program.ID_type_doc=type_doc.ID_type_doc")
                          ->where("program.ID_form=form.ID_form")
                          ->where("program.ID_teacher=teacher.ID_teacher")
                          ->where("program.ID_form=$ID_form")
                          ->get();
        return $query->result_array();
    }

    //Выбрать макс.стоимость для фильтр|Пручковский
    public function sel_number_filter($number = null)
    {
        $query = $this->db->select("*")
                          ->from("`program`,`type`,`type_doc`,`form`,`category`,`teacher`")
                          ->where("program.ID_category=category.ID_category")
                          ->where("program.ID_type=type.ID_type")
                          ->where("program.ID_type_doc=type_doc.ID_type_doc")
                          ->where("program.ID_form=form.ID_form")
                          ->where("program.ID_teacher=teacher.ID_teacher")
                          ->where("program.price <=$number")
                          ->get();
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

    //Выбрать клиента|Пручковский
    public function sel_client()
    {
        $query = $this->db->get('client');
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

    //Выбрать графика курсов|Пручковский
    public function sel_schedule($ID_program = null)
    {
        $query = $this->db->select("*")
                          ->from("`schedule`,`program`")
                          ->where("`schedule`.`ID_program`=`program`.`ID_program`")
                          ->where("`schedule`.`ID_program`=$ID_program")
                          ->get();
        return $query->result_array();
    }

    //Добавить запись|Пручковский
    public function add_record($data)
    {
        $this->db->insert('teaching', $data);
    }

    //Отметка об окончании обучения|Пручковский
    public function otm_record($ID_teaching, $number, $date_start_t)
    {
        $this->db->set('number_doc', $number)
                 ->set('date_end_t', $date_start_t)
                 ->where('ID_teaching', $ID_teaching)
                 ->update('teaching');
    }

}