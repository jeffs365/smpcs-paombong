<?php
/**
* 
*/
class Site_content_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function get_content($key)
	{
		$que = $this->db->get_where('site_content', array('keycode' => $key));
		return $que->result()[0]->content;
	}

	public function update_content($key, $data = array())
	{
		$record = array(
				'content' => $data['content']
			);

		$que = $this->db->update('site_content',$record,array('keycode' => $key));
		return $que;
	}
}