<?php
class Type_doc extends CI_Controller {
    
    //Добавление вида документа|Кузнецов
	public function add_type_doc()
	{
        if (!empty($_POST))
        {
            $data = array(
                'name_doc' => $this->input->post('name_doc')
            );

            $this->load->model('type_doc_m');
            $this->type_doc_m->add_type_doc($data);

            redirect(base_url('methodist/browse_type_doc'));
        }
    }

    //Удаление вида документа|Кузнецов
	public function del_type_doc()
	{
        $data = array(
            'ID_type_doc' => $this->input->get('ID_type_doc')
        );

        $this->load->model('type_doc_m');
        $this->type_doc_m->del_type_doc($data);

        redirect(base_url('methodist/browse_type_doc'));
    }

    //Изменение вида документа|Кузнецов
	public function upd_type_doc()
	{
        $id   = $this->input->post('ID_type_doc');
        $data = array(
            'name_doc' => $this->input->post('name_doc')
        );

        $this->load->model('type_doc_m');
        $this->type_doc_m->upd_type_doc($id, $data);

        redirect(base_url('methodist/browse_type_doc'));
    }
}