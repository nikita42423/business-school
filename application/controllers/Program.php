<?php
class Program extends CI_Controller {
    
    //Добавление образовательной программы|Кузнецов
	public function add_program()
	{
        if (!empty($_POST))
        {
            $data = array(
                'name_program' => $this->input->post('name_program'),
                'ID_category'  => $this->input->post('ID_category'),
                'ID_type'      => $this->input->post('ID_type'),
                'ID_form'      => $this->input->post('ID_form'),
                'ID_type_doc'  => $this->input->post('ID_type_doc'),
                'ID_teacher'   => $this->input->post('ID_teacher'),
                'price'        => $this->input->post('price')
            );

            $this->load->model('program_m');
            $this->program_m->add_program($data);

            redirect(base_url('methodist/browse_program'));
        }
    }

    //Удаление образовательной программы|Кузнецов
	public function del_program()
	{
        $data = array(
            'ID_program' => $this->input->get('ID_program')
        );

        $this->load->model('program_m');
        $this->program_m->del_program($data);

        redirect(base_url('methodist/browse_program'));
    }

    //Изменение образовательной программы|Кузнецов
	public function upd_program()
	{
        $id   = $this->input->post('ID_program');
        $data = array(
            'name_program' => $this->input->post('name_program'),
            'ID_category'  => $this->input->post('ID_category'),
            'ID_type'      => $this->input->post('ID_type'),
            'ID_form'      => $this->input->post('ID_form'),
            'ID_type_doc'  => $this->input->post('ID_type_doc'),
            'ID_teacher'   => $this->input->post('ID_teacher'),
            'price'        => $this->input->post('price')
        );

        $this->load->model('program_m');
        $this->program_m->upd_program($id, $data);

        redirect(base_url('methodist/browse_program'));
        echo var_dump($this->db->last_query());
    }
}