<?php
require_once "../config/config.php";
require_once __ROOT__."/model/userModel.php";
header("Contenr-type: application/json");

Class userController{
    public static function register(){        
        $postJson = json_decode($GLOBALS['HTTP_RAW_POST_DATA'],true);
        $username = $postJson['username'];
        $password = $postJson['password'];
        if(userModel::register($username,$password)){
            return json_encode(array('code' => 200 ,'msg' => "注册成功" ),JSON_UNESCAPED_UNICODE);
        }else{
            return json_encode(array('code' => 401 ,'msg' => "用户名已经被使用"),JSON_UNESCAPED_UNICODE);
        }
    }
}


        