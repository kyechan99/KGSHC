<?php
require_once '../preset.php';
include '../header.php';
?>

<hr />

<script>
  function same_check(f){
    f=f.form;
    if(f.user_pass.value != f.user_pass2.value){
      alert('입력내용이 같지 않음');
      f.user_pass2.focus();
      document.getElementById("correct_input_pass2").className ="form-group";
    }
    else if(f.user_pass2.value == ''){
      alert('입력내용이 없습니다.');      
    }
    else{
      document.getElementById("correct_input_pass2").className ="form-group has-success";
    }
  }

  function correct_check(input_id){
      document.getElementById(input_id).className ="form-group has-success";
    
  }
</script>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4>회원가입</h4>
      <form class="form-horizontal" role="form" name="signup_form" method="post" action="./signup_check.php">
        <div class="form-group" id="correct_input_id">
          <label for="inputEmail1" class="col-lg-2 control-label">아이디</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="user_id" id="formGroupInputLarge" placeholder="아이디" onblur="correct_check('correct_input_id')" required/>
            <span class="form-control-feedback control-feedback-lg  fui-user"  style="padding-right: 30px;margin-top: 0px;top: 0px;"></span>
          </div>
        </div>

        <div class="form-group" id="correct_input_pass">
          <label for="inputPassword1" class="col-lg-2 control-label">비밀번호</label>
          <div class="col-lg-10">
            <input class="form-control" type="password" name="user_pass" id="inputPassword1" placeholder="Password" onblur="correct_check('correct_input_pass')" required>
            <span class="form-control-feedback control-feedback-lg  fui-lock"  style="padding-right: 30px;margin-top: 0px;top: 0px;"></span>
          </div>
        </div>

        <div class="form-group" id="correct_input_pass2">
          <label for="inputPassword1" class="col-lg-2 control-label">비밀번호 재확인</label>
          <div class="col-lg-10">
            <input class="form-control" type="password" name="user_pass2" id="inputPassword1" placeholder="Password" onblur="same_check(this)"  required>
            <span class="form-control-feedback control-feedback-lg  fui-lock"  style="padding-right: 30px;margin-top: 0px;top: 0px;"></span>
          </div>
        </div>
        
        <div id="mouse_no" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
          <font color="#f26d7d">비밀번호가 일치하지 않습니다.</font>
        </div>

        <div class="form-group" id="correct_input_nick">
          <label for="inputEmail1" class="col-lg-2 control-label">닉네임</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="user_nick" id="formGroupInputLarge" placeholder="닉네임" onblur="correct_check('correct_input_nick')" required/>
            <span class="form-control-feedback control-feedback-lg  fui-user"  style="padding-right: 30px;margin-top: 0px;top: 0px;"></span>
          </div>
        </div>

        <div class="form-group" id="correct_input_email">
          <label for="inputEmail1" class="col-lg-2 control-label">E-mail</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" name="user_email" id="formGroupInputLarge" placeholder="E-mail" onblur="correct_check('correct_input_email')"  required/>
            <span class="form-control-feedback control-feedback-lg  fui-mail"  style="padding-right: 30px;margin-top: 0px;top: 0px;"></span>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <label class="checkbox" for="checkbox3">
              <input type="checkbox" data-toggle="checkbox" value="" id="checkbox3" required>
              개인정보 수집 동의
            </label>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-offset-2 col-lg-10">
            <button type="submit" class="btn btn-default">회원가입</button>
          </div>
        </div>

      </form>
    </div><!-- /.col-md-12 -->
  </div><!-- /.row -->

</div>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<?php
include '../footer.php';
?>
