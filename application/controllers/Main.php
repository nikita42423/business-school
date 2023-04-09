<?php
class Main extends CI_Controller {
    
    //Авторизация|Кузнецов
	public function index()
	{
        $this->load->view("template/header");
        $this->load->view("page/login");
        $this->load->view("template/footer");
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
                case 'Менеджер': redirect(base_url('Менеджер'));
                break;
                case 'Директор': redirect(base_url('Директор'));
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