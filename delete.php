<?php
require_once('inc/functions.php');
connect();

$type = intval($_GET['itype']);

switch ($type){
	case 1: 
		echo json_encode(
			array('code' => 
				del_truyen($_GET['id'])));
		break;
	case 2:
		echo json_encode(
			array('code'=>
				del_tacgia($_GET['id'])));
		break;
	case 3:
		echo json_encode(array('code'=> del_loai($_GET['id'])));
		break;
	default:
		echo json_encode(array('code'=>false));
		break;

}