<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location:login.php");
}

if(isset($_POST["close_session"])){
  
    
    session_destroy();
    header("location:login.php");

}
require("../CONTROLER/edit_user_controler.php");

$userData=new ControlerEditUser();
$userDataArray=$userData->getData();
foreach($userDataArray as $elementos){
    $name= $elementos["user_name_bd"];
    $lasname= $elementos["user_lastName"];
    $userName= $elementos["user_nameUser"];
    $email= $elementos["user_email"];
    $password= $elementos["user_password"];
    $phone= $elementos["user_phone"];
}
if(isset($_POST["updateBtn"])){
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $user=$_POST["user"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $phone=$_POST["phone"];
    $userData->updateDataUser($name,$lastname,$user,$email,$password,$phone);



}



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/edit_user.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    <nav class="nav-bar" id="nav">
      <div class="logo_header">
        <span class="logo" alt="">J<span>S</span></span>
      </div>
      <h1 class="header_title">Config User</h1>
      <div class="nav_rigth">
        <div class="nav_rigth_icons">
          <a href=""><i class="fa-solid fa-arrow-rotate-right"></i></a>
          <a href=""><i class="fa-solid fa-brush"></i></a>
          <a href=""><i class="fa-solid fa-list"></i></a>
          <a id="btn_user"><i class="fa-solid fa-user"></i></a>
        </div>
      </div>
    </nav>
    <main>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" >
        <div class="container_main">
        <div class="photo_config">
          <img src="/MVC/VIEW/img/icon_picture_photo.png" alt="" />
          <div class="buttons_pictures">
            <a>View Porfile picture</a>
            <a>Update Porfile picture</a>
          </div>
        </div>
        <div class="container_config">
          <div class="option_menu">
            <label for="">Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>" />
          </div>
          <div class="option_menu">
            <label for="">Last Name:</label>
            <input type="text" name="lastname" value="<?php echo $lasname; ?>" />
          </div>
          <div class="option_menu">
            <label for="">Name user:</label>
            <input type="text" name="user" value="<?php echo $userName; ?>"/>
          </div>
          <div class="option_menu">
            <label for="">Email:</label>
            <input type="text" name="email" value="<?php echo $email; ?>" />
          </div>
          <div class="option_menu">
            <label for="">Password:</label>
            <input type="text" name="password" value="<?php echo $password; ?>" />
          </div>
          <div class="option_menu option_password">
            <label for="">Nuevo Password:</label>
            <input type="text" />
            <input type="text" />
          </div>
          <div class="option_menu">
            <label for="">Number Phone:</label>
            <input type="text" name="phone" value="<?php echo $phone; ?>" />
          </div>
        </div>
        <div class="accion_button_config">
          <a onclick="location.href='./index.php'">
            Cancelar
          </a>
          <button name="updateBtn" >Actualizar informacion</button>
        </div>
      </div>
        </form>
      
    </main>
  </body>
</html>
