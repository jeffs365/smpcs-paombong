<?php

/**
* 
*/
class Cpanel extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('admin2');
	}

	public function index(){
		load_admin_view('Home','','admin2/blank');
	}

	public function home(){
		load_admin_view('Home','','admin2/blank');
	}

	public function requirements(){
		load_admin_view('Admissions','Requirements','admin2/blank');
	}

	public function Procedure(){
		load_admin_view('Admissions','Procedure','admin2/blank');
	}

	public function policy(){
		load_admin_view('Admissions','Policy','admin2/blank');
	}

	public function news(){
		load_admin_view('News & Events','School News','admin2/blank');
	}

	public function events(){
		load_admin_view('News & Events','Upcomming Events','admin2/blank');
	}

	public function gallery(){
		load_admin_view('Gallery','','admin2/blank');
	}

	public function trustees(){
		load_admin_view('Administrations','Board of Trustess','admin2/blank');
	}

	public function staff(){
		$this->load->model('staff_model');

		$data['staff_list'] = $this->staff_model->get();

		load_admin_view('Administrations','Staff Directory','admin2/staff', $data);
	}

	public function history(){
		load_admin_view('About Us','History','admin2/blank');
	}

	public function mission_vision(){
		load_admin_view('About Us','Mission and Vision','admin2/blank');
	}

	public function contactus(){
		load_admin_view('Contact Us','','admin2/blank');
	}
}