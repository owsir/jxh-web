<?php
session_start();//开启Session 写在php里 必须写在最上面

$uname = $_POST["user_name"];
$pwd = $_POST["user_pw"];
include("mydb.php");
$db=new mydbda();

$sql="select count(*) from user where user_name='".$uname."' and user_pw='".$pwd."'";

$str = $db->Select($sql,"CX","jxh");
if($str==1)
{
    $_SESSION["uname"]=$uname;
    
    header("Location:/index.php");

 }
else
{ 
    header("Location:/login.php");
}    

?>