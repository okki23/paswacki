<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_panitia extends CI_Controller {
/*
@author : Okki Setyawan &copy 2016
*/
	
	//ini method yang pertama kali di jalankan oleh codeginiter,semua pemanggilan ada disini termasuk hak akses
	  
	public function __construct(){
		parent ::__construct();
		//panggil model print_panitia jika memang controller butuh transaksi data
		$this->load->model('model_print_panitia');
		//jika tidak ada session yang terdaftar maka sistem balik ke halaman login
		if($this->session->userdata('username') == ''){
			redirect(base_url('login'));
		}
		 
	} 
        
        public function index(){
             
            $data['judul'] = 'Print Panitia';
            $data['listing'] = $this->db->query("select a.*,b.nm_kampus,c.nm_jabatan from tb_panitia a
                                left join tb_kampus b on b.id = a.id_kampus
                                left join tb_jabatan_panitia c on c.id = a.id_jabatan");
            
            $this->load->library("pdf");
            $this->pdf->setPrintHeader(false);
            $this->pdf->setPrintFooter(true,'aku','kau');
            $this->pdf->SetHeaderData("", "", 'Judul Header', "codedb.co");
            $this->pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            // set auto page breaks
            $this->pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);    
            // add a page
            $this->pdf->AddPage("P","A4");
             // set font
            $this->pdf->SetFont("helvetica", "", 9); 
            $html = $this->load->view('print_panitia/print_panitia',$data,true);

            $this->pdf->writeHTML($html, true, false, true, false, "");
            $this->pdf->Output("Print Panitia.pdf", "I");    
        }

         public function detail(){
            $id = $this->uri->segment(3);
          
            $data['judul'] = 'Print Panitia Detail';
            $data['listing'] = $this->db->query("select a.*,b.nm_kampus,c.nm_jabatan from tb_panitia a
                                left join tb_kampus b on b.id = a.id_kampus
                                left join tb_jabatan_panitia c on c.id = a.id_jabatan where a.id = '$id' ")->row();
 
            $this->load->library("pdf");
            $this->pdf->setPrintHeader(false);
            $this->pdf->setPrintFooter(true,'aku','kau');
            $this->pdf->SetHeaderData("", "", 'Judul Header', "codedb.co");
            $this->pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
            // set auto page breaks
            $this->pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);    
            // add a page
            $this->pdf->AddPage("P","A4");
             // set font
            $this->pdf->SetFont("helvetica", "", 9); 
            $html = $this->load->view('print_panitia/print_panitia_detail',$data,true);

            $this->pdf->writeHTML($html, true, false, true, false, "");
            $this->pdf->Output("Print Panitia.pdf", "I");    
        }
        
         
	 
}
