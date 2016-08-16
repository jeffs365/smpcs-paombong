<?php

/**
* 
*/
class Mission_Vision extends CI_Controller
{
	private $pageid = 1011;

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('admin');
	}

	public function index()
	{
		load_admin_view($this->pageid,'admin/template/_blank');
	}

}