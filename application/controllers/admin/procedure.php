<?php
/**
* 
*/
class Procedure extends CI_Controller
{
	
	private $pageid = 1003;

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->library('session');
		$this->load->model('site_content_model');
		$this->load->helper('admin');
	}

	public function index()
	{
		$data['content'] = $this->site_content_model->get_content('adm_proc');

		load_admin_view($this->pageid,'admin/admissions/procedure',$data);
	}

	public function update()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$data = array();
			$data['content'] = $_POST['content'];

			$res = $this->site_content_model->update_content('adm_proc',$data);
			if($res)
				return true;
		}

		return false;
	}
}