<?php
/*
@author : Okki Setyawan &copy 2016
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register_peserta extends CI_Model {
 	 

	public function pro_add_peserta($postingdata){
		$sql = $this->db->query("INSERT INTO tb_peserta (id,user_id,email,foto) VALUES (null,'$postingdata[user_id]','$postingdata[email]','avatar_11_tn.png')");
		return $sql;
	}
	
	public function pro_add_user_peserta($postingdata){
		$sql = $this->db->query("INSERT INTO tb_user (id,username,password,level,user_id) VALUES (null,'$postingdata[username]','$postingdata[password]','$postingdata[level]','$postingdata[user_id]')");
		return $sql;
	}

	 
}
