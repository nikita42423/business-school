<?php
	class Record extends CI_Controller {
    
    //Просмотр запись|Пручковский
	public function browse_record()
	{
        //Сессия
		$data['session'] = $this->session->userdata('login_session');

        $this->load->model('record_m');
        $data['record'] = $this->record_m->sel_record();
        $data['category'] = $this->record_m->sel_category();
        $data['type'] = $this->record_m->sel_type();
        $data['form'] = $this->record_m->sel_form();
        $data['teaching'] = $this->record_m->sel_teaching();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar_manager', $data);
        $this->load->view('pages/record', $data);
        $this->load->view('templates/footer');
    }

    //Просмотр запись|Пручковский
	public function browse_add_record()
	{
        //Сессия
		$data['session'] = $this->session->userdata('login_session');

        $this->load->model('record_m');
        $data['record'] = $this->record_m->sel_record();
        $data['category'] = $this->record_m->sel_category();
        $data['type'] = $this->record_m->sel_type();
        $data['form'] = $this->record_m->sel_form();
        $data['teaching'] = $this->record_m->sel_teaching();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar_manager', $data);
        $this->load->view('pages/add_record', $data);
        $this->load->view('templates/footer');
    }
}
?>