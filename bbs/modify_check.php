<?php
require_once '../preset.php';
?>
<?php

$q = "UPDATE ap_bbs_$bbs_idx SET subject='$subject',content='$content' WHERE doc_idx=$doc_idx";
$result = $mysqli->query($q);

if ($result==false) {
    $_SESSION['modify_status'] = 'NO';
}
else {
    $_SESSION['modify_status'] = 'YES';
}

//$result->free();

$mysqli->close();
//var_dump($url);

header('Location: '.$url['root'].'bbs/view.php?bbs_idx='.$bbs_idx.'&doc_idx='.$doc_idx);
exit();

?>
