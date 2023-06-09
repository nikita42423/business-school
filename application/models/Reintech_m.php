<?php
class Reintech_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    // Рейтинг преподавателей | Харламов
    public function sel_reinteach($date1, $date2)
    {
       
        $query = $this->db->select('teacher.full_name_teacher, COUNT(client.ID_client), COUNT(client.ID_client)*SUM(program.Price)')
                            ->from('client, teacher, teaching, program, schedule')
                            ->where('schedule.ID_program = program.ID_program')
                            ->where('program.ID_teacher = teacher.ID_teacher')
                            ->where('teaching.ID_client = client.ID_client')
                            ->where("schedule.date_start_s BETWEEN '$date1' AND '$date2'")
                            ->group_by('full_name_teacher')
                            ->order_by('COUNT(client.ID_client)*SUM(program.Price)', 'DESC')
                            ->get();
        return $query->result_array();
    }

    // Рейтинг программ обучения | Харламов
    public function sel_reinprog($date1, $date2)
    {
       
        $query = $this->db->select('category.name_category, program.name_program, program.Price, COUNT(teaching.ID_client), SUM(teaching.ID_client)*program.Price')
                            ->from('category, teaching, program, schedule, client')
                            ->where('program.ID_category = category.ID_category')
                            ->where('teaching.ID_schedule = schedule.ID_schedule')
                            ->where('teaching.ID_client = client.ID_client')
                            ->where("schedule.date_start_s BETWEEN '$date1' AND '$date2'")
                            ->group_by('category.name_category, program.name_program, program.Price')
                            ->get();
        return $query->result_array();
    }
    
}

