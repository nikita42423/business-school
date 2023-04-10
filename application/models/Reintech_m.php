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
                            ->get();
        return $query->result_array();
    }
    
}