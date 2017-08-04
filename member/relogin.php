<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/gimotti/preset.php';
?>

<!DOCTYPE HTML>
<HTML>
  <HEAD>
    <TITLE>기모띠</TITLE>
    <meta charset="utf-8">
    
    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/gimotti/main.css" rel="stylesheet">

    <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/gimotti/images/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/gimotti/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/gimotti/css/flat-ui.css" rel="stylesheet">

    <style>
      body {
        padding-bottom: 20px;
        padding-top: 20px;
        background-color: #ecf0f1;
      }
      .navbar {
        margin-bottom: 20px;
      }
      .aaaaa {
        color: #ecf0f1;
      }
    </style>

  </HEAD>

  <BODY>
    <div class="container">
      <nav class="navbar navbar-inverse navbar-lg navbar-embossed" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/gimotti">
              <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/gimotti/images/title.png">
            </a>
          </div>
        </div>
      </nav>

      <div class="login">
        <div class="login-screen" style="padding-right: 280px;padding-left: 280px;">
          <div class="login-icon" style="margin: 0 auto; left: 45%;" >
            <img src="../images/login/icon.png" alt="login" />
            <h4 style="color:#2C3E50; font-size: 32px"><small>로그인</small></h4>
          </div>
          <div style="left: 50%;" >
            <img src="../images/login/wrong.png" alt="login" style="margin-left: 9%; margin-top: 150px;" />
          </div>
          <div class="login-form">
            <form name="login_form" method="post" action="./login_check.php" >
              <div class="form-group">
                <input type="text" name="user_id" class="form-control login-field" value="" placeholder="Enter your name" id="login-name" />
                <label class="login-field-icon fui-user" for="login-name"></label>
              </div>

              <div class="form-group">
                <input type="password" name="user_pass" class="form-control login-field" value="" placeholder="Password" id="login-pass" />
                <label class="login-field-icon fui-lock" for="login-pass"></label>
              </div>

              <input type="submit" value="로그인" class="btn btn-primary btn-lg btn-block" />
              <a class="login-link" href="#">아이디/비밀번호 찾기</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </BODY>
</HTML>