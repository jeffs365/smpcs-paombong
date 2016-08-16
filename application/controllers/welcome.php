<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model(array('news_model','event_model'));
	}

	public function index()
	{
		$data = array(
					'title' => 'Home',
					'header_css' => array( 'bootstrap.min.css', 'main.css', 'home.css', 'menu.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'menu.js' ) 
					);

		$data['topfournews'] = $this->news_model->get_topfournews();
		$data['topfourevent'] = $this->event_model->get_topthreevent();
		

		load_template('HOME','welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */