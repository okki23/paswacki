<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_peserta extends CI_Model {
 
	public function auth($username,$password)
	{	
		$sql =$this->db->query("select * from tab_user where username = '$username' and password = '$password'");

		return $sql;
	 
	}

	public function pro_add($postingdata){
		$sql = $this->db->query("INSERT INTO tb_peserta (id,nm_peserta,semester,id_kampus,id_jabatan,telp,alamat,foto) VALUES (null,'$postingdata[nm_peserta]','$postingdata[semester]','$postingdata[id_kampus]','$postingdata[id_jabatan]','$postingdata[telp]','$postingdata[alamat]','$postingdata[filename]')");
		return $sql;
	}

	public function pro_edit($postingdata){
		$sql = $this->db->query("UPDATE tb_peserta SET nm_peserta = '$postingdata[nm_peserta]',semester = '$postingdata[semester]',id_kampus = '$postingdata[id_kampus]',id_jabatan='$postingdata[id_jabatan]',telp='$postingdata[telp]',alamat = '$postingdata[alamat]',foto = '$postingdata[filename]' where id = '$postingdata[id]'");
		return $sql;
	}

	public function listing(){
		$sql = $this->db->query("select a.*,b.nama as namakelas,c.nm_jurusan,d.nm_kampus from 
							    tb_peserta a
								left join tb_kelas b on b.id = a.id_kelas
								left join tb_jurusan c on c.id = a.id_jurusan
								left join tb_kampus d on d.id = a.id_kampus");
		return $sql;
	}

	public function edit($id){
		$sql = $this->db->query("select a.*,b.nm_kampus,c.nm_jabatan from tb_peserta a
								left join tb_kampus b on b.id = a.id_kampus
								left join tb_jabatan_peserta c on c.id = a.id_jabatan where a.id = '$id'");
		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tb_peserta where id = '$id'");
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

	public function opt_kelas(){
	$sql = $this->db->query("select * from tb_kelas order by id asc");
	return $sql;
	}
}
