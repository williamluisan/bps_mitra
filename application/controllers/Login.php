<?php

    defined('BASEPATH') or exit('Direct access path is not allowed');

    class Login extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Login_model');
        }        

        public function index()
        {
            $this->load->view('login');
        }

        function login()
        {
            $this->form_validation->set_rules('username', 'Username', 'required|trim|max_length[255]');
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[255]');

            if($this->form_validation->run() == FALSE)
                $this->index();

            else {

                $user_data = array(
                    'user_uname' => $this->input->post('username'),
                    'user_pass'  => $this->input->post('password')
                );

                $this->login_admin($user_data);
            }
        } 

        function login_admin($user_data)
        {
            $result = $this->Login_model->cek_login_admin($user_data);
            
            if($result) {
                //bcrypt hash
                if (password_verify($user_data['user_pass'], $result['user_pass'])){
                    $this->set_session($result);
                    $this->session->set_userdata('id', $result['id']);

                    redirect('beranda');
                } else {
                    $this->session->set_flashdata('error', 'username atau password salah.');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('error', 'username atau password salah.');
                redirect('login');
            } 
        }

        private function set_session($result)
        {
            $this->session->set_userdata('username', $result['user_uname']);
            $this->session->set_userdata('nama', $result['user_nama']);
            $this->session->set_userdata('tipe_user', $result['user_role']);
        }

        function logout()
        {
            $this->session->sess_destroy();
            redirect('Login');
        }
    }