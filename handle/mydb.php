<?php
    class mydbda
    {
        var $host = "localhost";
        //var $username = "jxh";
        //var $password = "7c2485Za_";

        var $username = "root";
        var $password = "123456";
        var $database = "jxh";
        
        /**
            功能：执行SQL语句，返回结果
            参数：$sql:要执行的SQL语句
                 $type：SQL语句的类型，CX代表查询，QT代表其他
                 $data:要操作的数据库
            返回值：如果是查询，返回结果集
                  如果是其他语句，执行成功返回OK，失败返回NO
        */
        function Select($sql,$type,$data)
        {
            
            //1.造连接对象
            $db = new mysqli($this->host,$this->username,$this->password,$data);
            
            //2.判断是否连接成功
            if(mysqli_connect_error())
            {    
                echo "connect fail";
                
                //退出整个程序
                exit;
            }
            else
            {
                //4.执行SQL语句
                
                $result = $db->query($sql);
                
                if($type == "CX")
                {
                    $str = "";
                    
                    while($row = $result->fetch_row())
                    {
                        for($i=0;$i<count($row);$i++)
                        {
                            $str=$str.$row[$i]."^";
                        }
                        $str = substr($str,0,strlen($str)-1);
                        $str = $str."|";
                        
                    }
                    $str = substr($str,0,strlen($str)-1);
                    return $str;
                }
                else
                {
                    if($result)
                    {
                        return "OK";
                    }
                    else
                    {
                        return "NO";
                    }
                }
                
        
            }
        }

        
    
    }
?>