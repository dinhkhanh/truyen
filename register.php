<?php
require_once("inc/functions.php");
connect();

if(register($_GET['u'], $_GET['p'])){
	echo json_encode(array('code'=>1));
	return;
}
else {
	echo json_encode(array('code'=>0));
	return;
}