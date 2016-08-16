<?php

/**
* 
*/
class Events extends CI_Controller
{
	
	private $pageid = 1006;

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('admin');
		$this->load->model('event_model');
	}

	public function index()
	{
		$data['add_button_uri'] = "admin/events/add";
		$data['eventlist'] = $this->event_model->get_allevents();
		load_admin_view($this->pageid,'admin/news_events/events/main',$data);
	}

	public function add()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/events');

		$this->load->view('admin/news_events/events/_modal_add');
	}

	public function add_save()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$datecreated = new Datetime();
			if( $_FILES['picture']['size'] > 0 )
			{
				$filename = strtotime($datecreated->format('C')).".jpg";
				$data['picture'] = "assets/images/events/".$filename;
				$uploadresponse = $this->_doupload($filename);
			}	
			$data['what'] = $_POST['what'];
			$data['when'] = $_POST['when'];
			$data['where'] = $_POST['where'];
			$data['details'] = $_POST['details'];
			$data['datecreated'] = $datecreated->format("Y-m-d H:i:s");
			$data['isactive'] = 1;

			$this->event_model->add($data);
		}

		redirect('admin/events');
	}

	public function delete($id)
	{
		$this->load->helper('uploadfile');

		// first delete the picture to free server space
		$res = $this->event_model->get_eventbyid($id);
		do_deletefile($res[0]->picture);

		$this->event_model->delete($id);

		redirect('admin/events');	
	}

	public function edit()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/events');

		$id = $_POST['dataid'];
		$data['event'] = $this->event_model->get_eventbyid($id);

		$this->load->view('admin/news_events/events/_modal_edit', $data);
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

				$res = $this->event_model->get_eventbyid($id);
				do_deletefile($res[0]->picture);

				$uploadresponse = $this->_doupload($filename);

				$data['picture'] = "assets/images/events/".$filename;
			}


			$data['what'] = $_POST['what'];
			$data['where'] = $_POST['where'];
			$data['when'] = $_POST['when'];
			$data['details'] = $_POST['details'];

			 $response['db_update'] = $this->event_model->update($data,$id);
		}

		redirect('admin/events');
	}

	function _doupload($filename)
	{
		$config['upload_path'] = './assets/images/events';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
		$config['file_name'] = $filename;

		$this->load->helper('uploadfile');

		return do_uploadfile($config, 'picture');
	}
}