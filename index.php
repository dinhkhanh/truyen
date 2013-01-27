<?php 
require_once("inc/header.php");
require_once("inc/functions.php");
connect();
session_start();
if(isset($_SESSION['logged'])){
	include_once("inc/index.tmp.php");
}
else {
	include_once("inc/login.tmp.php");
}

require_once("inc/footer.php");?>