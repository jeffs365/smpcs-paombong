<?php

/**
* 
*/
class News_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function get_allnews()
	{
		$query = 'select * from news where isactive = 1 order by id desc';
		$que = $this->db->query($query);
		return $que->result();
	}

	public function get_newsbyid($id)
	{
		$query = $this->db->get_where('news',array('id' => $id));
		return $query->result();
	}

	public function get_topfournews()
	{
		$query = 'select * from news where isactive = 1 order by id desc limit 4';
		$que = $this->db->query($query);
		return $que->result();
	}

	public function add($data)
	{
		$q = $this->db->insert('news',$data);
		return $q;
	}

	public function update($data,$id)
	{
		$q = $this->db->update('news',$data,array('id' => $id));
		return $q;
	}

	public function delete($id)
	{
		$q = $this->db->delete('news',array('id' => $id));
		return $q;
	}
}