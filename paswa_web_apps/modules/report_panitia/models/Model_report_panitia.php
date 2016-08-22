<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_report_panitia extends CI_Model {
 
	public function __construct(){
		parent ::__construct();
		 
	}
 
	public function get_all_report_panitia(){
 
	$query = $this->db->query("select a.*,b.nm_kampus,c.nm_jabatan from tb_panitia a
								left join tb_kampus b on b.id = a.id_kampus
								left join tb_jabatan_panitia c on c.id = a.id_jabatan");

 	return $query;
	}
  
 
}
