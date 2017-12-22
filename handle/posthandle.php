<?php
session_start();
$title = $_POST["post_title"];
$content = $_POST["post_content"];
if (strlen($content)==0){
   	header("Location:/post.php");
   	return;
}
include("mydb.php");
$db=new mydb();
$sqlNewPost="insert into forumpost(title,content,
forum_id,user_id,user_name,create_date)values('".$title."',
'".$content."',".(int)$_SESSION["forumid"].",".(int)$_SESSION["uid"].",'".$_SESSION["uname"]."',now())";

$postid=$db->Add($sqlNewPost);

if($postid>0)
{ 
    header("Location:/index.php");
}else{
    header("Location:/error.php");
}   

?>