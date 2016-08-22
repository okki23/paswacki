<?php
/*
@author : Okki Setyawan &copy 2016
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data_pribadi extends CI_Model {
 
	 

	public function pro_add($postingdata){
		$sql = $this->db->query("INSERT INTO tb_data_pribadi (id,nm_data_pribadi,semester,id_kampus,id_jabatan,telp,alamat,foto) VALUES (null,'$postingdata[nm_data_pribadi]','$postingdata[semester]','$postingdata[id_kampus]','$postingdata[id_jabatan]','$postingdata[telp]','$postingdata[alamat]','$postingdata[filename]')");
		return $sql;
	}

	public function pro_edit($postingdata){
		$sql = $this->db->query("UPDATE tb_peserta SET nim = '$postingdata[nim]',nama_peserta = '$postingdata[nama_peserta]',semester = '$postingdata[semester]',id_kelas = '$postingdata[id_kelas]',id_jurusan = '$postingdata[id_jurusan]',id_kampus = '$postingdata[id_kampus]',motto = '$postingdata[motto]',jenis_kelamin = '$postingdata[jenis_kelamin]',email = '$postingdata[email]',alamat = '$postingdata[alamat]',no_telp = '$postingdata[no_telp]',foto = '$postingdata[filename]' WHERE user_id = '$postingdata[user_id]'");
		return $sql;
	}

	public function listing($data){
		$sql = $this->db->query("select a.*,b.nama as namakelas,c.nm_jurusan,d.nm_kampus,case when a.jenis_kelamin = 'L' then 'Laki-Laki' when a.jenis_kelamin = 'P' then 'Perempuan' else 'N/A' end as status_jk from 
							    tb_peserta a
								left join tb_kelas b on b.id = a.id_kelas
								left join tb_jurusan c on c.id = a.id_jurusan
								left join tb_kampus d on d.id = a.id_kampus where a.user_id = '$data[user_id]' ");
		return $sql;
	}

	public function edit($user_id){
		$sql = $this->db->query("select a.*,b.nama as namakelas,c.nm_jurusan,d.nm_kampus from 
							    tb_peserta a
								left join tb_kelas b on b.id = a.id_kelas
								left join tb_jurusan c on c.id = a.id_jurusan
								left join tb_kampus d on d.id = a.id_kampus where a.user_id = '$user_id' ");
		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tb_data_pribadi where id = '$id'");
		return $sql;
	}

	public function opt_jurusan(){
	$sql = $this->db->query("select * from tb_jurusan order by id asc");
	return $sql;
	}

	public function opt_kelas(){
	$sql = $this->db->query("select * from tb_kelas order by id asc");
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
