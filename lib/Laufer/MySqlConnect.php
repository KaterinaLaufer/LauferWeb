<?php

namespace Laufer;

class MySqlConnect
{
    const MYLOGIN = 'q96753ze_laufer';
    const MYPASS = '^C9{Z{8d';
    const MYHOST = 'localhost';
    const MYDB = 'q96753ze_laufer';

    public static function sqlConnect() {
        $conn = new \mysqli(self::MYHOST, self::MYLOGIN, self::MYPASS, self::MYDB);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else {
            return $conn;
        }
    }

    public static function executeSQL ($SQL){
        $conn=self::sqlConnect();
        $result = mysqli_query($conn, $SQL);
        //Выполнение запроса
        $conn ->close();
        while($row = $result->fetch_assoc()){
            $arResult[]=$row;
        }
        return $arResult;
    }
}