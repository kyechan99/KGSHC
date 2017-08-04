<?php
require_once '../preset';
?>
<?php

if(isset($_SESSION['is_logged'])) 
{
	if($comment == '')
	{
		echo("<script>location.replace('../bbs/view?doc_idx=".$doc_idx."');</script>");
	}
	else
	{
		$reg_date = time();
		$id = $_SESSION['user_id'];

		$q = "INSERT INTO ap_comment ( doc_idx, id, comment, reg_date ) VALUES ( '$doc_idx', '$id', '$comment', '$reg_date' )";

		$mysqli->query( $q);

		$mysqli->close($mysqli);

		header('Location: '.$url['root'].'bbs/view?doc_idx='.$doc_idx);

		exit();

	}
}
else
{
	echo("<script>location.replace('../member/relogin');</script>");
}





?>
