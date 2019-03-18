<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');

    class Keg_bps extends CI_Controller 
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function index()
        {
            pre('Halaman data kegiatan bps');
        }
    }