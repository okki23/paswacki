<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
 

	public function pro_add($posting)
	{
		$sql = $this->db->query("insert into tab_user (id,username,password,level) VALUES (null,'$posting[username]','$posting[password]','$posting[level]')");

		return $sql;
	}

	public function delete($id){
		$sql = $this->db->query("delete from tab_user where id = '$id' ");

		return $sql;	
	}

	public function pro_edit_no_pass($posting)
	{
		$sql = $this->db->query("update tab_user set username = '$posting[username]',level = '$posting[level]' where id = '$posting[id]' ");

		return $sql;
	}

	public function pro_edit_with_pass($posting)
	{
		$sql = $this->db->query("update tab_user set username = '$posting[username]',password = '$posting[password]', level = '$posting[level]' where id = '$posting[id]' ");

		return $sql;
	}

	public function listing(){
		$sql = $this->db->query("select *,case when level = '1' then 'Administrator' else 'User' end as status from tab_user");
		return $sql;
	}

	public function edit($id){
		$sql = $this->db->query("select * from tab_user where id = '$id'");
		return $sql;
	}
}
