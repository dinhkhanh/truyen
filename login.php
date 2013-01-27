<?php
require_once("inc/functions.php");
connect();
$user = login($_GET['u3'], $_GET['p3']);

if( $user->count > 0 ){
	echo json_encode(array('code'=>$user->count));
	session_start();
	$_SESSION['logged'] = md5($_GET[p3].$_GET['u3'].time());
	return;
}
else {
	echo json_encode(array('code'=>0));
	return;
}