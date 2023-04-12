<?php
class Director extends CI_Controller {
    
    //Рейтинг преподавателей | Харламоа
	public function browse_diretor()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }
        $date1 = "0000-01-01";
        $date2 = "2100-01-01";
        
        if (!empty($this->input->post('date1'))) {
            $date1 = $this->input->post('date1');
        }

        if (!empty($this->input->post('date2'))) {
            $date2 = $this->input->post('date2');
        }

        //Данные из БД
        $this->load->model('reintech_m');
        $data['reinteachers'] = $this->reintech_m->sel_reinteach($date1, $date2);
        
        $this->load->view("template/header");
        $this->load->view("template/navbar_director", $data);
        $this->load->view("page/browse_reinteachers");
        $this->load->view("template/footer");
    }

     //Рейтинг программ обучения | Харламоа
	public function browse_diretor_prog()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }
        $date1 = "0000-01-01";
        $date2 = "2100-01-01";
        
        if (!empty($this->input->post('date1'))) {
            $date1 = $this->input->post('date1');
        }

        if (!empty($this->input->post('date2'))) {
            $date2 = $this->input->post('date2');
        }

        //Данные из БД
        $this->load->model('reintech_m');
        $data['reinprom'] = $this->reintech_m->sel_reinprog($date1, $date2);
        
        $this->load->view("template/header");
        $this->load->view("template/navbar_director", $data);
        $this->load->view("page/browse_reinprogmobus");
        $this->load->view("template/footer");
    }


     //Отчет об объемах услуг по формам обучения | Харламоа
	public function browse_otchuslformobus()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }
        $date1 = "0000-01-01";
        $date2 = "2100-01-01";
        
        if (!empty($this->input->post('date1'))) {
            $date1 = $this->input->post('date1');
        }

        if (!empty($this->input->post('date2'))) {
            $date2 = $this->input->post('date2');
        }

        //Данные из БД
        $this->load->model('otcht_m');
        $data['otcht'] = $this->otcht_m->sel_otcht($date1, $date2);
        
        $this->load->view("template/header");
        $this->load->view("template/navbar_director", $data);
        $this->load->view("page/browse_otchuslformobus");
        $this->load->view("template/footer");
    }

     //Список слушателей по выбранный программе| Харламоа
	public function browse_spicslusprog()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }
        
        $ID_program = $this->input->post('ID_program');

        $date1 = "0000-01-01";
        $date2 = "2100-01-01";

        if (!empty($this->input->post('date1'))) {
            $date1 = $this->input->post('date1');
        }

        if (!empty($this->input->post('date2'))) {
            $date2 = $this->input->post('date2');
        }

       
        

        //Данные из БД
        $this->load->model('otcht_m');
        $data['spick'] = $this->otcht_m->sel_spick($date1, $date2, $ID_program);
        echo var_dump($this->db->last_query());
        $data['prog'] = $this->otcht_m->sel_spickok();
        $this->load->view("template/header");
        $this->load->view("template/navbar_director", $data);
        $this->load->view("page/browse_spicslusprog");
        $this->load->view("template/footer");
    }


}
