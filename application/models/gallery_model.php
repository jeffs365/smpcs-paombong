<?php

/**
* 
*/
class Gallery_model extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function get_folders(){
		$query = 'select * from g_folder order by datecreated desc';
		$q = $this->db->query($query);
		return $q->result();
	}

	public function get_folderbyname($var){
		$q = $this->db->get_where('g_folder',array('name' => $var));
		return $q->result();
	}

	public function get_folderbyid($var){
		$q = $this->db->get_where('g_folder',array('id' => $var));
		return $q->result();
	}

	public function get_imagebyfolderid($id)
	{
		$q = $this->db->get_where('g_images', array('folderid' => $id));
		return $q->result();
	}

	public function get_imagebyid($id)
	{
		$q = $this->db->get_where('g_images', array('id' => $id));
		return $q->result();
	}

	public function get_imagesbyfoldername($var)
	{
		$folder = $this->get_folderbyname($var);
		$folder_id;
		$folder_name;

		if(count($folder) > 0)
		{
			$folder_id = $folder[0]->id;
			$folder_name = $folder[0]->name;
		}
		else
		{
			$que = $this->get_folders();
			$folder_id = $que[0]->id;
			$folder_name = $que[0]->name;
		}

		$g_images['images'] = $this->get_imagebyfolderid($folder_id);
		$g_images['folder'] = $folder_name;
		return $g_images;
	}

	public function add_folder($data)
	{
		$q = $this->db->insert('g_folder',$data);
		return $q;
	}

	public function update_folder($data,$id)
	{
		$q = $this->db->update('g_folder',$data,array('id' => $id));
		return $q;
	}

	public function delete_folder($id)
	{
		$q = $this->db->delete('g_folder',array('id' => $id));
		return $q;
	}

	public function add_image($data)
	{
		$q = $this->db->insert('g_images',$data);
		return $q;
	}

	public function delete_image($id)
	{
		$q = $this->db->delete('g_images',array('id' => $id));
		return $q;
	}

}