<?php
require_once '../preset.php';
?>
<?php
$_SESSION['is_logged'] = 'NO';
$_SESSION['user_id'] = '';
$_SESSION['user_nick'] = '';
$_SESSION['user_profile'] = '';
$_SESSION['member_idx'] = '';

session_unset($_SESSION['user_id']);
session_unset($_SESSION['user_nick']);
session_unset($_SESSION['user_profile']);
session_unset($_SESSION['member_idx']);

header('Location: '.$url['root'].'member/logout_done.php');
exit();

?>