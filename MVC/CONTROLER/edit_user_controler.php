<?php

require("../MODEL/conexion_user.php");
class ControlerEditUser{
    function getData(){
        $userData=new user();
        $userDataArray=$userData->getDataUser();
        return $userDataArray;
    }
    function updateDataUser($name,$lastname,$user,$email,$password,$phone){
        $userData=new user();
        $userData->updateUser($name,$lastname,$user,$email,$password,$phone);
    }


}









?>