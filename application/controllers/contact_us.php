<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('utilities_helper');

		$data = array(
					'title' => 'Contact Us',
					'header_css' => array( 'bootstrap.min.css', 'main.css', 'menu.css', 'contact_us.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'menu.js' ) ,
					'short_name' => 'St. Martin'
					);

		$this->load->model('appconfig_model');
		$data['mapcode'] = $this->appconfig_model->get_value('mapcode');

		load_template('HOME','contact_us', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */