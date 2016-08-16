<?php

/**
* 
*/
class Trustees_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_trustees()
	{
		$q = $this->db->get('trustees');
		return $q->result();
	}

	public function add($data)
	{
		$q = $this->db->insert('trustees',$data);
		return $q;
	}

	public function getById($id)
	{
		$query = $this->db->get_where('trustees',array('id' => $id));
		return $query->result();
	}

	public function delete($id)
	{
		$q = $this->db->delete('trustees',array('id' => $id));
		return $q;
	}

	public function update($data,$id)
	{
		$q = $this->db->update('trustees',$data,array('id' => $id));
		return $q;
	}
}