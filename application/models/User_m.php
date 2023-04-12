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
    
    //Выбрать пользователя|Кузнецов
    public function sel_user_table()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    //Добавить пользователя|Пручковский
    public function add_user($full_name_user, $position, $login, $password)
    {
        $sql = "INSERT INTO `users`(`full_name_user`, `position`, `login`, `password`) 
        VALUES ('$full_name_user', '$position', '$login', md5('$password'))";
        $this->db->query($sql);
    }

    //Изменить пользователя|Пручковский
    public function upd_user($full_name_user, $position, $login, $password, $ID_user)
    {
        $this->db->set('full_name_user', $full_name_user)
                 ->set('position', $position)
                 ->set('login', $login)
                 ->set('password', md5($password))
                 ->where('ID_user', $ID_user)
                 ->update('users');
    }

    //Удалить пользователя|Пручковский
    public function del_user($data)
    {
        $this->db->delete('users', $data);
    }

}