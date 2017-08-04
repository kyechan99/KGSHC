<?php
require_once '../preset';
include '../header';
?>
<?php
if(isset($doc_idx)==false) {
    echo '글번호가 지정되지 않았습니다.';
    exit();
}

$q = "SELECT * FROM ap_bbs WHERE doc_idx = $doc_idx";
$result = $mysqli->query($q);
$data = $result->fetch_array();

?>

</div>
<script type="text/javascript" src="se/js/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.js"></script>

<div class="container">
    <h3>글쓰기</h3>
    <div class="row">
        <div class="col-md-12">
            <h4>자유게시판</h4>
            <form name ="modify_form" method = "POST" action = "./modify_check">
                <div class="form-group">
                    <input type="text" class="form-control" name = "subject" value="<?php echo $data['subject'];?>">
                </div>
                <div class="form-group">
                    <textarea name="content"; id="ir1";  rows="15"; cols="30";  placeholder="내용"; style="width:1135px; height:470px; "><?php echo $data['content'];?></textarea>
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
            <div>
                <input style="margin-left: 47%;"class="btn btn-default" type="submit" value="저장" onclick="submitContents(this)" />
            </div>
            </form>
        </div> <!-- col-md-12-->
    </div> <!-- row-->
</div> <!-- container-->
<div>
    <?php
    echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/gimotti/bbs/list" class="btn" >목록</a>';
    ?>
</div>



<?php
include '../footer';
?>