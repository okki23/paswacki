<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_login');
	}
	

	public function index()
	{
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$this->load->view('login/login_view',$data);
	}

	public function auth(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$level = $this->input->post('level');

		//echo $username. "<br>" .$password. "<br>". $level;
		//exit();

		$cek = $this->model_login->auth($username,$password,$level)->num_rows();
		$get = $this->model_login->auth($username,$password,$level)->row();
		if($cek > 0){
			 
			$list = array('username'=>$get->username,'level'=>$get->level,'user_id'=>$get->user_id);
			$this->session->set_userdata($list);
		 
		 	redirect('dashboard');
		}else{
			 
			redirect(base_url('login'));
		}

	}

	public function logout(){
		$this->session->sess_destroy($data);
		redirect(base_url('login'));
	}


	 
}
