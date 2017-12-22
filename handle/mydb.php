<?php
    class mydb
    {
        //var $host = "127.0.0.1";
        //var $username = "jxh";
        //var $password = "7c2485Za_";

        var $host = "localhost";
        var $username = "root";
        var $password = "123456";

        //var $username = "jxh";
        //var $password = "7c2485Za_";

        // var $host = "127.0.0.1";
        // var $username = "root";
        // var $password = "666666";

        var $database = "jxh";


        function GetValue($sql)
        {
            $db = new mysqli($this->host,$this->username,$this->password,$this->database);
            if(mysqli_connect_error())
            {    
                echo "connect fail";
                exit;
            }
            $result = $db->query($sql);
            $str = "";

            while($row = $result->fetch_row())
            {
                if(count($row)>0)
                {
                    $str=$row[0];
                }
            }
            return $str;
        }

        function GetRows($sql)
        {
            $db = new mysqli($this->host,$this->username,$this->password,$this->database);
            if(mysqli_connect_error())
            {    
                echo "connect fail";
                exit;
            }
            $result = $db->query($sql);
            return $result->fetch_row();
        }

        function Add($sql)
        {
            $db = new mysqli($this->host,$this->username,$this->password,$this->database);
            if(mysqli_connect_error())
            {    
                echo "connect fail";
                exit;
            }
            $result = $db->query($sql);
            if($result)
            {
                return mysqli_insert_id($db);
            }
            else
            {
                return 0;
            }
        }

        function Update($sql)
        {
            $result = $db->query($sql);
            if($result)
            {
                return "OK";
            }
            else
            {
                return "NO";
            }
        }

        function Delete($sql)
        {
            $result = $db->query($sql);
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
?>