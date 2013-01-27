<?php
require_once('inc/functions.php');
connect();
$s = update_tacgia(5, '1', '1', '1', '1');
var_dump($s);