<?php

/**
* 
*/
class Home extends CI_Controller
{
	private $pageid = 1001;

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