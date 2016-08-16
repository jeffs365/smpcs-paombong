<?php
/**
* 
*/
class Policy extends CI_Controller
{
	
	private $pageid = 1004;

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
		$data['content'] = $this->site_content_model->get_content('adm_poli');

		load_admin_view($this->pageid,'admin/admissions/policy',$data);
	}

	public function update()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$data = array();
			$data['content'] = $_POST['content'];

			$res = $this->site_content_model->update_content('adm_poli',$data);
			if($res)
				return true;
		}

		return false;
	}
}