<?php

/**
* 
*/
class Users_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
		$this->load->model('appconfig_model');
	}

	function do_login($userid,$pass)
	{
		$query = "select * from users where userid = '".$userid."'";

		$q = $this->db->query($query);

		if($q->num_rows > 0)
		{
			$que = $q->result();
			$p = $que[0]->password;
			if($this->decode($p) == $pass)
				return true;
		}
		return false;
	}

	function get_pass($userid)
	{
		$pass = '';
		$q = $this->db->get_where('users',array('userid' => $userid));

		if(count($q) > 0)
		{
			$que = $q->result();
			$pass = $this->decode($que[0]->password);
		}

		return $pass;
	}

	function encode($var)
	{
		$key = $this->appconfig_model->get_value('passkey');
		return $this->encrypt->encode($var,$key);
	}

	function decode($var)
	{
		$key = $this->appconfig_model->get_value('passkey');
		return $this->encrypt->decode($var,$key);
	}

}