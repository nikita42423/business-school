<?php
class Form extends CI_Controller {
    
    //Добавление формы|Кузнецов
	public function add_form()
	{
        if (!empty($_POST))
        {
            $data = array(
                'name_form' => $this->input->post('name_form')
            );

            $this->load->model('form_m');
            $this->form_m->add_form($data);

            redirect(base_url('methodist/browse_form'));
        }
    }

    //Удаление формы|Кузнецов
	public function del_form()
	{
        $data = array(
            'ID_form' => $this->input->get('ID_form')
        );

        $this->load->model('form_m');
        $this->form_m->del_form($data);

        redirect(base_url('methodist/browse_form'));
    }
}