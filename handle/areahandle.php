<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 </head>
 <body>

 创建一个mysql连接
<?php
  $host="127.0.0.1";
  $user="root";
  $pwd="666666";
  $db="jxh";
   
  $linkID =mysql_connect($host,$user,$pwd); //创建一个mysql连接
   
  if(!$linkID){
    echo "<font color='red'>unable to connect!</font>";
  }
   
  mysql_select_db($db)or die("unable to select database"); //选择一个数据库
   


//select * from countryandarea where parentcode='CHINA' order by code ASC
 $sql='select * from countryandarea where parentcode=\'CHINA\' order by code ASC';

  $SQL_SELECT_SYMBOLS=$sql;

  mysql_query("SET NAMES UTF8");
  $result=mysql_query($SQL_SELECT_SYMBOLS)or die("error in query :$query. ".mysql_errno()); //执行SQL语句
   
  if(mysql_num_rows($result)>0){

    echo '{';
     while(list($id,$title,$code,$parentcode)=mysql_fetch_row($result)){
        echo '"'.$title.'":';

$subsql='select * from countryandarea where parentcode=\''.$title.'\' order by code ASC';
$subresult=mysql_query($subsql)or die("error in query :$query. ".mysql_errno()); 
 echo '[';
     while(list($id,$title,$code,$parentcode)=mysql_fetch_row($subresult)){
        echo '"'.$title.'",';
     }
 echo '],';

     }
     echo "}";


    // echo '<table cellpadding="10" border="1">';
    // echo '<tr><th>id</th><th>title</th><th>code</th><th>parentcode</th></tr>';
    //  while(list($id,$title,$code,$parentcode)=mysql_fetch_row($result)){
    //     echo "<tr>";
    //     echo "<td>".$id."</td>";
    //     echo "<td>".$title."</td>";
    //     echo "<td>".$code."</td>";
    //     echo "<td>".$parentcode."</td>";
    //     echo "</tr>";
    //  }
    //  echo "</table>";
  }
  else{
    echo "记录未找到!";
  }
   
  mysql_free_result($result); //释放记录集所占用的内存
   
  mysql_close($linkID); //关闭数据库连接
?>
 </body>
</html>

