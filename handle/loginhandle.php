<?php
session_start();
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
$uname = $_POST["user_name"];
$pwd = $_POST["user_pw"];
include("mydb.php");
$db=new mydb();

$sql="select user_id,user_name,forum_id,home_province,home_city,living_province,living_city from user where user_name='".$uname."' and user_pw='".md5($pwd)."' limit 1";

$re = $db->GetRows($sql);
//is_array($re)
if(!empty($re))
{
    $_SESSION["uname"]=$uname;
    $_SESSION["uid"]=$re[0];
    $_SESSION["forumid"]=$re[2];
    $_SESSION["home_province"]=$re[3];
    $_SESSION["home_city"]=$re[4];
    $_SESSION["living_province"]=$re[5];
    $_SESSION["living_city"]=$re[6];
    header("Location:/index.php");
 }
else
{ 
    header("Location:/login.php");
}    

?>