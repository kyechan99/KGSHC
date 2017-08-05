<?php
require_once '../preset.php';
?>
<?php

if(isset($_SESSION['is_logged'])) 
{
	if($comment == '')
	{
		echo("<script>location.replace('/view.php?bbs_idx=".$bbs_idx."&doc_idx=".$doc_idx."');</script>");
	}
	else
	{
		$reg_date = time();
		$id = $_SESSION['user_id'];
        
        if ($bbs_idx == 1)
		  $q = "INSERT INTO ap_comment_1 ( doc_idx, id, comment, reg_date ) VALUES ( '$doc_idx', '$uid', '$comment', '$reg_date' )";
        else
		  $q = "INSERT INTO ap_comment_$bbs_idx ( doc_idx, id, comment, reg_date ) VALUES ( '$doc_idx', '$id', '$comment', '$reg_date' )";

		$mysqli->query( $q);

		$mysqli->close($mysqli);

		header('Location: '.$url['root'].'bbs/view.php?bbs_idx='.$bbs_idx.'&doc_idx='.$doc_idx);

		exit();

	}
}
else
{
	echo("<script>location.replace('../member/relogin.php');</script>");
}





?>
