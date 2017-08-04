<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/gimotti/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/gimotti/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-2">
            <img class="circular--square" width="250px" height="250px" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/gimotti/images/logo.png">
        </div>
        <div class="col-md-6 col-md-offset-1">
            <h2>KGSH Community</h2>
            <br/>
            <p>KGSH 학생들의 커뮤니티 사이트 입니다.</p>
        </div>
    </div>
</div>

<br/>
<br/>
<br/>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/gimotti/footer.php';
?>