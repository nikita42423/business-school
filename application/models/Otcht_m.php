<?php
class Otcht_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

   //Отчет об объемах услуг по формам обучения | Харламоа
    public function sel_otcht($date1, $date2)
    {
       
        $query = $this->db->select('program.name_program, category.name_category, COUNT(actual_count_listener)')
                            ->select('COUNT(CASE WHEN form.name_form = "Очная" THEN 1 END)')
                            ->select('COUNT(CASE WHEN form.name_form = "Заочная" THEN 1 END)')
                            ->select('COUNT(CASE WHEN form.name_form = "Очно-заочная" THEN 1 END)')
                            ->select('COUNT(CASE WHEN form.name_form = "Дистанционная" THEN 1 END)')
                            ->from('program, teaching, schedule, category, form')
                            ->where('teaching.ID_schedule = schedule.ID_schedule')
                            ->where('schedule.ID_program = program.ID_program')
                            ->where('program.ID_form = form.ID_form')
                            ->where('program.ID_category = category.ID_category ')
                            ->where("schedule.date_start_s BETWEEN '$date1' AND '$date2'")
                            ->group_by('program.name_program, category.name_category')
                            ->get();
        return $query->result_array();
    }


    //Отчет об объемах услуг по формам обучения | Харламоа
    public function sel_spick($date1, $date2)
    {
       
        $query = $this->db->select('program.name_program, category.name_category, COUNT(actual_count_listener)')
                            ->select('COUNT(CASE WHEN form.name_form = "Очная" THEN 1 END)')
                            ->select('COUNT(CASE WHEN form.name_form = "Заочная" THEN 1 END)')
                            ->select('COUNT(CASE WHEN form.name_form = "Очно-заочная" THEN 1 END)')
                            ->select('COUNT(CASE WHEN form.name_form = "Дистанционная" THEN 1 END)')
                            ->from('program, teaching, schedule, category, form')
                            ->where('teaching.ID_schedule = schedule.ID_schedule')
                            ->where('schedule.ID_program = program.ID_program')
                            ->where('program.ID_form = form.ID_form')
                            ->where('program.ID_category = category.ID_category ')
                            ->where("schedule.date_start_s BETWEEN '$date1' AND '$date2'")
                            ->group_by('program.name_program, category.name_category')
                            ->get();
        return $query->result_array();
    }
   
    
}
