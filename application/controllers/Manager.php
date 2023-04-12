<?php
	class Manager extends CI_Controller {
    
    //Просмотр запись|Пручковский
	public function browse_record()
	{
        //Сессия
		$data['session'] = $this->session->userdata('login_session');
       
        $this->load->model('manager_m');
        $data['teaching'] = $this->manager_m->sel_teaching();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar_manager', $data);
        $this->load->view('pages/record', $data);
        $this->load->view('templates/footer');
    }

    //Просмотр графика курсов|Пручковский
	public function browse_add_record()
	{
        $this->load->model('manager_m');

        if (!empty($_POST['category']))
        {
            $ID_category  = $this->input->post('ID_category');
            $data['record'] = $this->manager_m->sel_category_filter($ID_category);
        }
        elseif (!empty($_POST['type']))
        {
            $ID_type  = $this->input->post('ID_type');
            $data['record'] = $this->manager_m->sel_type_filter($ID_type);
        }
        elseif (!empty($_POST['from']))
        {
            $ID_form  = $this->input->post('ID_form');
            $data['record'] = $this->manager_m->sel_form_filter($ID_form);
        }
        elseif (!empty($_POST['num']))
        {
            $number  = $this->input->post('number');
            $data['record'] = $this->manager_m->sel_number_filter($number);
        }
        else
        {
            $data['record'] = $this->manager_m->sel_record();
        }

        $data['category'] = $this->manager_m->sel_category();
        $data['type'] = $this->manager_m->sel_type();
        $data['form'] = $this->manager_m->sel_form();
        $data['schedule'] = $this->manager_m->sel_schedule();

        //Сессия
        $data['filter']  = $this->session->userdata('filter');
        $data['session'] = $this->session->userdata('login_session');
        
        $this->load->view('templates/header');
        $this->load->view('templates/navbar_manager', $data);
        $this->load->view('pages/add_record', $data);
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

    //Отметка об окончании обучения|Пручковский
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

    //Просмотр клиент|Пручковский
	public function browse_client()
	{
        //Сессия
		$data['session'] = $this->session->userdata('login_session');

        $this->load->model('client_m');
        $data['client'] = $this->client_m->sel_client();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar_manager', $data);
        $this->load->view('pages/client', $data);
        $this->load->view('templates/footer');
    }

    //Добавление клиент|Пручковский
	public function add_client()
	{
        if (!empty($_POST))
        {
            $data = array(
                'full_name_client' => $this->input->post('fio'),
                'date_client'      => $this->input->post('date'),
                'pol'              => $this->input->post('pol'),
                'series'           => $this->input->post('serie'),
                'passport_number'  => $this->input->post('number'),
                'address'          => $this->input->post('adress'),
                'education'        => $this->input->post('education'),
                'phone'            => $this->input->post('tel'),
                'email'            => $this->input->post('email')
            );
            
            $this->load->model('client_m');
            $this->client_m->add_client($data);

            redirect(base_url('manager/browse_client'));
        }
    }

    //Изменение клиента|Пручковский
    public function upd_client()
    {
        $ID_client        = $this->input->post('ID_client');
        $full_name_client = $this->input->post('fio');
        $date_client      = $this->input->post('date');
        $pol              = $this->input->post('pol');
        $series           = $this->input->post('serie');
        $passport_number  = $this->input->post('number');
        $address          = $this->input->post('adress');
        $education        = $this->input->post('education');
        $phone            = $this->input->post('tel');
        $email            = $this->input->post('email');

        $this->load->model('client_m');
        $this->client_m->upd_client($full_name_client, $date_client, $pol, $series, 
        $passport_number, $address, $education, $phone, $email, $ID_client);

        redirect('manager/browse_client');
    }

    //Удаление клиента|Пручковский
    public function del_client()
    {
        $data = array(
            'ID_client' => $this->input->post('ID_client')
        );

        $this->load->model('client_m');
        $this->client_m->del_client($data);
        
        redirect('manager/browse_client');
    }
    
    //Просмотр пользователи|Пручковский
	public function browse_user()
	{
        //Сессия
		$data['session'] = $this->session->userdata('login_session');

        $this->load->model('user_m');
        $data['user'] = $this->user_m->sel_user_table();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar_manager', $data);
        $this->load->view('pages/user', $data);
        $this->load->view('templates/footer');
    }

    //Добавление пользователя|Пручковский
	public function add_user()
	{
        if (!empty($_POST))
        {
            $full_name_user = $this->input->post('fio');
            $position       = $this->input->post('position');
            $login          = $this->input->post('login');
            $password       = $this->input->post('password');
            
            $this->load->model('user_m');
            $this->user_m->add_user($full_name_user, $position, $login, $password);

            redirect(base_url('manager/browse_user'));
        }
    }

    //Изменение пользователя|Пручковский
    public function upd_user()
    {
        if (!empty($_POST))
        {
            $ID_user        = $this->input->post('ID_user');
            $full_name_user = $this->input->post('fio');
            $position       = $this->input->post('position');
            $login          = $this->input->post('login');
            $password       = $this->input->post('password');

            $this->load->model('user_m');
            $this->user_m->upd_user($full_name_user, $position, $login, $password, $ID_user);
            redirect('manager/browse_user');
        }
    }

    //Удаление пользователя|Пручковский
    public function del_user()
    {
        $data = array(
            'ID_user' => $this->input->post('ID_user')
        );

        $this->load->model('user_m');
        $this->user_m->del_user($data);
        
        redirect('manager/browse_user');
    }

}
?>