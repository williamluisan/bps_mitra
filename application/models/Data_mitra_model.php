<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');

    class Data_mitra_model extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Upload_model');
            $this->db_bps = $this->load->database('bps_db', TRUE);
        }

        
        public function get_all()
        {
            $this->db_bps->select('mtr_data.*, ref_pddk.pddk_nama');
            $this->db_bps->from('mtr_data');
            $this->db_bps->join('ref_pddk', 'mtr_data.data_id_pddk_trkhr = ref_pddk.id');
            $result = $this->db_bps->get()->result_array();

            return $result;
        }

        
        public function insert()
        {
            //-- override index 'file_name' value dari config 'pas_foto'
            $config_pas_foto = $this->config->item('pas_foto');
            $config_pas_foto['file_name'] = $this->input->post('in_no_mitra');
            $this->config->set_item('pas_foto', $config_pas_foto);
            
            //-- lakukan upload gambar, jika berhasil melewati form validation
            //   jika gambar tidak diupload, tetap lakukan penginputan
            if ($_FILES['in_gbr']['size'] != 0):
                $file_gambar = $this->Upload_model->upload_gambar($this->config->item('pas_foto'));
            else:
                $file_gambar['file_name'] = NULL;
            endif;
                     
            $data = [
                'data_nama' => html_escape($this->input->post('in_nama')),
                'data_alamat' => html_escape($this->input->post('in_alamat')),
                'data_no_ktp' => html_escape($this->input->post('in_ktp')),
                'data_id_pddk_trkhr' => html_escape($this->input->post('in_sel_pddk')),
                'data_no_mitra' => html_escape($this->input->post('in_no_mitra')),
                'data_pas_foto' => $file_gambar['file_name'],
                'data_id_pnglmn_krj' => html_escape($this->input->post('in_sel_penglmn')),
                'data_no_hp' => html_escape($this->input->post('in_nohp')),
            ];

            $query = $this->db_bps->insert('mtr_data', $data);

            if ($this->db_bps->affected_rows($query) > 0) {
                $status = array(
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil menambahkan mitra : '.$data['data_nama']
                );
            } else {
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal menambahkan mitra : '.$data['data_nama']
                );
            }

            return json_encode($status);
        }


        public function edit()
        {
            $id     = html_escape($this->input->post('ed_id'));
            $data   = [
                'data_nama' => html_escape($this->input->post('ed_nama')),
                'data_no_ktp' => html_escape($this->input->post('ed_ktp')),
                'data_id_pddk_trkhr' => html_escape($this->input->post('ed_sel_pddktrkhr')),
                'data_alamat' => html_escape($this->input->post('ed_alamat')),
                'data_no_mitra' => html_escape($this->input->post('ed_no_mitra')),
                'data_no_hp' => html_escape($this->input->post('ed_nohp')),
            ];

            //-- mengambil nama gambar dari database
            $update_file_name = $this->db_bps->select('data_pas_foto')->from('mtr_data')
                ->where('id', $id)->get()->row_array();
            $update_file_name = $this->config->item('pas_foto')['upload_path'].$update_file_name['data_pas_foto'];

            //-- override index 'file_name' value dari config 'pas_foto'
            $config_pas_foto = $this->config->item('pas_foto');
            $config_pas_foto['file_name'] = $this->input->post('ed_no_mitra');
            $this->config->set_item('pas_foto', $config_pas_foto);

            //-- lakukan upload gambar, jika berhasil melewati form validation
            //-- jika gambar tidak diupload, tetap lakukan penginputan
            if ($_FILES['in_gbr']['size'] != 0):
                $file_gambar = $this->Upload_model->upload_gambar($this->config->item('pas_foto'), $update_file_name);
                $data['data_pas_foto'] = $file_gambar['file_name'];
            endif;

            $query = $this->db_bps->where('id', $id)->update('mtr_data', $data);

            if ($this->db_bps->affected_rows($query) > 0) {
                $status = array(
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil edit mitra : '.$data['data_nama']
                );
            } else {
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal edit mitra : '.$data['data_nama']
                );
            }

            return json_encode($status);
        }   


        public function detail()
        {
            $data['id'] = html_escape($this->input->post('id'));

            $this->db_bps->where('id', $data['id']);
            $result = $this->db_bps->get('mtr_data')->row_array();

            return json_encode($result);
        }


        public function delete()
        {
            $data = [
                'id' => html_escape($this->input->post('id')),
                'nama' => html_escape($this->input->post('nama')),
            ];

            $query = $this->db_bps->where('id', $data['id'])->delete('mtr_data');

            if ($query != FALSE):
                $status = [
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil menghapus mitra : '.$data['nama']
                ];
            else:
                $status = [
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal menghapus mitra : '.$data['nama']
                ];
            endif;

            return json_encode($status);
        }


        public function tambah_pengalaman()
        {
            return json_encode($this->input->post());
        }

    }