<?php
require_once '../preset.php';
include '../header.php';
?>

</div>
<script type="text/javascript" src="se/js/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.js"></script>

<?php 
if(!isset($_SESSION['is_logged'])) {             
echo("<script>location.replace('../member/relogin.php');</script>");  
}
?>

<div class="container">
    <h3>글쓰기</h3>
    <div class="row">
        <div class="col-md-12">
            <?php 
                if($bbs_idx==0)
                    echo "<h4>자유게시판</h4>";
                else if($bbs_idx==1)
                    echo "<h4>익명게시판</h4>";
                else if($bbs_idx==2)
                    echo "<h4>프로젝트 소개 게시판</h4>";
                else if($bbs_idx==3)
                    echo "<h4>구인 / 구직 게시판</h4>";
                else if($bbs_idx==4)
                    echo "<h4>급식 게시판</h4>";
                else if($bbs_idx==5)
                    echo "<h4>교통 게시판</h4>";
            ?>
            <form  name ="write_form" method = "POST" action="./write_check.php?bbs_idx=<?php echo $bbs_idx; ?>" class="form">
                <div class="form-group">
                    <input type="text" class="form-control" name = "subject" placeholder="제목">
                </div>
                <?php if($bbs_idx == 1): ?>
                    <div class="form-group" id="correct_input_id">
                      <label for="inputEmail1" class="col-lg-2 control-label">익명 아이디</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="uid" id="formGroupInputLarge" placeholder="아이디" onblur="correct_check('correct_input_id')" required/>
                        <span class="form-control-feedback control-feedback-lg  fui-user"  style="padding-right: 30px;margin-top: 0px;top: 0px;"></span>
                      </div>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                <?php endif ?>
                <div class="form-group">
                    <textarea name="content"; id="ir1";  rows="15"; cols="30";  placeholder="내용"; style="width:1135px; height:470px; "></textarea>
                    <script type="text/javascript">
                     var oEditors = [];
                     nhn.husky.EZCreator.createInIFrame({
                         oAppRef: oEditors,
                         elPlaceHolder: "ir1",
                         sSkinURI: "se/SmartEditor2Skin.html",
                         fCreator: "createSEditor2"
                     });
                     function submitContents(elClickedObj) {
                        oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);  // 에디터의 내용이 textarea에 적용됩니다. 
                        // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.

                        try {
                            elClickedObj.form.submit();
                        } catch(e) {}
                    }
                </script>
                <script type="text/javascript" src="./quick_photo_uploader/plugin/hp_SE2M_AttachQuickPhoto.js" charset="utf-8"> </script>
            </div>
            <!--<div class="form-group">
                <label class="checkbox" for="checkbox4">
                    <input type="checkbox" data-toggle="checkbox" value="" id="checkbox4" required checked>
                    사각형
                </label>
                <label class="radio" for="radio4a">
                    <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="radio4a" required checked>
                    원1
                </label>
                <label class="radio" for="radio4b">
                    <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="radio4b" required>
                    원2
                </label>
                <label class="radio" for="radio4c">
                    <input type="radio" name="optionsRadios" data-toggle="radio" value="" id="radio4c" required>
                    원3
                </label>
            </div>
            <div class="form-group">
                <label class="checkbox checkbox-inline" for="checkbox5a">
                    <input type="checkbox" data-toggle="checkbox" value="" id="checkbox5a" required checked> 1
                </label>
                <label class="checkbox checkbox-inline" for="checkbox5b">
                    <input type="checkbox" data-toggle="checkbox" value="" id="checkbox5b" required > 2
                </label>
                <label class="checkbox checkbox-inline" for="checkbox5c">
                    <input type="checkbox" data-toggle="checkbox" value="" id="checkbox5c" required > 3
                </label>
            </div>
            <div class="form-group">
                <select data-toggle="select" class="form-control select select-default">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <select data-toggle="select" multiple class="form-control multiselect multiselect-default mrs mbm">
                    <option value="0" selected>1 option</option>
                    <option value="1">2 option</option>
                    <option value="2" selected>3 option</option>
                    <option value="3">4 option</option>
                    <option value="4">5 option</option>
                </select>
            </div>-->
            <br/><br/><br/><br/>
            <input style="margin-left: 47%;"class="btn btn-default" type="submit" value="저장" onclick="submitContents(this)" />
        </form>
    </div>
</div><!-- /.row -->
</div>    
<br/>    
<br/>    
<br/>    
<br/>

<?php
include '../footer.php';
?>