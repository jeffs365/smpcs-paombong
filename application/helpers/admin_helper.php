<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

function load_admin_view($pageid, $view, $vars = array())
{
	$ci =& get_instance();
	$ci->load->model('admin_menu');

	$data = array();

	if(isset($vars))
	{
		foreach ($vars as $key => $value) {
			$data[$key] = $value;
		}
	}

	if(isset($vars['add_button_uri']))
		$settings['add_button_uri'] = $vars['add_button_uri'];
	
	$settings['adminmenu'] = $ci->admin_menu->loadmenu();
	$settings['settings'] = load_page_setting($pageid);
	$settings['settingsdata'] = $data;

	$ci->load->view('admin/template/_header',$settings);
	$ci->load->view($view,$data);
	$ci->load->view('admin/template/_footer',$settings);
}


function load_page_setting($pageid)
{
	$ci =& get_instance();
	$ci->load->model('pages_model');
	$pagesettings = $ci->pages_model->get_pagesetting($pageid);
	$title = $ci->pages_model->get_page_title($pageid);

	$css = "";
	$js = "";

	foreach ($pagesettings as $setting) 
	{
		if($setting->type == "css")
		{
			$css .= '<link href="'.base_url($setting->basepath).'" rel="stylesheet">';
		}
		elseif ($setting->type == "js") 
		{
			$js .= '<script src="'.base_url($setting->basepath).'"></script>';
		}
	}

	$settings = array( 'title' => $title , 'css' => $css , 'js' => $js );

	return $settings;
}

/*
	select * from pages p
	join pagefilesetting pfs on p.pageid = pfs.pageid
	join pagesfiles pf on pfs.fileid = pf.fileid
	where p.pageid = $pageid
*/