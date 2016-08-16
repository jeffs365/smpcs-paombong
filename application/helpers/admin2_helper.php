<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

function load_admin_view($menu, $submenu, $view, $vars = array())
{
	$ci =& get_instance();
	$ci->load->model('admin_menu');

	$data['adminmenu'] = $ci->admin_menu->loadmenu($menu,$submenu);
	$data['admin_page_header'] = ($submenu != '') ? $menu.' > '.$submenu : $menu;

	if(isset($vars))
	{
		foreach ($vars as $key => $value) {
			$data[$key] = $value;
		}
	}

	$ci->load->view('admin2/_header',$data);
	$ci->load->view($view,$data);
	$ci->load->view('admin2/_footer',$data);
}
