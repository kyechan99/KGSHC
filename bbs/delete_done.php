<?php
require_once '../preset.php';
include '../header.php';


$delete_status = $_SESSION['delete_status'];
if($delete_status=='YES') {
    $message = '글이 삭제되었습니다.';
}
else {
    $message = '삭제 실패했습니다.';
}
?>
        <hr />
<?php
    echo '<div class="container">'.$message.'</div>';
?>
<?php
    include '../footer.php';
?>
