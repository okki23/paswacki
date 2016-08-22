<?php
/*
@author : Okki Setyawan &copy 2016
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_dashboard extends CI_Model {
 
	public function get_all_panitia(){
	$sql = $this->db->query("select * from tb_panitia");
	return $sql;
	}

	public function get_all_peserta(){
	$sql = $this->db->query("select * from tb_peserta");
	return $sql;
	}


}
