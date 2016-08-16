<?php

/**
* 
*/
class Staff extends CI_Controller
{
	private $pageid = 1009;

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('admin');
		$this->load->model('staff_model');
	}

	public function index()
	{
		$data['add_button_uri'] = "admin/staff/add";
		$data['staffs'] = $this->staff_model->get();
		load_admin_view($this->pageid,'admin/administrations/staff/main',$data);
	}

	public function add()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/staff');

		$data['designation'] = $this->staff_model->dropdwon_designation();
		$this->load->view('admin/administrations/staff/_modal_add',$data);
	}

	public function add_save()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$data['salutation'] = $_POST['salutation'];
			$data['firstname'] = $_POST['firstname'];
			$data['middlename'] = $_POST['middlename'];
			$data['lastname'] = $_POST['lastname'];
			$data['designationid'] = $_POST['designation'];
			$data['otherinfo'] = $_POST['otherinfo'];

			$this->staff_model->add($data);
		}

		redirect('admin/staff');
	}

	public function delete($id)
	{
		$this->staff_model->delete_staff($id);

		redirect('admin/staff');	
	}

	public function edit()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin/staff');

		$id = $_POST['dataid'];
		$staff = $this->staff_model->get_staffbyid($id);
		$data['staff'] = $staff;
		$data['designation'] = $this->staff_model->dropdwon_designation($staff[0]->designationid);
		$this->load->view('admin/administrations/staff/_modal_edit', $data);
	}

	public function edit_save()
	{
		$response  = array();

		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$id = $_POST['dataid'];

			$data['salutation'] = $_POST['salutation'];
			$data['firstname'] = $_POST['firstname'];
			$data['middlename'] = $_POST['middlename'];
			$data['lastname'] = $_POST['lastname'];
			$data['designationid'] = $_POST['designation'];
			$data['otherinfo'] = $_POST['otherinfo'];

			$response['db_update'] = $this->staff_model->update_staff($id,$data);
		}

		redirect('admin/staff');
	}
}