<?php
class Category extends CI_Controller {
    
    //Добавление категории|Кузнецов
	public function add_category()
	{
        if (!empty($_POST))
        {
            $data = array(
                'name_category' => $this->input->post('name_category')
            );

            $this->load->model('category_m');
            $this->category_m->add_category($data);

            redirect(base_url('methodist/browse_category'));
        }
    }

    //Удаление категории|Кузнецов
	public function del_category()
	{
        $data = array(
            'ID_category' => $this->input->get('ID_category')
        );

        $this->load->model('category_m');
        $this->category_m->del_category($data);

        redirect(base_url('methodist/browse_category'));
    }
}