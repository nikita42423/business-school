<?php
class Teacher extends CI_Controller {
    
    //Добавление преподавателя|Кузнецов
	public function add_teacher()
	{
        if (!empty($_POST))
        {
            $data = array(
                'full_name_teacher' => $this->input->post('full_name_teacher'),
                'position'          => $this->input->post('position'),
                'date_teacher'      => $this->input->post('date_teacher'),
                'work_exp'          => $this->input->post('work_exp'),
                'date_enter'        => $this->input->post('date_enter')
            );

            $this->load->model('teacher_m');
            $this->teacher_m->add_teacher($data);

            redirect(base_url('methodist/browse_teacher'));
        }
    }

    //Удаление преподавателя|Кузнецов
	public function del_teacher()
	{
        $data = array(
            'ID_teacher' => $this->input->get('ID_teacher')
        );

        $this->load->model('teacher_m');
        $this->teacher_m->del_teacher($data);

        redirect(base_url('methodist/browse_teacher'));
    }
}