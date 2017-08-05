<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/preset.php';
include $_SERVER['DOCUMENT_ROOT'].'/header.php';
?>

<br/>
<div class="container">
    <div class="row">
        <div class="col-md-2 col-md-offset-2">
            <img class="circular--square" width="250px" height="250px" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/images/logo.png">
        </div>
        <div class="col-md-6 col-md-offset-1">
            <h2>KGSH Community</h2>
            <br/>
            &nbsp;&nbsp;<p>KGSH 학생들의 커뮤니티 사이트 입니다.</p>
        </div>
    </div>
    <br/><br/>
    <div class="row">
        <div class="col-md-12 col-md-offset-3">
            <h4>위 사이트는 모두 <a href="https://github.com/kyechan99/KGSHC" target="_blank">오픈소스</a>로 공개하였습니다.</h4>
        </div>
    </div>
    <br/><br/>
</div>

<br/>
<br/>
<br/>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/footer.php';
?>