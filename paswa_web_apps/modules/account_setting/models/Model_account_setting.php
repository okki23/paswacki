<?php
/*
@author : Okki Setyawan &copy 2016
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_account_setting extends CI_Model {
 
	public function auth($username,$password)
	{	
		$sql =$this->db->query("select * from tab_user where username = '$username' and password = '$password'");

		return $sql;
	 
	}

	public function pro_add($postingdata){
		$sql = $this->db->query("INSERT INTO tb_account_setting (id,nm_account_setting,semester,id_kampus,id_jabatan,telp,alamat,foto) VALUES (null,'$postingdata[nm_account_setting]','$postingdata[semester]','$postingdata[id_kampus]','$postingdata[id_jabatan]','$postingdata[telp]','$postingdata[alamat]','$postingdata[filename]')");
		return $sql;
	}

	public function pro_edit($postingdata){
		$sql = $this->db->query("UPDATE tb_account_setting SET nm_account_setting = '$postingdata[nm_account_setting]',semester = '$postingdata[semester]',id_kampus = '$postingdata[id_kampus]',id_jabatan='$postingdata[id_jabatan]',telp='$postingdata[telp]',alamat = '$postingdata[alamat]',foto = '$postingdata[filename]' where id = '$postingdata[id]'");
		return $sql;
	}

	public function listing($data){
		$sql = $this->db->query("select * from tb_user where user_id = '$data[user_id]' ");
		return $sql;
	}

	public function edit($user_id){
		$sql = $this->db->query("select * from tb_user where user_id =  '$user_id'");
		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tb_account_setting where id = '$id'");
		return $sql;
	}

	public function opt_jurusan(){
	$sql = $this->db->query("select * from tb_jurusan order by id asc");
	return $sql;
	}

	public function opt_kampus(){
	$sql = $this->db->query("select * from tb_kampus order by id asc");
	return $sql;
	}

	public function opt_kelompok(){
	$sql = $this->db->query("select * from tb_kelompok order by id asc");
	return $sql;
	}

	public function opt_jabatan_account_setting(){
	$sql = $this->db->query("select * from tb_jabatan_account_setting order by id asc");
	return $sql;
	}
}
