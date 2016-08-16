<?php

/**
* 
*/
class Event_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function get_allevents()
	{
		$query = 'select * from events where isactive = 1 order by `when` desc';
		$que = $this->db->query($query);
		return $que->result();
	}

	public function get_eventbyid($id)
	{
		$query = $this->db->get_where('events',array('id' => $id));
		return $query->result();
	}

	public function get_topthreevent()
	{
		$query = 'select *,SUBSTRING(`details`,1,90) as limitdetail from events where `isactive` = 1 ORDER BY `events`.`id` DESC limit 3';
		$que = $this->db->query($query);
		return $que->result();
	}

	public function add($data)
	{
		$q = $this->db->insert('events',$data);
		return $q;
	}

	public function update($data,$id)
	{
		$q = $this->db->update('events',$data,array('id' => $id));
		return $q;
	}

	public function delete($id)
	{
		$q = $this->db->delete('events',array('id' => $id));
		return $q;
	}
}