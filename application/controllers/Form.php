<?php
class Form extends CI_Controller {
    
    //Добавление формы обучения|Кузнецов
	public function add_form()
	{
        if (!empty($_POST))
        {
            $data = array(
                'name_form' => $this->input->post('name_form')
            );

            $this->load->model('form_m');
            $this->form_m->add_form($data);
            
            //Сообщение об успеха
            $this->session->set_flashdata('msg', 'Успешно добавлен!');

            redirect(base_url('methodist/browse_form'));
        }
    }

    //Удаление формы обучения|Кузнецов
	public function del_form()
	{
        $data = array(
            'ID_form' => $this->input->get('ID_form')
        );

        $this->load->model('form_m');
        $this->form_m->del_form($data);

        //Сообщение об успеха
        $this->session->set_flashdata('msg', 'Успешно удален!');

        redirect(base_url('methodist/browse_form'));
    }

    //Изменение формы обучения|Кузнецов
	public function upd_form()
	{
        $id   = $this->input->post('ID_form');
        $data = array(
            'name_form' => $this->input->post('name_form')
        );

        $this->load->model('form_m');
        $this->form_m->upd_form($id, $data);

        //Сообщение об успеха
        $this->session->set_flashdata('msg', 'Успешно изменен!');

        redirect(base_url('methodist/browse_form'));
    }
}