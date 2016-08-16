<?php

/**
* 
*/
class Trustees extends CI_Controller
{
	private $pageid = 1008;

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('admin');
		$this->load->model('trustees_model');
	}

	public function index()
	{
		$data['add_button_uri'] = "admin/trustees/add";
		$data['trustees'] = $this->trustees_model->get_trustees();
		load_admin_view($this->pageid,'admin/administrations/trustees/main',$data);
	}

	public function add()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/trustees');

		$this->load->view('admin/administrations/trustees/_modal_add');
	}

	public function add_save()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{

			if( $_FILES['picture']['size'] > 0 )
			{
				$datecreated = new Datetime();
				$filename = strtotime($datecreated->format('C')).".jpg";
				$data['picture'] = "assets/images/trustees/".$filename;
				$uploadresponse = $this->_doupload($filename);
			}


			$data['name'] = $_POST['name'];
			$data['address'] = $_POST['address'];
			$data['otherinfo'] = $_POST['details'];

			$this->trustees_model->add($data);
		}

		redirect('admin/trustees');
	}

	public function delete($id)
	{
		$this->load->helper('uploadfile');

		// first delete the picture to free server space
		$res = $this->trustees_model->getById($id);
		do_deletefile($res[0]->picture);

		$this->trustees_model->delete($id);

		redirect('admin/trustees');	
	}

	public function edit()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/trustees');

		$id = $_POST['dataid'];
		
		$data['trustees'] = $this->trustees_model->getById($id);

		$this->load->view('admin/administrations/trustees/_modal_edit', $data);
	}

	public function edit_save()
	{
		$response  = array();

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$id = $_POST['dataid'];

			$datecreated = new Datetime();
			$filename = strtotime($datecreated->format('C')).".jpg";

			if( $_FILES['picture']['size'] > 0 )
			{	
				print_r($_FILES['picture']);
				$this->load->helper('uploadfile');

				$res = $this->trustees_model->getById($id);
				do_deletefile($res[0]->picture);

				$uploadresponse = $this->_doupload($filename);

				$data['picture'] = "assets/images/trustees/".$filename;
			}


			$data['name'] = $_POST['name'];
			$data['address'] = $_POST['address'];
			$data['otherinfo'] = $_POST['details'];

			 $response['db_update'] = $this->trustees_model->update($data,$id);
		}

		redirect('admin/trustees');
	}

	function _doupload($filename)
	{
		$config['upload_path'] = './assets/images/trustees';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
		$config['file_name'] = $filename;

		$this->load->helper('uploadfile');

		return do_uploadfile($config, 'picture');
	}
}