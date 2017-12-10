<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
	function validasi_username($username){
		$query = $this->db->select('*')
						  ->from('tbl_login')
						  ->where('username =',$this->input->post('username'))
						  ->get();
		return $query;
	}
	function validasi_password($password){
		$query = $this->db->select('*')
						  ->from('tbl_login')
						  ->where('password =',sha1($this->input->post('password')))
						  ->get();
		return $query;
	}
}
/* End of file M_login.php */
/* Location: ./application/models/M_login.php */