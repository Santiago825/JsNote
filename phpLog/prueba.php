<?php

try{
    $base=new PDO("mysql:host=localhost;dbname=notes","root","");
    $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $sql="SELECT * FROM USERS WHERE user_email=:_email and user_password=:_pass ";
    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST["email_Login"]));
    $pass=htmlentities(addslashes($_POST["password_login"]));
    $resultado->execute(array("_email"=>$login,"_pass"=>$pass));
    $numeroRegistro=$resultado->rowCount();
        if($numeroRegistro!=0){
            
            header("location:index.html");

        }else{
             echo "malsas";
        }


}catch(Exception $e){
    echo "error";
}

