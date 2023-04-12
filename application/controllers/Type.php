<?php
class Type extends CI_Controller {
    
    //Добавление вида|Кузнецов
	public function add_type()
	{
        if (!empty($_POST))
        {
            $data = array(
                'name_type' => $this->input->post('name_type')
            );

            $this->load->model('type_m');
            $this->type_m->add_type($data);

            //Сообщение об успеха
            $this->session->set_flashdata('msg', 'Успешно добавлен!');

            redirect(base_url('methodist/browse_type'));
        }
    }

    //Удаление вида|Кузнецов
	public function del_type()
	{
        $data = array(
            'ID_type' => $this->input->get('ID_type')
        );

        $this->load->model('type_m');
        $this->type_m->del_type($data);

        //Сообщение об успеха
        $this->session->set_flashdata('msg', 'Успешно удален!');

        redirect(base_url('methodist/browse_type'));
    }

    //Изменение вида|Кузнецов
	public function upd_type()
	{
        $id   = $this->input->post('ID_type');
        $data = array(
            'name_type' => $this->input->post('name_type')
        );

        $this->load->model('type_m');
        $this->type_m->upd_type($id, $data);

        //Сообщение об успеха
        $this->session->set_flashdata('msg', 'Успешно изменен!');

        redirect(base_url('methodist/browse_type'));
    }
}