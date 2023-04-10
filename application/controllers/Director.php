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


}
