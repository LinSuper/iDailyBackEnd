<?php
require_once "../config/config.php";
require_once __ROOT__."/database/mysql.php";


Class userModel{
    public static function register($username,$password){
        $sql = "select * from `User` where username = '$username'";
        $result = mysql::queryTables($sql);
        if(isset($result[0])){
            return false;
        }else{
            $sql = "insert into `User` set username = '$username',password = '$password'";
            return mysql::execute($sql);
        }
    }
    
    public static function login($username,$password){
        $sql = "select * from `User` where username = '$username'";
        $result = mysql::queryTables($sql);
        if(isset($result[0])){
            return false;
        }else{
            $sql = "insert into `User` set username = '$username',password = '$password'";
            return mysql::execute($sql);
        }
    }
}
