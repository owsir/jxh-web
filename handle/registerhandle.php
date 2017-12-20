<?php
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];

include("mydb.php");
$db = new mydbda();
$sql="insert into user(user_name,user_pw,create_date)values('".$uname."','".$pwd."',now())";
$str = $db->Select($sql,"QT","jxh");
echo $str;

?>