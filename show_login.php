
<div class="navbar-collapse collapse" id="navbar-collapse-9">
    <form name="login_form" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/member/login_check.php" class="navbar-form navbar-right" role="form">
        <div class="form-group">
            <input type="text" name="user_id" placeholder="Id" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="user_pass" placeholder="Password" class="form-control">
        </div>
        <button type="submit" value="로그인" class="btn btn-success">로그인</button>
        <button type="button" class="btn btn-success" onclick="location.href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/member/signup.php'">회원가입</button>
    </form>
</div>