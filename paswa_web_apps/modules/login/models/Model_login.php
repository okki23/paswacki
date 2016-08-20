<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
 
	public function auth($username,$password,$level)
	{	
		$sql =$this->db->query("select * from tb_user where username = '$username' and password = '$password' AND level = '$level'");

		return $sql;
	 
	}
}
