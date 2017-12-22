<?php
session_start();

include("mydb.php");
$db=new mydb();
$sql='select id,title,content,user_id,user_name,create_date from forumpost where forum_id=5 order by id desc';

$result=$db->GetRows($sql);

echo isset($result);
//echo encodeJson(mysql_fetch_row($result));

if(isset($result)){

   echo '<div class="post-wrap">';

     echo "</div>";

  }

  function encodeJson($responseData)
    {
        return json_encode($responseData);
    }
?>