<?php

/**
* 
*/
class Trustees extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('trustees_model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Board of Trustees',
			'header_css' => array( 'bootstrap.min.css', 'main.css', 'menu.css', 'administrations.css' ),
			'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'menu.js' )
			);

		$data['trustees'] = $this->trustees_model->get_trustees();

		load_template('ABOUT US','administrations/trustees', $data);
	}
}