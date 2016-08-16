<?php

/**
* 
*/
class Admin_menu extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_parent()
	{
		$q = 'select * from admin_menu where issub = 0 and isactive = 1 order by displayorder asc';
		return $this->db->query($q)->result();
	}

	public function get_submenu($id)
	{
		$q = 'select * from admin_menu where parentid = '.$id.' and isactive = 1 order by displayorder asc';
		return $this->db->query($q)->result();
	}

	function loadmenu()
	{
		$menus = $this->get_parent();
		
		if(count($menus) == 0)
			return '';

		$res = '<ul class="nav" id="side-menu">';

		foreach ($menus as $menu) {
			$menuid = $menu->menuid;
			$menulabel = $menu->label;
			$menuuri = $menu->uri;
			$iconclass = $menu->iconclass;

			$submenus = $this->get_submenu($menuid);

			if(count($submenus) > 0)
			{
				$res .= '<li>
                            <a href="#'.$menulabel.'">
                            	<i class="'.$iconclass.'"></i>
                            	'.$menulabel.'<span class="fa arrow"></span>
                            </a>
                            	<ul class="nav nav-second-level">';

				foreach ($submenus as $submenu) {
					$submenulabel =$submenu->label;
					$submenuuri = $submenu->uri;
					$submenuiconclass = $submenu->iconclass;

					$res .= '<li >
                                    <a href="'.base_url($submenuuri).'">'.$submenulabel.'</a>
                                </li>';
				}

				$res .= '</ul></li>';
			}
			else
			{
				$res .= '<li>
                            <a  href="'.base_url($menuuri).'">
                            	<i class="'.$iconclass.'"></i>
                            	'.$menulabel.'
                            </a>
                        </li>';
			}

		}

		$res .= '</ul>';

		return $res;
	}

}