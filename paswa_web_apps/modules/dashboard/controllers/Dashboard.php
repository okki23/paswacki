<?php
/*
@author : Okki Setyawan &copy 2016
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_dashboard');

		 //jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}

	}

	public function index()
	{
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['get_all_panitia'] = $this->model_dashboard->get_all_panitia()->num_rows();
		$data['get_all_peserta'] = $this->model_dashboard->get_all_peserta()->num_rows();
		$this->load->view('dashboard/dashboard_view',$data);
	}

	public function view()
	{
		$data['judul'] = 'Viewku';

		$this->load->view('user/tampilan_view',$data);
	}

	public function add()
	{
		$data['judul'] = 'Add Aku';
		$this->load->view('user/tampilan_add',$data);
	}
}
