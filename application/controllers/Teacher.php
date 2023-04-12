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

    //Изменение преподавателя|Кузнецов
	public function upd_teacher()
	{
        //Если дата не указана, то по умолчанию NULL
        if ($this->input->post('date_leave') == NULL)
        {
            $date = NULL;
        }
        else
        {
            $date = $this->input->post('date_leave');
        }

        $id   = $this->input->post('ID_teacher');
        $data = array(
            'full_name_teacher' => $this->input->post('full_name_teacher'),
            'position'          => $this->input->post('position'),
            'date_teacher'      => $this->input->post('date_teacher'),
            'work_exp'          => $this->input->post('work_exp'),
            'date_enter'        => $this->input->post('date_enter'),
            'date_leave'        => $date
        );

        $this->load->model('teacher_m');
        $this->teacher_m->upd_teacher($id, $data);

        redirect(base_url('methodist/browse_teacher'));
    }
}