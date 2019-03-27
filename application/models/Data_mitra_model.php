<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');

    class Data_mitra_model extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
            $this->db_bps = $this->load->database('bps_db', TRUE);
        }

        
        public function insert()
        {   
            //-- upload gambar terlebih dahulu yah
            // ...

            $data = [
                'data_nama' => html_escape($this->input->post('in_nama')),
                'data_alamat' => html_escape($this->input->post('in_alamat')),
                'data_no_ktp' => html_escape($this->input->post('in_ktp')),
                'data_id_pddk_trkhr' => html_escape($this->input->post('in_sel_pddk')),
                'data_no_mitra' => html_escape($this->input->post('in_no_mitra')),
                // 'data_pas_foto',
                'data_id_pnglmn_krj' => html_escape($this->input->post('in_sel_penglmn')),
                'data_no_hp' => html_escape($this->input->post('in_nohp')),
            ];
            
            $query = $this->db_bps->insert('mtr_data', $data);

            if ($this->db_bps->affected_rows($query) > 0) {
                $status = array(
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil menambahkan info : '.$data['data_nama']
                );
            } else {
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal menambahkan info : '.$data['data_nama']
                );
            }

            return json_encode($status);
        }

    }