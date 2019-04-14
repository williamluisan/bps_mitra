<?php 
    
    defined('BASEPATH') or exit('Direct access path is not allowed');

    class Login_model extends CI_Model
    {   
        public function __construct()
        {
            parent::__construct();
            $this->db_bps = $this->load->database('bps_db', TRUE);
        }
        
        function cek_login_admin($cond)
        {
            $this->db_bps->select('id, user_uname, user_pass, user_nama, user_role, user_last_login');
			$this->db_bps->from('mtr_user');
			$this->db_bps->where("user_uname='".$this->db->escape_str($cond['user_uname'])."'");
			$this->db_bps->limit(1);

			$result = $this->db_bps->get();
			
			if($result->num_rows() > 0) return $result->row_array();
			else return FALSE;
        }

        function last_login_write()
        {
            $this->db_bps->where('id', $this->session->userdata('id'));
            $this->db_bps->update('mtr_user', ['user_last_login' => date('Y-m-d H:i:s')]);            
        }

    }