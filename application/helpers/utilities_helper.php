<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists(('load_template')))
{
	function load_template($tab, $template, $vars = array())
	{
		$vars['header'] = load_viewdata('header');

		$ci = get_instance();
		$ci->load->view('templates/_header',$vars);
		$ci->load->view($template,$vars);
		$ci->load->view('templates/_footer',$vars);
	}
}

function loadmenu()
{
	$ci = get_instance();
	$ci->load->model('menu_model');
	$menus = $ci->menu_model->get_parent();
	
	$res = '<ul id="menuCss" class="menuTemplate3">';

	foreach ($menus as $menu) {
		$menuid = $menu->menuid;
		$menulabel = $menu->label;
		$menuuri = $menu->uri;

		$submenus = $ci->menu_model->get_submenu($menuid);

		if(count($submenus) > 0)
		{
			$res .= '<li>
					                <a href="#" class="arrow">'.$menulabel.'</a>
					                <div class="drop decor3_2">
					                    <div class="left">
					                        <div>';

			foreach ($submenus as $submenu) {
				$submenulabel =$submenu->label;
				$submenuuri = $submenu->uri;

				$res .= '<a href="'.base_url($submenuuri).'"><div>'.$submenulabel.'</div></a>';
			}

			$res .= '</div>
					                    </div>
					                </div>
					            </li>';
		}
		else
		{
			$res .= '<li ><a href="'.base_url($menuuri).'">'.$menulabel.'</a></li>';
		}

		if(end($menus)->menuid != $menuid)
			$res .= '<li class="separator"></li>';

	}

	$res .= '</ul>';

	return $res;
}


function load_viewdata($cat)
{
	$ci = get_instance();
	$ci->load->model('appconfig_model');

	$q = $ci->appconfig_model->get_bycategory($cat);
	$data = array();
	if(count($q) > 0)
	{
		foreach ($q as $d) {
			$key = $d->key;
			$value = $d->value;
			$data[$key] = $value;
		}
		return $data;
	}

}

function configvalue($key)
{
	$ci = get_instance();
	$ci->load->model('appconfig_model');

	$q = $ci->appconfig_model->get_value($key);
	return $q;
}