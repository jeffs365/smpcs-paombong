<?php

/**
* 
*/
class Pages_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_page_title($pageid)
	{
		$que = $this->db->get_where('pages',array('pageid' => $pageid));
		$q = $que->result();
		return $q[0]->title;
	}

	public function get_pagesetting($pageid)
	{
		$query = "select pf.* from pages p 
					join pagefilesetting pfs on p.pageid = pfs.pageid 
					join pagefiles pf on pfs.fileid = pf.fileid 
					where p.pageid = ".$pageid;
		$q = $this->db->query($query);
		return $q->result();
	}

}