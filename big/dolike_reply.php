<?php
  function addlike($link,$username,$reply_id){
    $sql = "update `reply` set like_user=concat('$username,',like_user) where reply_id=$reply_id";
    echo $sql;
    $result = mysqli_query($link,$sql);
    if(!$result){
      printf("Error:%s\n",mysqli_error($link));
    }
    else{
      echo "<script> alert('点赞成功');  history.go(-1)</script>";
    }
  }





  session_start();
  $username=$_SESSION['username'];
  $reply_id=$_POST["reply_id"];
  require './common/init.php';
  $query="select * from reply where find_in_set('$username',like_user) and reply_id=$reply_id;";
  echo $query;
  $result = mysqli_query($link,$query);
  if(!$result){
    printf("Error:%s\n",mysqli_error($link));
  }
  else{
    if (mysqli_num_rows($result) < 1){
      $sql = "update `reply` set `like_count`=`like_count`+1 where reply_id=$reply_id";
      $res = mysqli_query($link,$sql);
      if($res){
        addlike($link,$username,$reply_id);
      }
      else{
        echo "<script> alert('点赞失败'); history.go(-1)</script>";
      }

    }
    else{

      echo "<script> alert('已经点过赞了');  history.go(-1)</script>";



    }
  }