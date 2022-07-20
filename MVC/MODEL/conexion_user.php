<?php


require('conexion.php');
class user extends conexion{
    private $userData;
    public function __construct() //constructor versión moderna php 7.0 en adelante
    {
        parent::__construct(); //este es el constructor del archivo conexion.php
        $this->userData=array();
    }

    public function comprobarUser($user_form,$pass_form){
        $sql="SELECT * FROM USERS WHERE user_email=:_email and user_password=:_pass ";
        $sentencia=$this->conexiondb->prepare($sql);
        $login=htmlentities(addslashes($user_form));
        $pass=htmlentities(addslashes($pass_form));
        $sentencia->execute(array("_email"=>$login,"_pass"=>$pass));
        $numeroRegistro=$sentencia->rowCount();
        if($numeroRegistro!=0){
            // session_start();
            // $_SESSION["usuario"]=$user_form;
            
            // header("location:index.php");
            return true;

        }else{
            return false;
             
        }
        $sentencia->closeCursor();
        $this->conexiondb=null;

    }
    public function addUser($name,$lastname,$user,$email,$pass,$passConf,$phone){
        $sql="INSERT INTO USERS (user_name,user_lastName,user_nameUser,user_email,user_password,user_passwordConfirm,user_phone) VALUES(:_name,:_lastname,:_user,:_email,:_pass,:_passConf,:_phone) ";
        $sentencia=$this->conexiondb->prepare($sql);
        $name=htmlentities(addslashes($name));
        $lastname=htmlentities(addslashes($lastname));
        $user=htmlentities(addslashes($user));
        $email=htmlentities(addslashes($email));
        $pas=htmlentities(addslashes($pass));
        $passConfirm=htmlentities(addslashes($passConf));
        $phone=htmlentities(addslashes($phone));
        $sentencia->bindParam(":_name",$name);
        $sentencia->bindParam(":_lastname",$lastname);
        $sentencia->bindParam(":_user",$user);
        $sentencia->bindParam(":_email",$email);
        $sentencia->bindParam(":_pass",$pass);
        $sentencia->bindParam(":_passConf",$passConf);
        $sentencia->bindParam(":_phone",$phone);
        $sentencia->execute();

        if($sentencia==false){
            echo "error al ejecutar la consulta";
        }
        else{
            echo "Se ha agregado";
        }        
    }
    public function getDataUser(){
        $email=$_SESSION["usuario"];
        $sql="SELECT * FROM users WHERE user_email=:_email";
        $sentencia=$this->conexiondb->prepare($sql);
        $sentencia->execute(array("_email"=>$email));
        while($user=$sentencia->fetch(PDO::FETCH_ASSOC)){
            $this->userData[]=$user;

        }
        return $this->userData;
    }
    
    public function entidades($sentencia,$name,$lastname,$user,$email,$password,$phone){
        $name=htmlentities(addslashes($name));
        $lastname=htmlentities(addslashes($lastname));
        $user=htmlentities(addslashes($user));
        $email=htmlentities(addslashes($email));
        $password=htmlentities(addslashes($pass));
        $password=htmlentities(addslashes($passConf));
        $phone=htmlentities(addslashes($phone));
        $sentencia->bindParam(":_name",$name);
        $sentencia->bindParam(":_lastname",$lastname);
        $sentencia->bindParam(":_user",$user);
        $sentencia->bindParam(":_email",$email);
        $sentencia->bindParam(":_pass",$password);
        $sentencia->bindParam(":_passConf",$password);
        $sentencia->bindParam(":_phone",$phone);
        return $sentencia;

    }
    public function updateUser($name,$lastname,$user,$email,$password,$phone){
        $emailSession=$_SESSION["usuario"];
        // $sql="UPDATE users SET user_name_bd=:_name,user_lastName=:_lastname,user_nameUser=:_nameUser,user_password:_password,user_phone:_phone*/ WHERE user_email='santiagoorjuela822@hotmil.com'"; 

        $sql="UPDATE users SET user_name_bd=:_name,user_lastName=:_lastname,user_nameUser=:_nameUser,user_email=:_email,user_password=:_password,user_phone=:_phone WHERE user_email='santiagoorjuela822@hotmail.com'";
        $sentencia=$this->conexiondb->prepare($sql);
        $name=htmlentities(addslashes($name));
        $lastname=htmlentities(addslashes($lastname));
        $user=htmlentities(addslashes($user));
        $email=htmlentities(addslashes($email));
        $password=htmlentities(addslashes($password));
        $phone=htmlentities(addslashes($phone));
        $sentencia->bindParam(":_name",$name);
        $sentencia->bindParam(":_lastname",$lastname);
        $sentencia->bindParam(":_nameUser",$user);
        $sentencia->bindParam(":_email",$email);
        $sentencia->bindParam(":_password",$password);
        $sentencia->bindParam(":_phone",$phone);
        $sentencia->execute();
        if($sentencia==false){
            return false;
        }
        else{
            return true;
        }  

        
    }

}