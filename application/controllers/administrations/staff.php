<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function index()
	{
		$this->load->model('staff_model');
		$res = $this->staff_model->get_staff();

		$data = array(
					'title' => 'Teacher & Staff',
					'header_css' => array( 'bootstrap.min.css', 'main.css', 'menu.css', 'administrations.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'menu.js' ) ,
					'designationlist' => $res 
					);

		load_template('ABOUT US','administrations/staff', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */