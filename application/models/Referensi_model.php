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


        /**
         * Untuk mengambil referensi kegiatan BPS
         * 
         * @param $_POST['mitra_Id'] : id mitra
         * @return array
         */
        public function get_keg_bps()
        {
            $mitra_id = $this->input->post('mitra_id');

            //-- jika $_POST['mitra_id] = NULL, ambil semua kegiatan untuk referensi
            if (is_null($mitra_id)):
                $result = $this->db_bps->get('mtr_prd_kegiatan')->result_array();
            else:
                $sql = "
                    SELECT * FROM mtr_prd_kegiatan
                    WHERE
                        id NOT IN (
                            SELECT pnglmn_keg_id FROM mtr_pengalaman 
                            WHERE pnglmn_data_no_mitra = ?
                        );
                ";
                
                $result = $this->db_bps->query($sql, $mitra_id)->result_array();
            endif;
            
            return $result;
        }
    }