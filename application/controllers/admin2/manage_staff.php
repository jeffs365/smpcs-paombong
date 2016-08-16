<?php

/**
* 
*/
class Manage_staff extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('staff_model');
		$this->load->helper(array('html','form','admin2'));
		$this->load->library(array('form_validation','session'));
	}

	public function index(){
		redirect('admin2/cpanel/staff');
	}

	public function edit()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin2/cpanel/staff');

		$id = $_POST['id'];
		$staff = $this->staff_model->get_staffbyid($id);
		$designation = $this->staff_model->dropdwon_designation($staff[0]->designationid);

		$data['staff'] = $staff[0];
		$data['designation'] = $designation;
		
		$data['id'] = $id;

		$this->load->view('admin2/staff/edit',$data);
	}

	public function save()
	{
		if($_SERVER['REQUEST_METHOD'] != 'POST')
			redirect('admin2/cpanel/staff');

		$validation_errors = "";

		$this->form_validation->set_rules('salutation','Salutation', 'trim|required|xss_clean')
								  ->set_rules('firstname','First Name', 'trim|required|xss_clean')
								  ->set_rules('middlename','Middle Name', 'trim|xss_clean')
								  ->set_rules('lastname','Last Name', 'trim|required|xss_clean')
								  ->set_rules('designation','Designation', 'trim|required|xss_clean')
								  ->set_rules('otherinfo','Additional Information', 'trim|xss_clean');


		if($this->form_validation->run() == FALSE)
		{
			$validation_errors = validation_errors();		
		}
		else
		{
			$record = array(
					'salutation' => $_POST['salutation'],
					'firstname' => $_POST['firstname'],
					'middlename' => $_POST['middlename'],
					'lastname' => $_POST['lastname'],
					'designationid' => $_POST['designation'],
					'otherinfo' => $_POST['otherinfo']
				);

			$res = $this->staff_model->update_staff($_POST['staffid'], $record);

			if($res)
			{
				$data['isSuccess'] = '1';
				$data['postdata'] = $_POST;
				$data['designationlabel'] = $this->staff_model->get_designationlabel($_POST['designation']);
				$data['return_message'] = '';
			}
			else
				$validation_errors = 'Faild to save the record...';
		}

		$data['error_message'] = '<div class="alert alert-danger alert-dismissible text-center" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  	<span aria-hidden="true">&times;</span>
					  </button>
			  			<p>'.$validation_errors.'</p>
					</div>';



	    header('Content-Type: application/json');
	    echo json_encode( $data );	
	}

	public function delete($id)
	{
		$this->staff_model->delete_staff($id);
	}

}