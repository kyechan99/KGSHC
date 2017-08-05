<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>KGSHC</TITLE>
        <meta charset="utf-8">
        
        <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/main.css" rel="stylesheet">

        <link rel="shortcut icon" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <link href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/flat-ui.css" rel="stylesheet">

        <style>
            body {
                padding-bottom: 20px;
                padding-top: 20px;
                background-color: #ffffff;
            }
            .navbar {
                margin-bottom: 20px;
            }
            .aaaaa {
                color: #ffffff;
            }
        </style>

    </HEAD>

    <BODY>

        <?php
        if(isset($_SESSION['is_logged'])) {
            echo '<div style="float:right; margin-right: 20%;">
            <a href="http://'.$_SERVER['HTTP_HOST'].'/member/logout.php">로그아웃</a> 
            &nbsp&nbsp&nbsp
            <a href="http://'.$_SERVER['HTTP_HOST'].'/member/profile.php?doc_idx='.$_SESSION['user_id'].'">회원정보</a>
        </div>';
    }
    ?>
    <br>
    <!-- 메인 타이틀 -->
    <div class="container">

        <nav class="navbar navbar-default navbar-lg navbar-embossed" role="navigation">

            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-9">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>">
                        <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/title.png">
                    </a>
                </div>

                <div style="float:right; color: #ecf0f1; font-size: 30px;padding-top: 1%; margin-right: 1%;">
                    <?php 
                    if(isset($_SESSION['is_logged'])) {
                        if ($_SESSION['is_logged'] == 'YES') {
                            echo "<font color='black'>".$_SESSION['user_nick']."</font>";
                            echo "<font color='black'>(님) 안녕하세요.</font>";
                            echo '&nbsp&nbsp';
                            echo '<img class="circular--square" width="50px" height="50px" src="http://'.$_SERVER['HTTP_HOST'].'/bbs/se/upload/'.$_SESSION['user_profile'].'">';
                        }
                        else {
                            include $_SERVER['DOCUMENT_ROOT'].'/show_login.php';
                        }
                    }
                    else{
                        include $_SERVER['DOCUMENT_ROOT'].'/show_login.php';
                    }
                    ?>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-01">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse navbar-collapse-01">
                    <ul class="nav navbar-nav navbar-left">

                        <li class="active"><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>">메인</a></li>

                        <li class="dropdown">
                            <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                프로젝트
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/bbs/list.php?bbs_idx=2">프로젝트 소개</a></li>
                                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/bbs/list.php?bbs_idx=3">구인/구직</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                생활게시판
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/bbs/list.php?bbs_idx=4">급식</a></li>
                                <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/bbs/list.php?bbs_idx=5">교통</a></li>
                            </ul>
                        </li>

                        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/bbs/list.php?bbs_idx=0">자유게시판</a></li>


                        <li><a href="http://<?php echo $_SERVER['HTTP_HOST'];?>/bbs/list.php?bbs_idx=1">익명게시판</a></li>
                        
                        <li class="dropdown">
                            <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                                링크
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="http://game.hs.kr" target="_blank">학교 사이트</a></li>
                                <li> <a href="https://open.kakao.com/o/gvxUBIu" target="_blank">오픈 채팅방</a></li>
                                <li> <a href="https://github.com/KGSH" target="_blank">KGSH GitHub</a></li>
                                <li> <a href="https://github.com/kyechan99/KGSHC" target="_blank">KGSHC Repo</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

