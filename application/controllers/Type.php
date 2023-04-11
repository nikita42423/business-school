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

        redirect(base_url('methodist/browse_type'));
    }
}