<?php

    defined('BASEPATH') or exit('Direct access path is not allowed');

    class MY_Controller extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
            
            //-- cek jika tidak ada session
            if ( ! $this->session->userdata('username')):
                redirect('login');
            endif;
        }
    }