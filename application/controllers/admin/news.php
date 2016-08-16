<?php

/**
* 
*/
class News extends CI_Controller
{
	
	private $pageid = 1005;

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('admin');
		$this->load->model('news_model');
	}

	public function index()
	{
		$data['add_button_uri'] = "admin/news/add";
		$data['newslist'] = $this->news_model->get_allnews();
		load_admin_view($this->pageid,'admin/news_events/news/main',$data);
	}

	public function add()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/news');

		$this->load->view('admin/news_events/news/_modal_add');
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

			$data['title'] = $_POST['title'];
			$data['details'] = $_POST['details'];
			$data['datecreated'] = $datecreated->format("Y-m-d H:i:s");
			$data['isactive'] = 1;

			$this->news_model->add($data);
		}

		redirect('admin/news');
	}

	public function delete($id)
	{
		$this->load->helper('uploadfile');

		// first delete the picture to free server space
		$res = $this->news_model->get_newsbyid($id);
		do_deletefile($res[0]->picture);

		$this->news_model->delete($id);

		redirect('admin/news');	
	}

	public function edit()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/news');

		$id = $_POST['dataid'];
		$data['news'] = $this->news_model->get_newsbyid($id);

		$this->load->view('admin/news_events/news/_modal_edit', $data);
	}

	public function edit_save()
	{
		$response  = array();

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$id = $_POST['newsid'];

			$datecreated = new Datetime();
			$filename = strtotime($datecreated->format('C')).".jpg";

			if( $_FILES['picture']['size'] > 0 )
			{	
				print_r($_FILES['picture']);
				$this->load->helper('uploadfile');

				$res = $this->news_model->get_newsbyid($id);
				do_deletefile($res[0]->picture);

				$uploadresponse = $this->_doupload($filename);

				$data['picture'] = "assets/images/news/".$filename;
			}


			$data['title'] = $_POST['title'];
			$data['details'] = $_POST['details'];

			 $response['db_update'] = $this->news_model->update($data,$id);
		}

		redirect('admin/news');
	}

	function _doupload($filename)
	{
		$config['upload_path'] = './assets/images/news';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '10240';
		$config['max_height']  = '7680';
		$config['file_name'] = $filename;

		$this->load->helper('uploadfile');

		return do_uploadfile($config, 'picture');
	}
}