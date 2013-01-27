<?php
require_once('inc/functions.php');
connect();

$type = intval($_GET['itype']);
$ten = $_GET['ten'];
$hinh = $_GET['hinh'];
$excerpt = $_GET['excerpt'];

switch ($type){
	case 1: 
		echo json_encode(
			array('code' => 
				add_truyen($ten, $hinh, $excerpt, $_GET['link'], 
					$_GET['tg_id'], $_GET['loai_id'])
				)
			);
		break;
	case 2:
		echo json_encode(
			array('code'=>
				add_tacgia($ten, $hinh, $excerpt, $_GET['link'])
				)
			);
		break;
	case 3:
		echo json_encode(array('code'=> add_loai($ten, $hinh, $excerpt)));
		break;
	default:
		echo json_encode(array('code'=>false));
		break;

}