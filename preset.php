<?php
session_start();

$p = array();
$path['root'] = $_SERVER['DOCUMENT_ROOT'].'/gimotti/';

$url = array();
$url['root'] = 'http://'.$_SERVER['HTTP_HOST'].'/gimotti/'; 

require_once ($path['root'].'config.php');

$mysqli = new mysqli($DB['host'], $DB['id'], $DB['pw'], $DB['db']);
if (mysqli_connect_error()) {
    exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
}

$mysqli->set_charset('utf8');

extract($_POST);
extract($_GET);

?>
