<?php
require_once '../preset.php';
include '../header.php';

$is_logged = $_SESSION['is_logged'];
if($is_logged=='YES') {
    $user_id = $_SESSION['user_id'];
    $user_nick = $_SESSION['user_id'];
    $user_profile = $_SESSION['user_profile'];
    $message = $user_id . ' 님, 로그인 했습니다.';
        header('Location: '.$url['root'].'/index.php');
}
else {
    $message = '로그인이 실패했습니다.';
}
?>
        <hr />
<?php
    echo $message;
?>
<?php
    include '../footer.php';
?>
