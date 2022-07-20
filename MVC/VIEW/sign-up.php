<?php
require("./phpLog/conexion_user.php");
if(isset($_POST["get_into"])){
    $name=$_POST["name-signup"];
    $lastname=$_POST["Lastname-signup"];
    $user=$_POST["user_name"];
    $email=$_POST["email-singUp"];
    $pass=$_POST["password-singUp"];
    $passConf=$_POST["Conf_password_singUp"];
    $phone=$_POST["phone_singUp"];
    $pas=new user();
    $pas->addUser($name,$lastname,$user,$email,$pass,$passConf,$phone);
}
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/sign-up-style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <title>Document</title>
  </head>
  <body>
    <a href="index.html"
      ><h1 href="" method="post" class="logo-principal">NOTE JS</h1></a
    >

    <form
      
      class="form-register"
      method="post"
      onsubmit="return validate();"
    >
      <h2 class="form_tittle">Creat your account</h2>
      <div class="contenedor-inputs">
        <div class="input-labe-50">
          <label class="">Name</label>
          <input
            type="text"
            name="name-signup"
            placeholder="Enter your name"
            id="name"
            required
          />
        </div>
        <div class="input-labe-50">
          <label class="">Last name</label>
          <input
            type="text"
            name="Lastname-signup"
            class=""
            id="lastname"
            placeholder="Enter your Last name"
            required
          />
        </div>
        <div class="input-labe-100">
          <label class="">User name</label>
          <input
            type="text"
            name="user_name"
            class=""
            id="user_name"
            placeholder="Enter your Last name"
            required
          />
        </div>
        <div class="input-labe-100">
          <label class="">Email</label>
          <input
            type="email"
            name="email-singUp"
            class=""
            id="email"
            placeholder="Enter your email"
            required
          />
        </div>
        <div class="input-labe-50">
          <label class="">Password</label>
          <input
            type="password"
            class=""
            id="password"
            placeholder="Enter your password"
            name="password-singUp"
            required
          />
        </div>
        <div class="input-labe-50">
          <label class="form-label">Confirm password</label>
          <input
            type="password"
            class="input-50"
            id="confirm-pass"
            placeholder="Confirm password"
            name="Conf_password_singUp"
            required
          />
        </div>

        <div class="input-labe-50">
          <label class="form-label">Phone number</label>
          <input
            type="tel"
            class="input-50"
            id="phone"
            placeholder="Enter your phone number"
            name="phone_singUp"
            required
          />
        </div>

        </div>
        <div class="input-label-100">
          <input type="checkbox" id="rules" name="rules" required />
          <label for="rules">
            Declaro que he leído y autorizo el uso de mis datos personales de
            acuerdo a la Autorización y acepto los Términos y Condiciones de
            Villa Plast J&C.</label
          >
        </div>
        <div class="inputs-btn-sign">
          <input type="submit" name="get_into" value="Get Into" class="btn-start" />
          <p class="form__text">O ingresa con</p>
          <div class="container-btn-singupAlter">
            <a href=""><i class="fa-brands fa-google"></i>Google</a>
          </div>
          <div class="container-btn-singupAlter">
            <a href=""><i class="fab fa-facebook"></i>Facebook</a>
          </div>

          <div class="container-btn-singupAlter">
            <a href=""><i class="fa-brands fa-apple"></i>Apple</a>
          </div>
        </div>
      </div>
    </form>
    <script src="./js/countrys.js"></script>
    <script src="./js/Validation_sign-up.js"></script>
  </body>
</html>
