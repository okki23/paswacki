<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_login');
	}

	public function index()
	{
		$data['judul'] = 'Program Aplikasi Persediaan Sparepart';
		$this->load->view('login/login_view',$data);
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$sql = $this->model_login->auth($username,$password);

		$cek= $sql->num_rows();
		$get = $sql->row();
		$data = array('username'=>$get->username,
					  'level'=>$get->level);

		if($cek > 0){
			$this->session->set_userdata($data);
			redirect('dashboard');
		}


	}

	public function logout(){
		//mematikan seluruh session yang sudah terdaftar dan kembali ke halaman login
		$this->session->sess_destroy($data);
		redirect(base_url('login'));
	}


	 
}
