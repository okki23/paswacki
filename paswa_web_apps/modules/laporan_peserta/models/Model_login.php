<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
 
	public function auth($username,$password)
	{	
		$sql =$this->db->query("select * from tab_user where username = '$username' and password = '$password'");

		return $sql;
	 
	}
}
