<?php
require_once '../preset.php';
?>
<?php

$reid = stripslashes($user_id);
$encryped_pass = sha1($user_pass);

$q = "INSERT INTO ap_member ( id, pw, email, nick, profile ) VALUES ( '$user_id', '$encryped_pass', '$user_email', '$user_nick', 'user_profile.png' )";

$mysqli->query($q);

$mysqli->close($mysqli);


header('Location: '.$url['root'].'member/signup_done.php');

exit();

?>
