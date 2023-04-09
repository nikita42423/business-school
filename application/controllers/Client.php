<?php
	class Client extends CI_Controller {
    
    //Просмотр клиент|Пручковский
	public function browse_client()
	{
        //Сессия
		$data['session'] = $this->session->userdata('login_session');

        $this->load->model('client_m');
        $data['client'] = $this->client_m->sel_client();

        $this->load->view('templates/header');
        $this->load->view('templates/navbar_manager', $data);
        $this->load->view('pages/client', $data);
        $this->load->view('templates/footer');
    }

    //Добавление клиент|Пручковский
	public function add_client()
	{
        if (!empty($_POST))
        {
            $data = array(
                'full_name_client' => $this->input->post('fio'),
                'date_client'      => $this->input->post('date'),
                'pol'              => $this->input->post('pol'),
                'series'           => $this->input->post('serie'),
                'passport_number'  => $this->input->post('number'),
                'address'          => $this->input->post('adress'),
                'education'        => $this->input->post('education'),
                'phone'            => $this->input->post('tel'),
                'email'            => $this->input->post('email')
            );
            
            $this->load->model('client_m');
            $this->client_m->add_client($data);

            redirect(base_url('client/browse_client'));
        }
    }

    //Изменение клиента|Пручковский
    public function upd_client()
    {
        $ID_client        = $this->input->post('ID_client');
        $full_name_client = $this->input->post('fio');
        $date_client      = $this->input->post('date');
        $pol              = $this->input->post('pol');
        $series           = $this->input->post('serie');
        $passport_number  = $this->input->post('number');
        $address          = $this->input->post('adress');
        $education        = $this->input->post('education');
        $phone            = $this->input->post('tel');
        $email            = $this->input->post('email');

        $this->load->model('client_m');
        $this->client_m->upd_client($full_name_client, $date_client, $pol, $series, 
        $passport_number, $address, $education, $phone, $email, $ID_client);

        redirect('client/browse_client');
    }

    //Удаление клиента|Пручковский
    public function del_client()
    {
        $data = array(
            'ID_client' => $this->input->post('ID_client')
        );

        $this->load->model('client_m');
        $this->client_m->del_client($data);
        
        redirect('client/browse_client');
    }
}
?>