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
        
        $this->load->view("template/header");
        $this->load->view("template/navbar_methodist", $data);
        $this->load->view("page/browse_category");
        $this->load->view("template/footer");
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

        $this->load->view("template/header");
        $this->load->view("template/navbar_methodist", $data);
        $this->load->view("page/browse_type");
        $this->load->view("template/footer");
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

        $this->load->view("template/header");
        $this->load->view("template/navbar_methodist", $data);
        $this->load->view("page/browse_form");
        $this->load->view("template/footer");
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

        $this->load->view("template/header");
        $this->load->view("template/navbar_methodist", $data);
        $this->load->view("page/browse_type_doc");
        $this->load->view("template/footer");
    }
}
?>