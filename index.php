<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <?php include("header.php"); ?>
 </head>
 <body>
 <?php include("nav.php"); ?>
  <div class="main-content-wrap">
    <div class="container main-content">
      <div class="area userinfo-area">
      <?php
      if (isset($_SESSION['uname']) && !empty($_SESSION['uname'])) {
          echo "Welcome：".$_SESSION['uname']." ".$_SESSION['home_province']."人在".$_SESSION["living_city"]
          ."&nbsp;&nbsp;&nbsp;&nbsp;<a href='/post.php'>Write a post</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a href='/handle/logouthandle.php'>Log out</a>";
      }else{
          echo "Welcome, Please <a href='login.php'>Login</a> first.";
      }
      ?>
      </div>
<?php

if (isset($_SESSION['forumid']) && !empty($_SESSION['forumid'])) {

  $host="localhost";
  $user="root";
  $pwd="123456";

  //$user="jxh";
  //$pwd="7c2485Za_";
  $db="jxh";
   
  $linkID =mysql_connect($host,$user,$pwd); 
 $forumid=(int)$_SESSION["forumid"];
 mysql_select_db($db)or die("unable to select database"); 
   
 $sql='select * from forumpost where forum_id='.$forumid.' order by id desc';

  $SQL_SELECT_SYMBOLS=$sql;

  mysql_query("SET NAMES UTF8");
  $result=mysql_query($SQL_SELECT_SYMBOLS)or die("error in query :$query. ".mysql_errno());
   
  if(mysql_num_rows($result)>0){

   echo '<div class="post-wrap">';
     while(list($id,$title,$content,$forum_id,$user_id,$user_name,$create_date)=mysql_fetch_row($result)){
        echo '<div class="post-box">';
        echo "<div class=\"post-info\">".$user_name." 发表于 ".$create_date."</div>";
        echo "<div class=\"post-title\">".$title."</div>";
        echo "<div class=\"post-content\">".$content."</div>";
        echo "</div>";
     }
     echo "</div>";

  }
  mysql_free_result($result); 
  mysql_close($linkID); 
}

?>




 
    </div>
  </div>
<?php include("footer.php"); ?>
 </body>
</html>
