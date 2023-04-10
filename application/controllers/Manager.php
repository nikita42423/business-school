<?php
	class Manager extends CI_Controller {
    
    //Просмотр запись|Пручковский
	public function browse_record()
	{
        //Сессия
		$data['session'] = $this->session->userdata('login_session');

        $this->load->model('manager_m');
        $data['record'] = $this->manager_m->sel_record();
        $data['category'] = $this->manager_m->sel_category();
        $data['type'] = $this->manager_m->sel_type();
        $data['form'] = $this->manager_m->sel_form();
        $data['teaching'] = $this->manager_m->sel_teaching();
        $data['schedule'] = $this->manager_m->sel_schedule();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar_manager', $data);
        $this->load->view('pages/record', $data);
        $this->load->view('templates/footer');
    }

    //Просмотр графика курсов|Пручковский
	public function browse_schedule()
	{
        //Сессия
		$data['session'] = $this->session->userdata('login_session');

        $ID_program = $this->input->post('ID_program');

        $this->load->model('manager_m');
        $data['teaching'] = $this->manager_m->sel_teaching();
        $data['schedule'] = $this->manager_m->sel_schedule($ID_program);
        $data['client'] = $this->manager_m->sel_client();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar_manager', $data);
        $this->load->view('pages/schedule', $data);
        $this->load->view('templates/footer');
    }

    //Добавление записи|Пручковский
	public function add_record()
	{
        if (!empty($_POST))
        {
            $data = array(
                'ID_schedule'  => $this->input->post('schedule'),
                'ID_client'    => $this->input->post('client'),
                'date_start_t' => $this->input->post('date_start')
            );
            
            $this->load->model('manager_m');
            $this->manager_m->add_record($data);

            redirect(base_url('manager/browse_record'));
        }
    }

    //Добавление записи|Пручковский
	public function otm_record()
	{
        if (!empty($_POST))
        {
            $ID_teaching  = $this->input->post('teaching');
            $number    = $this->input->post('number');
            $date_start_t = $this->input->post('date_end_t');
            
            $this->load->model('manager_m');
            $this->manager_m->otm_record($ID_teaching, $number, $date_start_t);

            redirect(base_url('manager/browse_record'));
        }
    }

}
?>