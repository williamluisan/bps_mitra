<?php

    defined('BASEPATH') or exit('Direct access path is not allowed');

    class Kegiatan_bps_model extends CI_Model 
    {
        protected $db_bps;

        public function __construct()
        {
            parent::__construct();

            $this->db_bps = $this->load->database('bps_db', TRUE);
        }


        public function get_all()
        {
            $query = $this->db_bps->order_by('id', 'ASC')->get('mtr_prd_kegiatan')->result_array();

            if ( ! empty($query)):
                $status = array(
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil mengambil data',
                    'data'      => $query
                );
            else:
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal mengambil data',
                    'data'      => NULL
                );
            endif;

            return json_encode($status);
        }


        public function get_spesifik()
        {
            $data['id'] = html_escape($this->input->post('id'));
            
            $this->db_bps->where('id', $data['id']);
            $result = $this->db_bps->get('mtr_prd_kegiatan')->row_array();

            if ( ! empty($result)):
                $status = array(
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil mengambil data',
                    'data'      => $result
                );
            else:
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal mengambil data',
                    'data'      => NULL
                );
            endif;

            return json_encode($status);
        }


        public function insert()
        {
            $data = [
                'keg_nama' => html_escape($this->input->post('in_nama_keg')),
                'keg_deskripsi' => html_escape($this->input->post('in_desk')),
                'keg_tgl_mulai' => html_escape($this->input->post('ed_tgl_mlai')),
                'keg_tgl_selesai' => html_escape($this->input->post('ed_tgl_akr'))
            ];            
            
            $query = $this->db_bps->insert('mtr_prd_kegiatan', $data);
            
            if ($this->db_bps->affected_rows($query) > 0) {
                $status = array(
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil menambahkan info : '.$data['keg_nama']
                );
            } else {
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal menambahkan info : '.$data['keg_nama']
                );
            }

            return json_encode($status);
        }

        
        public function edit()
        {
            $id   = html_escape($this->input->post('ed_id'));
            $data = [
                'keg_nama' => html_escape($this->input->post('ed_nama_keg')),
                'keg_deskripsi' => html_escape($this->input->post('ed_desk')),
                'keg_tgl_mulai' => html_escape($this->input->post('ed_tgl_mlai')),
                'keg_tgl_selesai' => html_escape($this->input->post('ed_tgl_akr'))
            ];
            
            $query = $this->db_bps->where('id', $id)->update('mtr_prd_kegiatan', $data);
            
            if ($this->db_bps->affected_rows($query) > 0) {
                $status = array(
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil edit info : '.$data['keg_nama']
                );
            } else {
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal edit info : '.$data['keg_nama']
                );
            }

            return json_encode($status);
        }


        public function delete()
        {   
            $data = [
                'id' => html_escape($this->input->post('id')),
                'keg_nama' => html_escape($this->input->post('nama'))
            ];

            $query = $this->db_bps->where('id', $data['id'])
                ->delete('mtr_prd_kegiatan');

            if ($query != FALSE) {
                $status = array(
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil menghapus info : '.$data['keg_nama']
                );
            } else {
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal menghapus info : '.$data['keg_nama']
                );
            }


            return json_encode($status);
        }
    }