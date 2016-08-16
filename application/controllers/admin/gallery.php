<?php

/**
* 
*/
class Gallery extends CI_Controller
{
	private $pageid = 1007;
	private $path;

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('upload');
		$this->load->helper('admin');
		$this->load->helper('file');
		$this->load->model('gallery_model');
		$this->load->model('appconfig_model');

		$this->path = $this->appconfig_model->get_value('gallery_folder');
	}

	public function index()
	{
		$data['add_button_uri'] = "admin/gallery/add";
		$data['folders'] = $this->gallery_model->get_folders();
		load_admin_view($this->pageid,'admin/gallery/main',$data);
	}

	public function folder($id)
	{
		$f = $this->gallery_model->get_folderbyid($id);
		if(count($f) > 0)
		{
			$foldername = $f[0]->name;
			$l = "<a href='../'>Gallery</a> > ";
			$data['foldername'] = $l.$foldername;
		}

		$data['add_button_uri'] = "admin/gallery/add_img?folderid=".$id;
		$data['images'] = $this->gallery_model->get_imagebyfolderid($id);
		load_admin_view($this->pageid,'admin/gallery/folder/main',$data);
	}

	public function add_img()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/gallery');

		$data["folderid"] = $_REQUEST["folderid"];

		$this->load->view('admin/gallery/folder/_modal_add',$data);
	}

	public function add_img_save()
	{
		$folderid = $_POST['dataid'];

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$files = $_FILES;
		    $cpt = count($_FILES['images']['name']);
		    for($i=0; $i<$cpt; $i++)
		    {           
		    	$datecreated = new Datetime();

		        $_FILES['images']['name']= $files['images']['name'][$i];
		        $_FILES['images']['type']= $files['images']['type'][$i];
		        $_FILES['images']['tmp_name']= $files['images']['tmp_name'][$i];
		        $_FILES['images']['error']= $files['images']['error'][$i];
		        $_FILES['images']['size']= $files['images']['size'][$i];  

		        $data['folderid'] = $folderid;
				$data['filename'] = $files['images']['name'][$i];
				$data['label'] = $files['images']['name'][$i];
				$data['datecreated'] = $datecreated->format("Y-m-d H:i:s");

				$q = $this->gallery_model->get_folderbyid($folderid);
				$foldername = $q[0]->name;

		        $this->upload->initialize($this->set_upload_options($foldername));
		        $this->upload->do_upload("images");

		        $this->gallery_model->add_image($data);
		    }
		}

		redirect('admin/gallery/folder/'.$folderid);
	}

	public function delete_img($id)
	{
		$folderid = $_REQUEST['folderid'];

		$res = $this->gallery_model->get_folderbyid($folderid);		
		
		$img = $this->gallery_model->get_imagebyid($id);

		if(count($res) > 0 && count($img) > 0)
		{
			$label = str_replace('//','/',$this->path.'/'.$res[0]->name.'/'.$img[0]->filename);
			
			if(file_exists($label))
			{
				unlink($label);
				$this->gallery_model->delete_image($id);
			}
		}

		redirect('admin/gallery/folder/'.$folderid);	
	}

	public function view($id)
	{
		$folderid = $_REQUEST['folderid'];

		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/gallery/folder/'.$folderid);

		$res = $this->gallery_model->get_folderbyid($folderid);		
		
		$img = $this->gallery_model->get_imagebyid($id);

		if(count($res) > 0 && count($img) > 0)
		{
			$label = str_replace('//','/',$this->path.'/'.$res[0]->name.'/'.$img[0]->filename);
			
			$data['imagepath'] = $label;
			$data['imagedata'] = $img;
			$data['folderdata'] = $res;
		}

		$this->load->view('admin/gallery/folder/_modal_view',$data);
	}

	public function add()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/gallery');

		$this->load->view('admin/gallery/_modal_add');
	}

	public function add_save()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$datecreated = new Datetime();
			$label = $_POST['label'];
			$p = $this->path.'/'.$label;

			if (mkdir($p, 0777, true)) {
				$data['name'] = $label;
				$data['description'] = $_POST['details'];
				$data['datecreated'] = $datecreated->format("Y-m-d H:i:s");

				$this->gallery_model->add_folder($data);
			}
		}

		redirect('admin/gallery');
	}


	public function edit()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/gallery');

		$id = $_POST['dataid'];
		$data['gallery'] = $this->gallery_model->get_folderbyid($id);

		$this->load->view('admin/gallery/_modal_edit', $data);
	}


	public function edit_save()
	{
		$response  = array();

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$id = $_POST['dataid'];

			$data['name'] = $_POST['label'];
			$data['description'] = $_POST['details'];

			 $response['db_update'] = $this->gallery_model->update_folder($data,$id);
		}

		redirect('admin/gallery');
	}

	public function delete($id)
	{
		$res = $this->gallery_model->get_folderbyid($id);
		$label = $this->path.'/'.$res[0]->name;
		
		if(delete_files($label))
		{
			if(rmdir($label))
			{
				$this->gallery_model->delete_folder($id);
			}
		}

		redirect('admin/gallery');	
	}


	private function set_upload_options($foldername)
	{   
	    //upload an image options
	    $config = array();
	    $config['upload_path'] = './assets/images/gallery/'.$foldername;
	    $config['allowed_types'] = 'gif|jpg|png';
	    $config['max_size']      = '0';
	    $config['overwrite']     = FALSE;

	    return $config;
	}

}