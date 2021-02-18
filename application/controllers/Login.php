<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Login extends MY_Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mymodel', 'session_login');
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        $this->load->view('login');
    }

    /**
     * mylogin
     *
     * @return void
     */
    public function mylogin()
    {
        if ($this->session->userdata('login_user') === '') {
            redirect('login', 'refresh');
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );
            $num_rows = $this->session_login->isUser($data);
            if ($num_rows) {
                $this->session->set_userdata('login_user', 'Hi User');
                $this->load->view('userpanel');
            } else {
                $this->session->set_flashdata('message', "User Does not exist");
                $this->load->view('login');
            }
        }
    }

    /**
     * logout
     *
     * @return void
     */
    public function logout()
    {
        $this->session->unset_userdata('login_user');
        session_destroy();
        redirect(base_url());
    }
}
