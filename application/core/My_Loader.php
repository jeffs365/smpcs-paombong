<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Loader extends CI_Loader 
{
	public function template($tab, $template_path, $vars = array())
	{
		$this->view('templates/_header',$vars);
		$this->view($template_path,$vars);
		$this->view('templates/_footer',$vars);
	}
}