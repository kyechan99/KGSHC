<?php
require_once '../preset.php';
include '../header.php';
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

<br/>
<br/>
<div class="container">
    <table>
        <tr>
            <h4>자유게시판</h4>
            <hr style="border-top: 2px solid #34495E">
            <td>
                <p style="font-size: 25px; margin-bottom: 0px;margin-top: 0px;margin-left: 30px;"><?php echo htmlspecialchars($data['subject']); ?></p>
                <p style="margin-top: 0px;margin-bottom: 0px;margin-left: 0px;"><?php
                    if(date( 'Y-m-d',$data['reg_date'] ) == date( 'Y-m-d',time() ))
                    {
                      echo date( 'H:i:s',$data['reg_date'] );
                  }
                  else
                  {
                      echo date( 'Y-m-d H:i:s',$data['reg_date'] );
                  }
                  ?>
              </p>
          </td>
      </tr>
      <tr></tr>
  </table>

  <table>
    <tr>  
        <div style="font-size: 20px; float:right;padding-top: 0px; margin-right: 1%;border-left-width: 10px;margin-left: 30px;"><?php echo $data['id']; ?>    
            &nbsp&nbsp
            <?php
            $dataId = $data['id'];
            $mem_q = "SELECT * FROM ap_member WHERE id='$dataId'";
            $mem_result = $mysqli->query($mem_q);
            ?>

            <?php while($mem_data = $mem_result->fetch_array()) :?>
              <?php if($mem_data['id'] == $data['id']): ?>
                <img class="circular--square" width="50px" height="50px" src="http://<?php echo $_SERVER['HTTP_HOST'];?>/gimotti/bbs/se/upload/<?php echo $mem_data['profile'];?>">
            <?php endif ?>
        <?php endwhile ?>
    </div> 
</tr>
</table>

<hr style="border-top: 0.5px solid #34495E">
<table style="margin-left: 25px;">
    <tr>
        <td>
            <?php echo $data['content']; ?>
        </td>
    </tr>
    
<br/>
</table>


<br/>
<br/>
<br/>
<hr style="border-top: 0.001px solid #c0cdd1">
<div class="row">
    <div class="col-md-12">
      <p>
        <div class="btn-group" style="float:right;padding-top: 0px; margin-right: 1%;border-left-width: 10px;margin-left: 30px;">
            <?php
            echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/gimotti/bbs/list" class="btn btn-primary" >목록</a>';
            ?>
            <?php
            if( $_SESSION['member_idx']==$data['member_idx']) {
                echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/gimotti/bbs/modify?doc_idx='.$doc_idx.'" class="btn btn-primary">수정</a>';
            }
            ?>
            <?php
            if( $_SESSION['member_idx']==$data['member_idx']) {
                echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/gimotti/bbs/delete?doc_idx='.$doc_idx.'" class="btn btn-primary">삭제</a>';
            }
            ?>
        </div>
    </p>

    
<br/>
<br/>
<br/>
    <hr style="border-top: 0.001px solid #c0cdd1">
    <!-- 댓글 리스트 -->

    <?php
    $comment_q = "SELECT * FROM ap_comment WHERE doc_idx = '$doc_idx'";
    $comment_result = $mysqli->query($comment_q);
    $comment_num = $comment_result->num_rows;

    if($comment_num==0)
    {
        echo "댓글이 없습니다.";
    }
    else
    {
        while($mdata = $comment_result->fetch_array())
        {
            $mem = $mdata['id'];
            $mem_q = "SELECT * FROM ap_member WHERE id='$mem'";
            $mem_result = $mysqli->query($mem_q);

            while($searchProfile = $mem_result->fetch_array())
            {
                if($searchProfile['id'] == $mdata['id'])
                {
                    echo '<img class="circular--square" width="50px" height="50px" src="http://'.$_SERVER['HTTP_HOST'].'/gimotti/bbs/se/upload/'.$searchProfile['profile'].'">';
                }
            }

            if(date( 'Y-m-d',$mdata['reg_date'] ) == date( 'Y-m-d',time() ))
            {
                echo "<div class='pull-right'>".date('H:i:s',$mdata['reg_date'])."</div>";
            }
            else
            {
                echo "<div class='pull-right'>".date( 'Y-m-d H:i:s',$mdata['reg_date'])."</div>";
            }
            echo "&nbsp;&nbsp;".$mdata['id'];
            echo "<br/>".$mdata['comment']."<br/>";
          echo '<br/>';
          echo '<hr style="border-top: 0.001px solid #dde4e7">';
      }
  }
  ?>

  <!-- 댓글 리스트 -->
  
<br/>
<br/>
<br/>
  <hr style="border-top: 0.001px solid #c0cdd1">

  <div class="navbar-collapse collapse" id="navbar-collapse-9">
    <form name="comment_form" method="post" action="./comment_check" role="form">
        <input type="text" name="doc_idx" style="border-left-width: 0px;border-right-width: 0px;border-bottom-width: 0px;padding-bottom: 0px;border-top-width: 0px;padding-top: 0px;width: 0px;" value=<?php echo $doc_idx; ?>></input>
        <div class="form-group">
            <textarea type="text" name="comment" placeholder="댓글을 입력해 주세요." style="resize: none;" class="form-control" rows="6"></textarea>
        </div>
        <button type="submit" class="btn btn-success" >등록</button>
    </form>
</div>
</div><!-- /.col-md-12 -->
</div><!-- /.row -->


<br/><br/><br/>
<br/><br/><br/>
<br/><br/><br/>
<br/><br/><br/>
</div>


<?php
include '../footer.php';
?>