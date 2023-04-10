<?php
class Schedule_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать график курсов|Кузнецов
    public function sel_schedule()
    {
        $query = $this->db->where('schedule.ID_program = program.ID_program')
                          ->get('schedule, program');
        return $query->result_array();
    }
    
}