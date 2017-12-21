<?php
session_start();
$uname = $_POST["user_name"];
$pwd = $_POST["user_pw"];
include("mydb.php");
$db=new mydbda();

$sql="select user_id,user_name,forum_id from user where user_name='".$uname."' and user_pw='".md5($pwd)."' limit 1";

$re = $db->Select($sql,"CX","jxh");

                    if(is_array($re))
                    {
                        $_SESSION["uname"]=$uname;
                        $_SESSION["uid"]=$re[0];
                        $_SESSION["forumid"]=$re[2];
                        header("Location:/index.php");
 }
else
{ 
    header("Location:/login.php");
}    

?>