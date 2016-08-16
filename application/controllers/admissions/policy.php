<?php

/**
* 
*/
class Policy extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('site_content_model');
	}

	public function index()
	{
		$data = array(
					'title' => 'Policy',
					'header_css' => array( 'bootstrap.min.css', 'main.css', 'menu.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js',  'menu.js' ) 
					);

		$events = $this->site_content_model->get_content('adm_poli');

		$data['content'] = $events;

		load_template('News','admissions/policy', $data);
	}
}