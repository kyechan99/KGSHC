<?php
require_once '../preset';
include '../header';


$q = "SELECT * FROM ap_bbs";
$result = $mysqli->query($q);

$total_record = $result->num_rows;

if( isset($page) && $page!='') {
	$now_page = $page;
}
else {
	$now_page = 1;
}


$record_per_page = 5;
$page_per_block = 10;

$start_record = $record_per_page*($now_page-1);
$record_to_get = $record_per_page;

if( $start_record+$record_to_get > $total_record) {
	$record_to_get = $total_record - $start_record;
}

$q = "SELECT * FROM ap_bbs WHERE 1 ORDER BY doc_idx DESC LIMIT $start_record, $record_to_get";
$result = $mysqli->query($q);
if($result==false) {

}
else {

}


$writing_status = $_SESSION['writing_status'];
if($writing_status=='YES') {
	while($data = $result->fetch_array())
	{
		if($data['id'] == $_SESSION['user_id'])
		{
			echo("<script>location.replace('view?doc_idx=".$data['doc_idx']."');</script>");
		}
	}
}
else {
	$message = '저장에 실패했습니다.';
}
?>

<hr />
<?php
echo $message;
?>
<?php
include '../footer';
?>
