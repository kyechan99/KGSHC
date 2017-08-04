
<div class="navbar-collapse collapse" id="navbar-collapse-9">
    <form name="login_form" method="post" action="http://<?php echo $_SERVER['HTTP_HOST']; ?>/gimotti/member/login_check" class="navbar-form navbar-right" role="form">
        <div class="form-group">
            <input type="text" name="user_id" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="user_pass" placeholder="Password" class="form-control">
        </div>
        <button type="submit" value="로그인" class="btn btn-success">로그인</button>
        <button type="button" class="btn btn-success" onclick="location.href='http://<?php echo $_SERVER['HTTP_HOST']; ?>/gimotti/member/signup'">회원가입</button>
    </form>
</div>