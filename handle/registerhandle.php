<?php
$dbName="jxh";
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$repwd=$_POST["repwd"];

   if (strlen($uname)<4){
   	echo "User name length can't be less than 3.";
   	return;
   }

   if ($pwd != $repwd){
   	echo "Two passwords don't match.";
   	return;
   }

   if (strlen($pwd)<6){
   	echo "Password length can't be less than 6.";
   	return;
   }

include("mydb.php");
$db = new mydbda();

$sqlCheck="select count(*) from user where user_name='".$uname."'";

$strCheck = $db->Select($sqlCheck,"CX",$dbName);
if($strCheck!=0)
{
	echo "User name already exists.";
   	return;
}

$sql="insert into user(user_name,user_pw,create_date)values('".$uname."','".md5($pwd)."',now())";
$str = $db->Select($sql,"QT",$dbName);
echo $str;

?>