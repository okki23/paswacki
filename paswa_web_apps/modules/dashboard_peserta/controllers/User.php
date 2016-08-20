<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_user');
	}

	public function index()
	{
		$data['judul'] = 'Inventory Apps';
		$data['listing'] = $this->model_user->listing();
		$this->load->view('user/user_view',$data);
	}

	public function view()
	{
		$data['judul'] = 'Inventory Apps';
		$this->load->view('user/tampilan_view',$data);
	}

	public function add()
	{
		$data['judul'] = 'Inventory Apps';
		$this->load->view('user/user_add',$data);
	}

	public function edit()
	{
		$id = $this->uri->segment(3);
		$data['listing'] = $this->model_user->edit($id)->row();
		$data['judul'] = 'Inventory Apps';
		$this->load->view('user/user_edit',$data);
	}

	public function pro_edit(){
		$password = $this->input->post('password');

		if($password == ''){
			$posting = array('id'=>$this->input->post('id'),
						  'username'=>$this->input->post('username'),
						  'level'=>$this->input->post('level'));
			$this->model_user->pro_edit_no_pass($posting);
		}else{
			$posting = array('id'=>$this->input->post('id'),
						  'username'=>$this->input->post('username'),
						  'password'=>md5($this->input->post('password')),
						  'level'=>$this->input->post('level'));
			$this->model_user->pro_edit_with_pass($posting);
		}

		   echo "<script language=javascript>
              alert('Perubahan Data Berhasil');
              window.location='".base_url()."user';
            </script>";
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$this->model_user->delete($id);

		 echo "<script language=javascript>
              alert('Hapus Data Berhasil');
              window.location='".base_url()."user';
            </script>";
	}

	public function pro_add()
	{
		$data['judul'] = 'Inventory Apps';
	
		$posting = array('username'=>$this->input->post('username'),
						 'password'=>md5($this->input->post('password')),
						 'level'=>$this->input->post('level')
						 );
		$this->model_user->pro_add($posting);

		//echo $username . "<br>" . $hashpass . "<br>" . $level."<br>";
		//exit();

		   echo "<script language=javascript>
              alert('Penambahan Data Berhasil');
              window.location='".base_url()."user';
            </script>";
		 
	}
}
