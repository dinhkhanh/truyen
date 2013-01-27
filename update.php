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
				update_truyen(intval($_GET['truyen_id']), 
					$ten, $hinh, $excerpt, $_GET['link'], 
					$_GET['tg_id'], $_GET['loai_id'])
				)
			);
		break;
	case 2:
		echo json_encode(
			array('code'=>
				update_tacgia(intval($_GET['tg_id']), $ten, $hinh, $excerpt, $_GET['link'])
				)
			);
		break;
	case 3:
		echo json_encode(array('code'=> update_loai($_GET['loai_id'], $ten, $hinh, $excerpt)));
		break;
	default:
		echo json_encode(array('code'=>false));
		break;

}