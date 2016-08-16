<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class Gallery extends CI_Controller
{
	private $path = './assets/images/gallery/';
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('directory','gallery'));	
		$this->load->model(array('gallery_model'));
	}

	public function index($var = '')
	{
		$g_folders = $this->gallery_model->get_folders();
		$g_images = $this->gallery_model->get_imagesbyfoldername(urldecode($var));

		$data = array(
					'title' => 'Gallery',
					'header_css' => array( 'bootstrap.min.css','ekko-lightbox.min.css', 'main.css', 'menu.css', 'gallery.css' ),
					'header_js' => array( 'jquery-2.1.4.min.js' ,  'bootstrap.min.js', 'ekko-lightbox.min.js', 'menu.js', 'gallery.js' ),
					'g_images' => $g_images,
					'g_folder' => $g_folders
					);

		load_template('Gallery','gallery', $data);
	}
}