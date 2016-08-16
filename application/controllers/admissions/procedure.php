<?php

/**
* 
*/
class Procedure extends CI_Controller
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
					'title' => 'Procedure',
					'header_css' => array( 'bootstrap.min.css',  'main.css', 'menu.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'menu.js' ) 
					);

		$events = $this->site_content_model->get_content('adm_proc');

		$data['content'] = $events;

		load_template('News','admissions/procedure', $data);
	}
}