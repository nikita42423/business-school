<?php
class Main extends CI_Controller {
    
    //Авторизация|Кузнецов
	public function index()
	{
        $this->load->view("templates/header");
        $this->load->view("pages/login");
        $this->load->view("templates/footer");
    }

    //Выполнение входа|Кузнецов
    public function log_action()
    {
        $data = array (
            'login'    => $this->input->post('login'),
            'password' => $this->input->post('password')
        );

        $this->load->model('user_m');
        $result = $this->user_m->sel_user($data);

        if ($result != false)
        {
            $session = array(
                'ID_user'        => $result->ID_user,
                'full_name_user' => $result->full_name_user,
                'position'       => $result->position
            );

            $this->session->set_userdata('login_session', $session);

            switch($result->position)
            {
                case 'Методист': redirect((base_url('methodist/browse_category'))); 
                break;
                case 'Менеджер': redirect(base_url('manager/browse_record'));
                break;
                case 'Директор': redirect(base_url('director/browse_diretor'));
                break;
            }
        }
        else
        {
            $this->session->set_flashdata('msg', 'Неверный логин или пароль!');
            redirect(base_url());
        }

    }

    //Завершение сессии|Кузнецов
    public function kill_all_session()
    {
        $this->load->model('user_m');
        $this->user_m->kill_session();
        redirect(base_url());
    }
}
?>