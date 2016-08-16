<?php

/**
* 
*/
class Appconfig_model extends CI_Model
{

	private $tableName = 'appconfig';
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_bykey($keys = array())
	{
		$q = $this->db->get_where($this->tableName,array('key' => $keys));
		return $q->result();
	}

	public function get_bycategory($cat)
	{
		$q = $this->db->get_where($this->tableName,array('category' => $cat));
		return $q->result();
	}

	public function get_value($key)
	{
		$res = '';
		$q = $this->db->get_where($this->tableName,array('key' => $key));
		if(count($q) > 0 )
		{
			$que = $q->result();
			$res = $que[0]->value;
		}

		return $res;
	}

	public function update_value($key, $value)
	{

		$q = $this->db->update($this->tableName, array('value' => , $value), array('key' => $key));
		return $q;
	}

}