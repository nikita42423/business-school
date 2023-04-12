<?php
class Schedule extends CI_Controller {
    
    //Добавление графика курсов|Кузнецов
	public function add_schedule()
	{
        if (!empty($_POST))
        {
            $data = array(
                'ID_program'         => $this->input->post('ID_program'),
                'date_start_s'       => $this->input->post('date_start_s'),
                'date_end_s'         => $this->input->post('date_end_s'),
                'max_count_listener' => $this->input->post('max_count_listener')
            );

            $this->load->model('schedule_m');
            $this->schedule_m->add_schedule($data);

            redirect(base_url('methodist/browse_schedule_methodist'));
        }
    }

    //Удаление графика курсов|Кузнецов
	public function del_schedule()
	{
        $data = array(
            'ID_schedule' => $this->input->get('ID_schedule')
        );

        $this->load->model('schedule_m');
        $this->schedule_m->del_schedule($data);

        redirect(base_url('methodist/browse_schedule_methodist'));
    }

    //Изменение графика курсов|Кузнецов
	public function upd_schedule()
	{
        $id   = $this->input->post('ID_schedule');
        $data = array(
            'ID_program'            => $this->input->post('ID_program'),
            'date_start_s'          => $this->input->post('date_start_s'),
            'date_end_s'            => $this->input->post('date_end_s'),
            'max_count_listener'    => $this->input->post('max_count_listener'),
            'actual_count_listener' => $this->input->post('actual_count_listener')
        );

        $this->load->model('schedule_m');
        $this->schedule_m->upd_schedule($id, $data);

        redirect(base_url('methodist/browse_schedule_methodist'));
    }
}