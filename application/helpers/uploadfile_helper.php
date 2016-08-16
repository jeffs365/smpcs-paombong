<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

function do_uploadfile($config , $field)
{
	$response = array();

	$ci =& get_instance();
	$ci->load->library('upload',$config);

	if(!$ci->upload->do_upload($field))
		$response['error'] = $ci->upload->display_errors();
	else
		$response['upload_data'] = $ci->upload->data();

	return $response;
}

function do_deletefile($file)
{
	// todo: add validation to prevent error
	return unlink($file);
}