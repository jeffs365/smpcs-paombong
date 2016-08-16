<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists(('load_menu')))
{
	function load_menu($tab){
		$res = '';
		$tab_list = array('HOME' => 'welcome',
							'ADMISSIONS' => 'admissions',
							'NEWS' => 'news',
							'EVENTS' => 'events',
							'ACADEMICS' => 'academics',
							'STUDENTS' => 'students',
							'ABOUT US' => 'about_us',
							'CONTACT US' => 'contact_us'
							 );

		foreach ($tab_list as $key => $value) {
			$active = '';

			if($tab == $key)
				$active = ' class="active" ';

			$res .= '<a class="" href="'.site_url($value).'">'.
						'<div'.$active.'>'.
							'<span>'.$key.'</span>'.
						'</div>'.
					'</a>';
		}

		return $res;
	}
}