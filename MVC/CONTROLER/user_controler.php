<?php
require("../MODEL/conexion_user.php");

$user=$_POST["email_Login"];
$pass=$_POST["password_login"];
$pas=new user();
$result= $pas->comprobarUser($user,$pass);
if($result){
    session_start();
    $_SESSION["usuario"]=$user;
    header("location:../VIEW/index.php");
}else{
    echo "pepe";
    header("location:../VIEW/login.php");
}

?>