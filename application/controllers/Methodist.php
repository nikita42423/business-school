<?php
class Methodist extends CI_Controller {
    
    //Просмотр категории|Кузнецов
	public function browse_category()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }

        //Данные из БД
        $this->load->model('category_m');
        $data['category'] = $this->category_m->sel_category();
        
        $this->load->view("templates/header");
        $this->load->view("templates/navbar_methodist", $data);
        $this->load->view("pages/category");
        $this->load->view("templates/footer");
    }

    //Просмотр вида|Кузнецов
	public function browse_type()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }

        //Данные из БД
        $this->load->model('type_m');
        $data['type'] = $this->type_m->sel_type();

        $this->load->view("templates/header");
        $this->load->view("templates/navbar_methodist", $data);
<<<<<<< HEAD
        $this->load->view("pages/browse_type");
=======
        $this->load->view("pages/type");
>>>>>>> 57001b476258f78f7834dbc227dbf1931dd9d0ae
        $this->load->view("templates/footer");
    }

    //Просмотр формы|Кузнецов
	public function browse_form()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }

        //Данные из БД
        $this->load->model('form_m');
        $data['form'] = $this->form_m->sel_form();

        $this->load->view("templates/header");
        $this->load->view("templates/navbar_methodist", $data);
        $this->load->view("pages/form");
        $this->load->view("templates/footer");
    }

    //Просмотр вида документа|Кузнецов
	public function browse_type_doc()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }

        //Данные из БД
        $this->load->model('type_doc_m');
        $data['type_doc'] = $this->type_doc_m->sel_type_doc();

        $this->load->view("templates/header");
        $this->load->view("templates/navbar_methodist", $data);
        $this->load->view("pages/type_doc");
        $this->load->view("templates/footer");
    }

    //Просмотр преподаватели|Кузнецов
    public function browse_teacher()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }

        //Данные из БД
        $this->load->model('teacher_m');
        $data['teacher'] = $this->teacher_m->sel_teacher();

        $this->load->view("templates/header");
        $this->load->view("templates/navbar_methodist", $data);
        $this->load->view("pages/teacher");
        $this->load->view("templates/footer");
    }

    //Просмотр образовательной программы|Кузнецов
    public function browse_program()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }

        //Данные из БД
        $this->load->model('program_m');
        $data['program'] = $this->program_m->sel_program();

        $this->load->view("templates/header");
        $this->load->view("templates/navbar_methodist", $data);
        $this->load->view("pages/program");
        $this->load->view("templates/footer");
    }

    //Просмотр график курсов|Кузнецов
    public function browse_schedule()
	{
        //Сессия
        $data['session'] = $this->session->userdata('login_session');
        if (!isset($data['session']))
        {
        	$this->session->set_flashdata('msg', 'Истек срок действия сессии. Выполните вход.');
            redirect(base_url());
        }

        //Данные из БД
        $this->load->model('schedule_m');
        $data['schedule'] = $this->schedule_m->sel_schedule();

        $this->load->view("templates/header");
        $this->load->view("templates/navbar_methodist", $data);
        $this->load->view("pages/schedule");
        $this->load->view("templates/footer");
    }
}
?>