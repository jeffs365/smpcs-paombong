<?php

/**
* 
*/
class Menu_model extends CI_Model
{

	private $tableName = 'menu';
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_parent()
	{
		$q = 'select * from '.$this->tableName.' where issub = 0 and isactive = 1 order by displayorder asc';
		return $this->db->query($q)->result();
	}

	public function get_submenu($id)
	{
		$q = 'select * from '.$this->tableName.' where parentid = '.$id.' and isactive = 1 order by displayorder asc';
		return $this->db->query($q)->result();
	}

}