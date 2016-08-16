<?php

/**
* 
*/
class Authentication extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','admin'));
		$this->load->library(array('form_validation','session'));
		$this->load->model('users_model');
	}

	function index(){
		$data['login_cookie'] = $this->_get_cookie();
		$this->load->view('admin/authentication/login_form',$data);
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
				$remember = $this->input->post('remember');

				$res = $this->users_model->do_login($userid,$pass);

				if($res)
				{
					$ses = array(
							'userid' => $userid
						);

					$this->session->set_userdata($ses);

					if($remember)
						$this->_set_cookie_for_login($_POST);

					redirect('admin/home', 'refresh');

					return;
				}
				else
					$data['fail_login_message'] = 'User ID or Password is incorrect.';
			}
			else
				$data['fail_login_message'] = validation_errors();
		}
		
		$this->load->view('admin/authentication/login_form',$data);
	}

	function logout()
	{
		$this->session->unset_userdata('userid');
		$this->load->view('admin/authentication/login_form');
	}


	function _set_cookie_for_login($post)
	{
		foreach ($post as $k => $v) {
			$cookie = array(
			'name' => 'smdp_'.$k,
			'value' => $this->users_model->encode($v),
			'expire' => time()+86500,
			'path'   => '/',
			);
			$this->input->set_cookie($cookie);
		}
		
	}

	function _get_cookie()
	{
		$userid = $this->input->cookie('smdp_userid');
		$pass = $this->input->cookie('smdp_pass');

		return array('userid' => $this->users_model->decode($userid), 'pass' => $this->users_model->decode($pass));
	}
}