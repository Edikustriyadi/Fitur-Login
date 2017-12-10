<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->helper(array('url','form'));
		$this->load->model('M_login');
	}

	public function index(){
		$this->load->view('login_page');
	}
	
	public function cek_login(){
		$username 		= $this->input->post('username');
		$password		= $this->input->post('password');
		$cek_username 	= $this->M_login->validasi_username($username)->result_array();
		$cek_password 	= $this->M_login->validasi_password($password)->result_array();
		if(count($cek_username) >0 and count($cek_password)>0) {
			echo 'username dan Password benar <a href="logout">Logout</a>';

		}
		elseif(count($cek_username) ==0 and count($cek_password)>0) {
			$this->session->set_flashdata('username_salah', '<div class="alert alert-warning">Username yang anda masukan salah!</div>');
				redirect(base_url().'login');
		}elseif(count($cek_username)>0 and count($cek_password)==0){
			$this->session->set_flashdata('password_salah', '<div class="alert alert-warning">Password yang anda masukan salah!</div>');
				redirect(base_url().'login');
		}else{
			$this->session->set_flashdata('salah_semua', '<div class="alert alert-warning">Username dan Password yang anda masukan salah!</div>');
			redirect(base_url().'login');
		}
	}
	public function logout(){
		$data_logout = array(
			'username',
			'password'
		);
		$this->session->unset_userdata($data_logout);
		redirect(base_url().'Login');
	}
}
