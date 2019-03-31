<?php

    defined('BASEPATH') or exit('Direct access script is not allowed');

    class Upload_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }


        /**
         *   fungsi untuk mengupload gambar
         *   fungsi hanya membaca input $_FILE['in_gbr']
         *
         *   @param $update_file_name       adalah nama file yang akan dihapus
         * 
         *   @return array data dari file/gambar
         */
        public function upload_gambar($upload_config, $update_file_name = NULL)
        {
            //-- hapus gambar sebelumnya terlebih dahulu
            //-- kalo $update_file_name cuma da isi upload path, tanpa nama file
            if ($update_file_name != $this->config->item('file_upload')['upload_path']):
                //-- jika gambar sebelumnya bukan 'default.png'
                if ($update_file_name != $this->config->item('pas_foto')['upload_path'].'default.png'):
                    $this->delete_gambar($update_file_name);
                endif;
            endif;
            
            $this->upload->initialize($upload_config);

            if ( ! $this->upload->do_upload('in_gbr')):
                $status = array(
                    'status'    => 'gagal',
                    'deskripsi' => 'Gagal upload gambar info : '.$this->upload->display_errors()
                );

                echo json_encode($status);
                exit();
            else:
                $status = array(
                    'status'    => 'berhasil',
                    'deskripsi' => 'Berhasil upload gambar info: '.$this->upload->data('file_name')
                );

                $data = $this->upload->data();
            endif;

            return $data;
        }

        
        /**
         *   fungsi untuk menghapus file/gambar
         *
         *   @param $uname       adalah nama file
         * 
         */
        public function delete_gambar($file_name) 
        {
            //-- cek jika file eksis (fungsi ini digunakan pada operasi update)
            if ( ! is_null($file_name)):
                if (file_exists($file_name)):
                    if (unlink($file_name)):
                        $status = array(
                            'status'    => 'berhasil',
                            'deskripsi' => 'Berhasil menghapus file/gambar : '.$file_name
                        );

                        // echo json_encode($status);
                    else:
                        $status = array(
                            'status'    => 'gagal',
                            'deskripsi' => 'Gagal menghapus file/gambar : '.$file_name
                        );

                        // echo json_encode($status);
                    endif;
                else:
                    $status = array(
                        'status'    => 'gagal',
                        'deskripsi' => 'Gambar tidak ada, file/gambar : '.$file_name
                    );

                    // echo json_encode($status);
                endif;
            endif;
        }
    }