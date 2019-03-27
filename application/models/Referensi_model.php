<?php

    defined('BASEPATH') or exit('Direct access path is not allowed');

    class Referensi_model extends CI_Model 
    {
        protected $db_bps;

        public function __construct()
        {
            parent::__construct();
            $this->db_bps = $this->load->database('bps_db', TRUE);
        }

        public function get_pddk_terakhir()
        {
            return $result = $this->db_bps->get('ref_pddk')->result_array();
        }

        public function get_keg_bps()
        {
            return $result = $this->db_bps->get('mtr_prd_kegiatan')->result_array();
        }
    }