<?php
class Client_m extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    //Выбрать клиент|Пручковский
    public function sel_client()
    {
        $query = $this->db->get('client');
        return $query->result_array();
    }

    //Добавить клиент|Пручковский
    public function add_client($data)
    {
        $this->db->insert('client', $data);
    }

    //Изменить клиент|Пручковский
    public function upd_client($full_name_client, $date_client, $pol, 
    $series, $passport_number, $address, $education, $phone, $email, $ID_client)
    {
        $this->db->set('full_name_client', $full_name_client)
                 ->set('date_client', $date_client)
                 ->set('pol', $pol)
                 ->set('series', $series)
                 ->set('passport_number', $passport_number)
                 ->set('address', $address)
                 ->set('education', $education)
                 ->set('phone', $phone)
                 ->set('email', $email)
                 ->where('ID_client', $ID_client)
                 ->update('client');
    }

    //Удалить клиента|Пручковский
    public function del_client($data)
    {
        $this->db->delete('client', $data);
    }

}