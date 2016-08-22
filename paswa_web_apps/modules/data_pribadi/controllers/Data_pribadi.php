<?php
/*
@author : Okki Setyawan &copy 2016
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class data_pribadi extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_data_pribadi');

		 //jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}

 
	}

	public function pro_add(){
		 $filename = $this->input->post('filename');
		 $postingdata = array('nm_data_pribadi' => $this->input->post('nm_data_pribadi'),
		 					  'semester' => $this->input->post('semester'),
		 					  'id_kampus' => $this->input->post('id_kampus'),
		 					  'id_jabatan' => $this->input->post('id_jabatan'),
		 					  'telp' => $this->input->post('telp'),
		 					  'alamat' => $this->input->post('alamat'),
		 					  'filename' => $this->input->post('filename')
		 					  );
		$sql = $this->model_data_pribadi->pro_add($postingdata);
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
				window.location='".base_url('data_pribadi')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Penambahan Data Gagal');
				window.location='".base_url('data_pribadi')."';
		        </script>";
		}

			 
	}

	public function pro_edit(){
 		 $filename = $this->input->post('filename');
		 $postingdata = array('user_id'=>$this->input->post('user_id'),
		 					  'nim'=>$this->input->post('nim'),
		 					  'nama_peserta'=>$this->input->post('nama_peserta'),
		 					  'semester'=>$this->input->post('semester'),
		 					  'id_kelas'=>$this->input->post('id_kelas'),
		 					  'id_jurusan'=>$this->input->post('id_jurusan'),
		 					  'id_kampus'=>$this->input->post('id_kampus'),
		 					  'motto'=>$this->input->post('motto'),
		 					  'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
		 					  'email'=>$this->input->post('email'),
		 					  'alamat'=>$this->input->post('alamat'),
		 					  'no_telp'=>$this->input->post('no_telp'),
		 					  'filename'=>$this->input->post('filename')
		 					  );

		$sql = $this->model_data_pribadi->pro_edit($postingdata);
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
				window.location='".base_url('data_pribadi')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Gagal');
				window.location='".base_url('data_pribadi')."';
		        </script>";
		}

			 
	}
	


 
	public function opt_jabatan_data_pribadi(){

	}

	public function opt_kelompok(){

	}

	public function opt_jurusan(){
		
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_data_pribadi->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Data Berhasil Dihapus');
				window.location='".base_url('data_pribadi')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Data Gagal Dihapus');
				window.location='".base_url('data_pribadi')."';
		        </script>";
		}


	}
	public function index()
	{
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['listing'] = $this->model_data_pribadi->listing($data)->row();

		$data['opt_jurusan'] = $this->model_data_pribadi->opt_jurusan();
		$data['opt_kelompok'] = $this->model_data_pribadi->opt_kelompok();
		$data['opt_kampus'] = $this->model_data_pribadi->opt_kampus();
		$data['opt_jabatan_panitia'] = $this->model_data_pribadi->opt_jabatan_panitia();
		
		$this->load->view('data_pribadi/data_pribadi_view',$data);
	}

	public function cetak()
	{
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['listing'] = $this->model_data_pribadi->listing();
		$this->load->library('Pdf');
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetTitle('Pdf Example');
		//$pdf->SetHeaderMargin(30);
		//$pdf->SetTopMargin(20);
		//$pdf->setFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default');

		$html = $this->load->view('data_pribadi/data_pribadi_print',$data,true);

		$pdf->writeHTML($html, 0, 1, 0, true, '', true);   
		ob_clean();
		$pdf->Output('pdfexample.pdf', 'I');
	}

	public function add(){
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['opt_jurusan'] = $this->model_data_pribadi->opt_jurusan();
		$data['opt_kelompok'] = $this->model_data_pribadi->opt_kelompok();
		$data['opt_kampus'] = $this->model_data_pribadi->opt_kampus();
		$data['opt_jabatan_data_pribadi'] = $this->model_data_pribadi->opt_jabatan_data_pribadi();
		$this->load->view('data_pribadi/data_pribadi_add',$data);
	}

	public function edit(){
		$user_id = $this->uri->segment(3);
		$data['listing'] = $this->model_data_pribadi->edit($user_id)->row();

		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['opt_jurusan'] = $this->model_data_pribadi->opt_jurusan();
		$data['opt_kelompok'] = $this->model_data_pribadi->opt_kelompok();
		$data['opt_kampus'] = $this->model_data_pribadi->opt_kampus();
		$data['opt_kelas'] = $this->model_data_pribadi->opt_kelas();
		//$data['opt_jabatan_data_pribadi'] = $this->model_data_pribadi->opt_jabatan_data_pribadi();
		$this->load->view('data_pribadi/data_pribadi_edit',$data);
	}

	 

	

 


	 
}
