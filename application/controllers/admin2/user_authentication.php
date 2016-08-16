<?php

/**
* 
*/
class User_authentication extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library(array('form_validation','session'));
		$this->load->model('users_model');
	}

	function index(){
		$this->load->view('admin2/login_form');
	}

	function login(){
		$data = array();

		if($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$this->form_validation->set_rules('userid','User ID', 'trim|required|xss_clean|alpha_dash')
								  ->set_rules('pass','Password', 'trim|required|xss_clean');


			if($this->form_validation->run() == TRUE)
			{
				$userid = $this->input->post('userid');
				$pass = $this->input->post('pass');

				$res = $this->users_model->do_login($userid,$pass);

				if($res)
				{
					$ses = array(
							'userid' => $userid
						);

					$this->session->set_userdata($ses);

					redirect('admin2/cpanel', 'refresh');

					return;
				}
				else
					$data['fail_login_message'] = 'User ID or Password is incorrect.';
			}
			else
				$data['fail_login_message'] = validation_errors();
		}
		
		$this->load->view('admin2/login_form',$data);
	}

	function logout()
	{
		$this->session->unset_userdata('userid');
		$this->load->view('admin2/login_form');
	}
}