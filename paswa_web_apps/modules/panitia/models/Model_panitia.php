<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_panitia extends CI_Model {
 
	public function auth($username,$password)
	{	
		$sql =$this->db->query("select * from tab_user where username = '$username' and password = '$password'");

		return $sql;
	 
	}

	public function pro_add($postingdata){
		$sql = $this->db->query("INSERT INTO tb_panitia (id,nm_panitia,semester,id_kampus,id_jabatan,telp,alamat,foto) VALUES (null,'$postingdata[nm_panitia]','$postingdata[semester]','$postingdata[id_kampus]','$postingdata[id_jabatan]','$postingdata[telp]','$postingdata[alamat]','$postingdata[filename]')");
		return $sql;
	}

	public function pro_edit($postingdata){
		$sql = $this->db->query("UPDATE tb_panitia SET nm_panitia = '$postingdata[nm_panitia]',semester = '$postingdata[semester]',id_kampus = '$postingdata[id_kampus]',id_jabatan='$postingdata[id_jabatan]',telp='$postingdata[telp]',alamat = '$postingdata[alamat]',foto = '$postingdata[filename]' where id = '$postingdata[id]'");
		return $sql;
	}

	public function listing(){
		$sql = $this->db->query("select a.*,b.nm_kampus,c.nm_jabatan from tb_panitia a
								left join tb_kampus b on b.id = a.id_kampus
								left join tb_jabatan_panitia c on c.id = a.id_jabatan");
		return $sql;
	}

	public function edit($id){
		$sql = $this->db->query("select a.*,b.nm_kampus,c.nm_jabatan from tb_panitia a
								left join tb_kampus b on b.id = a.id_kampus
								left join tb_jabatan_panitia c on c.id = a.id_jabatan where a.id = '$id'");
		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tb_panitia where id = '$id'");
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

	public function opt_jabatan_panitia(){
	$sql = $this->db->query("select * from tb_jabatan_panitia order by id asc");
	return $sql;
	}
}
