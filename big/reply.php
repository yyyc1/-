<?php

  session_start();
  require './common/init.php';
  require './common/function.php';
  
  if($_SESSION['username']){
      echo "<div id='top'>用户名:".$_SESSION['username'];
      echo "<a href='html/addnew.html'>发帖</a>";
      echo "<a href='logout.php'>登出</a><hr/></div>";
    }
    else{
      echo "<a href='html/login.html'>登录/注册</a><hr/>";
    }
  $discuss_id=$_GET["discuss_id"];

  $page = max(input('get', 'page', 'd'), 1); // 获取当前页码    
  $size = 3; // 每页显示的条数

  $sql = "select count(*) from reply where discuss_id=$discuss_id";
  if (!$res = mysqli_query($link, $sql)) { //得到结果集
     exit("SQL[$sql]执行失败：" . mysqli_error($link));
  }
  $total = (int) mysqli_fetch_row($res)[0]; //记录总条数

    // 查询页面$page的所有愿望，注意是分页的


   

  $sql = "select id,title,content,username, time,like_count,reply_count from discuss where id=$discuss_id";
    if (!$res = mysqli_query($link, $sql)) {
        exit("SQL[$sql]执行失败：" . mysqli_error($link));
    }
  $data1 = mysqli_fetch_all($res, MYSQLI_ASSOC);  //在index.html页面会用到此处的结果集

  $sql = "select reply_id,content,username, time,like_count from reply where discuss_id=$discuss_id order by reply_id limit ".page_sql($page, $size);
    if (!$res = mysqli_query($link, $sql)) {
        exit("SQL[$sql]执行失败：" . mysqli_error($link));
    }
    $data2 = mysqli_fetch_all($res, MYSQLI_ASSOC);
  mysqli_free_result($res);

    // 查询结果为空时，自动返回第1页
  if (empty($data2) && $page > 1) {
    header('Location: ./reply.php?page=1');
    exit;
  }
  require './html/reply.html';
?>