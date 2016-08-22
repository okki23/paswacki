<?php
/*
@author : Okki Setyawan &copy 2016
*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_peserta extends CI_Controller {

	public function __construct(){
		 parent::__construct();
		 $this->load->model('model_register_peserta');
 
	}

	public function acakpass($jmlpass){
		$char = '1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
		$string = '';

		for($i=0;$i<=$jmlpass;$i++){
		$pos = rand(0,strlen($char)-1);

		$string .= $char{$pos};
		}
		return $string;
	}
	
	public function set_userid($jmluserid){
		$char = '1234567890';
		$string = '';

		for($i=0;$i<=$jmluserid;$i++){
		$pos = rand(0,strlen($char)-1);

		$string .= $char{$pos};
		}
		return $string;
	}

	public function register(){
		 $set_pass = $this->acakpass(8);
		 $set_userid = $this->set_userid(8);
		 

		 $postingdata = array('username'=>$this->input->post('username'),
		 					  'password'=>md5($set_pass),
		 					  'email'=>$this->input->post('email'),
		 					  'level'=>'2',
		 					  'user_id'=>$set_userid
		 					  );
		 
		//echo $postingdata['username'] ."<br>". $postingdata['password']."<br>".$postingdata['re_password']."<br>".$postingdata['email'];
		//exit();
		//echo $this->acakpass(10);
		//echo "<br>";
		//echo $this->set_userid(5);
		//echo "<br>";
		
		$sql = $this->model_register_peserta->pro_add_peserta($postingdata);
		$sqla = $this->model_register_peserta->pro_add_user_peserta($postingdata);

		$this->load->library('PHPMailerAutoload');
        $mail = new PHPMailer();
       
		//$mail->SMTPDebug = 0;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'okkisetyawan@gmail.com';                 // SMTP username
		$mail->Password = 'Kutoarjo_93';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		$mail->setFrom('okkisetyawan@gmail.com', 'PASWA STIKOM CKI');
		$mail->addAddress($postingdata['email'], 'Penerima');     // Add a recipient
		$mail->addReplyTo('okkisetyawan@gmail.com', 'Information');
		
		$pesan = "Halo Peserta PASWA STIKOM CKI . <br>
                  Berikut akun untuk login kedalam sistem aplikasi PASWA STIKOM CKI : <br>
                  <table border='0' style='font-weight:bold;'>
                    <tr>
                        <td width='30%;'>  Username   </td>
                        <td width='3%;' >  :  </td>
                        <td width='35%;'> ".$postingdata['username']." </td>
                    </tr>
                    <tr>
                        <td width='30%;'>  Password  </td>
                        <td width='3%;' >  :  </td>
                        <td width='35%;'> ".$set_pass." </td>
                    </tr>
					 
                  </table>
                  <br>
                  Jika ada kesulitan dalam penggunaan aplikasi silahkan hubungi panitia paswa";

		 
		$mail->isHTML(true);   
		
		$mail->Subject = 'PASWA STIKOM CKI';
		$mail->Body    = $pesan;
		$mail->AltBody = $pesan;

        //$this->email->message($pesan);
        
         
       
		if(!$mail->send()) {
			echo '';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo '';
		}
        if($sql){
			    echo "<script language=javascript>
				alert('Registrasi Berhasil , Periksa Email Anda');
				window.location='".base_url('login')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Registrasi Gagal, Periksa Data Anda!');
				window.location='".base_url('login')."';
		        </script>";
		}

			 
	}

	public function pro_edit(){
 		 $filename = $this->input->post('filename');
		 $postingdata = array('id'=>$this->input->post('id'),
		 					  'nm_register_peserta' => $this->input->post('nm_register_peserta'),
		 					  'semester' => $this->input->post('semester'),
		 					  'id_kampus' => $this->input->post('id_kampus'),
		 					  'id_jabatan' => $this->input->post('id_jabatan'),
		 					  'telp' => $this->input->post('telp'),
		 					  'alamat' => $this->input->post('alamat'),
		 					  'filename' => $this->input->post('filename')
		 					  );

		$sql = $this->model_register_peserta->pro_edit($postingdata);
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
				window.location='".base_url('register_peserta')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Perubahan Data Gagal');
				window.location='".base_url('register_peserta')."';
		        </script>";
		}

			 
	}
	


 
	public function opt_jabatan_register_peserta(){

	}

	public function opt_kelompok(){

	}

	public function opt_jurusan(){
		
	}

	public function delete(){
		$id = $this->uri->segment(3);
		$sql = $this->model_register_peserta->delete($id);
		if($sql){
			    echo "<script language=javascript>
				alert('Data Berhasil Dihapus');
				window.location='".base_url('register_peserta')."';
		        </script>";
		}else{
				echo "<script language=javascript>
				alert('Data Gagal Dihapus');
				window.location='".base_url('register_peserta')."';
		        </script>";
		}


	}
	public function index()
	{
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['listing'] = $this->model_register_peserta->listing();
		$this->load->view('register_peserta/register_peserta_view',$data);
	}

	public function cetak()
	{
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['listing'] = $this->model_register_peserta->listing();
		$this->load->library('Pdf');
		$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->SetTitle('Pdf Example');
		//$pdf->SetHeaderMargin(30);
		//$pdf->SetTopMargin(20);
		//$pdf->setFooterMargin(20);
		$pdf->SetAutoPageBreak(true);
		$pdf->SetAuthor('Author');
		$pdf->SetDisplayMode('real', 'default');

		$html = $this->load->view('register_peserta/register_peserta_print',$data,true);

		$pdf->writeHTML($html, 0, 1, 0, true, '', true);   
		ob_clean();
		$pdf->Output('pdfexample.pdf', 'I');
	}

	public function add(){
		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['opt_jurusan'] = $this->model_register_peserta->opt_jurusan();
		$data['opt_kelompok'] = $this->model_register_peserta->opt_kelompok();
		$data['opt_kampus'] = $this->model_register_peserta->opt_kampus();
		$data['opt_jabatan_register_peserta'] = $this->model_register_peserta->opt_jabatan_register_peserta();
		$this->load->view('register_peserta/register_peserta_add',$data);
	}

	public function edit(){
		$id = $this->uri->segment(3);
		$data['listing'] = $this->model_register_peserta->edit($id)->row();

		$data['judul'] = 'Aplikasi PASWA '.date('Y');
		$data['username'] = $this->session->userdata('username');
		$data['level'] = $this->session->userdata('level');
		$data['user_id'] = $this->session->userdata('user_id');
		$data['opt_jurusan'] = $this->model_register_peserta->opt_jurusan();
		$data['opt_kelompok'] = $this->model_register_peserta->opt_kelompok();
		$data['opt_kampus'] = $this->model_register_peserta->opt_kampus();
		$data['opt_jabatan_register_peserta'] = $this->model_register_peserta->opt_jabatan_register_peserta();
		$this->load->view('register_peserta/register_peserta_edit',$data);
	}

	 

	

 


	 
}
