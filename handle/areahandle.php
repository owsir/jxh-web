<?php
  //连接参数
  $host="localhost";
  $user="root";
  $pwd="123456";
  $db="jxh";
   
  $linkID =mysql_connect($host,$user,$pwd); //创建一个mysql连接
   
  if(!$linkID){
    echo "<font color='red'>unable to connect!</font>";
  }
   
  mysql_select_db($db)or die("unable to select database"); //选择一个数据库
   
  $SQL_SELECT_SYMBOLS="select * from countryandarea";
   
  $result=mysql_query($SQL_SELECT_SYMBOLS)or die("error in query :$query. ".mysql_errno()); //执行SQL语句
   
  if(mysql_num_rows($result)>0){
    echo '<table cellpadding="10" border="1">';
    echo '<tr><th>id</th><th>title</th><th>code</th><th>parentcode</th></tr>';
     while(list($id,$title,$code,$parentcode)=mysql_fetch_row($result)){
        echo "<tr>";
        echo "<td>".$id."</td>";
        echo "<td>".$title."</td>";
        echo "<td>".$code."</td>";
        echo "<td>".$parentcode."</td>";
        echo "</tr>";
     }
     echo "</table>";
  }
  else{
    echo "记录未找到!";
  }
   
  mysql_free_result($result); //释放记录集所占用的内存
   
  mysql_close($linkID); //关闭数据库连接
?>