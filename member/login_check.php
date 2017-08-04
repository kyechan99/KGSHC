<?php
require_once '../preset.php';
?>
<?php

$q = "SELECT * FROM ap_member WHERE id='$user_id'";
$result = $mysqli->query( $q);

if($result->num_rows==1) {
    //해당 ID 의 회원이 존재할 경우
    // 암호가 맞는지를 확인

    $encryped_pass = sha1($user_pass);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if( $row['pw'] == $encryped_pass ) {
        $_SESSION['is_logged'] = 'YES';
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_nick'] = $row['nick'];
        $_SESSION['user_profile'] = $row['profile'];
        $_SESSION['member_idx'] = $row['member_idx'];
        
        header('Location: '.$url['root'].'member/login_done.php');
        exit();
    }
    else {
        $_SESSION['is_logged'] = 'NO';
        $_SESSION['user_id'] = '';
        $_SESSION['user_nick'] = '';
        $_SESSION['user_profile'] = '';
        
        header('Location: '.$url['root'].'member/login_done.php');
        exit();
    }

}
else {
    // 없거나, 비정상
    echo "<meta http-equiv='refresh' content='0; url=relogin.php'>"; 
}

$result->free();

$mysqli->close();

?>
