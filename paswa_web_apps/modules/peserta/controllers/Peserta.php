<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_peserta');

		 //jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}

 
	}

	public function pro_add(){
		 $filename = $this->input->post('filename');
		 $postingdata = array('nm_peserta' => $this->input->post('nm_peserta'),
		 					  'semester' => $this->input->post('semester'),
		 					  'id_kampus' => $this->input->post('id_kampus'),
		 					  'id_jabatan' => $this->input->post('id_jabatan'),
		 					  'telp' => $this->input->post('telp'),
		 					  'alamat' => $this->input->post('alamat'),
		 					  'filename' => $this->input->post('filename')
		 					  );
		$sql = $this->model_peserta->pro_add($postingdata);
		 //bagian upload file
        $config['upload_path']	= "photo_uploads/";
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        //$config['max_size'] = 3000;
         $config['max_size']  = 2000;
        $config['remove_spaces'] = TRUE;
    
        $this->load->library('upload');
        $this->upload->initialize($config);
                
        if($filename != ''){
          //echo "ada file";

           $this->upload->do_upload('foto');
        }

        if($sql){
			    echo "<script language=javascript>
				alert('Penambahan Data Berhasil');
				window.location='".base_url('peserta')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Gagal');
				window.location='".base_url('peserta')."';
		        </script>";
		}

			 
	}

	public function pro_edit(){
 		 $filename = $this->input->post('filename');
		 $postingdata = array('id'=>$this->input->post('id'),
		 					  'nm_peserta' => $this->input->post('nm_peserta'),
		 					  'semester' => $this->input->post('semester'),
		 					  'id_kampus' => $this->input->post('id_kampus'),
		 					  'id_jabatan' => $this->input->post('id_jabatan'),
		 					  'telp' => $this->input->post('telp'),
		 					  'alamat' => $this->input->post('alamat'),
		 					  'filename' => $this->input->post('filename')
		 					  );

		$sql = $this->model_peserta->pro_edit($postingdata);
		 //bagian upload file
        $config['upload_path']	= "photo_uploads/";
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        //$config['max_size'] = 3000;
        $config['max_size']  = 2000;
        $config['remove_spaces'] = TRUE;
    
        $this->load->library('upload');
        $this->upload->initialize($config);
                
        if($filename != ''){
          //echo "ada file";

           $this->upload->do_upload('foto');
        }

        if($sql){
			    echo "<script language=javascript>
				alert('Perubahan Data Berhasil');
				window.location='".base_url('peserta')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Gagal');
				window.location='".base_url('peserta')."';
		        </script>";
		}

			 
	}
	


 
	public function opt_jabatan_peserta(){

	}

	public function opt_kelompok(){

	}

	public function opt_jurusan(){
		
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_peserta->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Data Berhasil Dihapus');
				window.location='".base_url('peserta')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Data Gagal Dihapus');
				window.location='".base_url('peserta')."';
		        </script>";
		}


	}
	public function index()
	{
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['listing'] = $this->model_peserta->listing();
		$this->load->view('peserta/peserta_view',$data);
	}

	public function cetak()
	{
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['listing'] = $this->model_peserta->listing();
		$this->load->library('Pdf');
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetTitle('Pdf Example');
		//$pdf->SetHeaderMargin(30);
		//$pdf->SetTopMargin(20);
		//$pdf->setFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default');

		$html = $this->load->view('peserta/peserta_print',$data,true);

		$pdf->writeHTML($html, 0, 1, 0, true, '', true);   
		ob_clean();
		$pdf->Output('pdfexample.pdf', 'I');
	}

	public function add(){
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['opt_jurusan'] = $this->model_peserta->opt_jurusan();
		$data['opt_kelompok'] = $this->model_peserta->opt_kelompok();
		$data['opt_kampus'] = $this->model_peserta->opt_kampus();
		$data['opt_kelas'] = $this->model_peserta->opt_kelas();
		$this->load->view('peserta/peserta_add',$data);
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['listing'] = $this->model_peserta->edit($id)->row();

		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['opt_jurusan'] = $this->model_peserta->opt_jurusan();
		$data['opt_kelompok'] = $this->model_peserta->opt_kelompok();
		$data['opt_kampus'] = $this->model_peserta->opt_kampus();
		$data['opt_jabatan_peserta'] = $this->model_peserta->opt_jabatan_peserta();
		$this->load->view('peserta/peserta_edit',$data);
	}

	 

	

 


	 
}
