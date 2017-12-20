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
    $_SESSION["uname"]=$uname;//存在服务器，任何页面都可以调用
    //$_SESSION["name"]=array（1,2,3,4,5）session可以存储任何内容
    //用cookie写
    //setcookie("uid",$uid);//定义cookie 会在客户端生成cookie文件
    
    header("Location:/index.php");

 }
else
{ 
    header("Location:/login.php");
    }    

?>