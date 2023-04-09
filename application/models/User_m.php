<?php
class User_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать пользователя|Кузнецов
    public function sel_user($data)
    {
        $query = $this->db->where($data)
                          ->get('users');
                          
        if($query->num_rows()==1)
        {
            return $query->row();
        }
        else 
        {
            return false;
        }
        
    }

    //Уничтожение все сессии|Кузнецов
    public function kill_session()
    {
        $this->session->sess_destroy();
    }

}