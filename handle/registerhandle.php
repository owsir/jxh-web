<?php
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$repwd=$_POST["repwd"];
$homeprovince=$_POST["homeprovince"];
$homecity=$_POST["homecity"];
$livingcountry=$_POST["livingcountry"];
$livingprovince=$_POST["livingprovince"];
$livingcity=$_POST["livingcity"];

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

   if (strlen($homeprovince)==0||strlen($homecity)==0||strlen($livingcountry)==0||strlen($livingprovince)==0||strlen($livingcity)==0){
	   	echo "Please fill your from and living location.";
	   	return;
   }

	include("mydb.php");
	$db = new mydb();

	$sqlCheck="select count(*) from user where user_name='".$uname."'";

	$strCheck = $db->GetValue($sqlCheck);
	if((int)$strCheck!=0)
	{
		echo "User name already exists.";
	   	return;
	}

	$sqlCheckForum="select id from forum where home_province='".$homeprovince."' 
	and home_city='".$homecity."' 
	and living_country='".$livingcountry."' 
	and living_province='".$livingprovince."' 
	and living_city='".$livingcity."'";

	$strCheckForum = $db->GetValue($sqlCheckForum);
	$forumid=0;
	if(empty($strCheckForum))
	{
		$sqlNewForum="insert into forum(home_province,home_city,
	living_country,living_province,living_city)values('".$homeprovince."',
	'".$homecity."','".$livingcountry."','".$livingprovince."','".$livingcity."')";
		$forumid=$db->Add($sqlNewForum);
	}else{
		$forumid=(int)$strCheckForum;
	}

	if($forumid==0)
	{
		echo 'Initial forum error';
	   	return;
	}

	$sql="insert into user(user_name,user_pw,create_date,home_province,home_city,
	living_country,living_province,living_city,forum_id)values('".$uname."','".md5($pwd)."',now(),
	'".$homeprovince."','".$homecity."','".$livingcountry."','".$livingprovince."','".$livingcity."',$forumid)";
	$str = $db->Add($sql);
	echo "OK";
?>