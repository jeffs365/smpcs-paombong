<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');

function get_directories()
{
	$path = GALLERY_DIRECTORY;
	$list = directory_map($path);

	return $list;
}

function get_byfolder($foldername = '')
{
	if($foldername == '')
		return;

	$path = GALLERY_DIRECTORY.$foldername.'/';

	if(!is_dir($path))
		retun;

	$list = directory_map($path);

	return $list;
}