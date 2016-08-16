<?php

/**
* 
*/
class Contact_us extends CI_Controller
{
	private $pageid = 1012;

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('admin');
	}

	public function index()
	{


		load_admin_view($this->pageid,'admin/contact_us/contact_us');
	}

	public function save()
	{
		
	}

}