<?php
require_once '../preset.php';
?>
<?php

$reg_date = time();
$member_idx = $_SESSION['member_idx'];
$id = $_SESSION['user_id'];
$nick = $_SESSION['user_nick'];
echo iconv("EUC-KR", "UTF-8", $member_idx);

$q = "INSERT INTO ap_bbs_$bbs_idx (member_idx, id,nick,subject,content,reg_date) VALUES('$member_idx','$id','$nick', '$subject', '$content', '$reg_date')";

$result = $mysqli->query($q);

if ($result==false) {
    $_SESSION['writing_status'] = 'NO';
}
else {
    $_SESSION['writing_status'] = 'YES';
}

//$result->free();

$mysqli->close();
//var_dump($url);
//echo $q;
header('Location: '.$url['root'].'bbs/write_done.php?bbs_idx='.$bbs_idx);
exit();


?>
