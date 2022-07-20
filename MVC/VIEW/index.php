<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header("location:login.php");
}

if(isset($_POST["close_session"])){
  
    
    session_destroy();
    header("location:login.php");

}

require("../CONTROLER/controler_notes.php");




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style_note.css" />
    <!-- CSS only -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
  </head>
  <body>
    <header>
      <nav class="nav-bar" id="nav">
        <div class="logo_header">
          <span class="logo" alt="">J<span>S</span></span>
        </div>
        <input type="search" class="search" placeholder="search products" />
        <div class="nav_rigth">
          <div class="nav_rigth_icons">
            <a href=""><i class="fa-solid fa-arrow-rotate-right"></i></a>
            <a href=""><i class="fa-solid fa-brush"></i></a>
            <a href=""><i class="fa-solid fa-list"></i></a>
            <a id="btn_user" ><i class="fa-solid fa-user"></i></a>
          </div>
        </div>
      </nav>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" name="per" >
        <div class="options_user" id="options_user">
          <div class="conatiner_icon_user">
            <div class="icon_user" >Js</div>
          </div>
          
          <span>santiago orjuela</span>
          <span>servero822@gmail.com</span>
          <a onclick="location.href='./edit_dateUser.php'" class="btn_config" >Gestionar cuenta</a>
          <button href="javascript:enviar_formulario()" class="btn_closeSession" name="close_session"   >Cerrar sesion</button>
         
        </div>
      </form>
      
    </header>
    <main>
      <div class="container_main">
        <ul class="container_menu">
          <li>
            <a href=""><i class="fa-regular fa-lightbulb"></i></i>My notes</a>
          </li>

          <li>
            <a href=""><i class="fa-solid fa-box-archive"></i>Filed notes</a>
          </li>
          <li>
            <a href=""><i class="fa-regular fa-trash-can"></i>Trash</a>
          </li>
        </ul>

        <div class="container_note">
          

          <?php
          foreach($notesFixes as $elementos){
            
          ?>

          <div class="card">
            <div class="header_card">
              <h2 class="title_card"><?php echo $elementos["title"]; ?></h2>
              <h2 type="date" class="date_card"><?php echo $elementos["date"]; ?></h2>
            </div>

            <p class="content_note">
            <?php echo $elementos["content"]; ?>
            </p>
            <div class="edit_icons">
              <a href=""><i class="fa-solid fa-bell"></i></a>
              <a href=""><i class="fa-solid fa-user-plus"></i></a>
              <a href=""><i class="fa-solid fa-palette"></i></a>
              <a href=""><i class="fa-solid fa-image"></i></a
              ><a href=""><i class="fa-solid fa-inbox"></i></a
              ><a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a>
            </div>
          </div>
          <?php
          }
          ?>
          <div class="card">
            <div class="header_card">
              <h2 class="title_card">hola</h2>
              <h2 class="date_card">17/05/2022</h2>
            </div>

            <p class="note">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt,
              illum ipsam accusamus molestias exercitationem porro excepturi
              aperiam non maxime esse cupiditate nihil rerum repellat fugiat
              voluptate vero sed quisquam aut.
            </p>
          </div>
          <div class="card">
            <div class="header_card">
              <h2 class="title_card">hola</h2>
              <h2 class="date_card">17/05/2022</h2>
            </div>

            <p class="note">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt,
              illum ipsam accusamus molestias exercitationem porro excepturi
              aperiam non maxime esse cupiditate nihil rerum repellat fugiat
              voluptate vero sed quisquam aut.
            </p>
          </div>
          <div class="card">
            <div class="header_card">
              <h2 class="title_card">Giraldo</h2>
              <h2 class="date_card">17/05/2022</h2>
            </div>

            <p class="note">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt,
              illum ipsam accusamus molestias exercitationem porro excepturi
              aperiam non max sd fsd f sd f d s sadsa da sd asdas dsadsad sa
              dasdime esse cupiditate nihil rerum repellat fugiat voluptate vero
              sed quisquam aut.
            </p>
            <div class="edit_icons">
              <a href=""><i class="fa-solid fa-bell"></i></a>
              <a href=""><i class="fa-solid fa-user-plus"></i></a>
              <a href=""><i class="fa-solid fa-palette"></i></a>
              <a href=""><i class="fa-solid fa-image"></i></a
              ><a href=""><i class="fa-solid fa-inbox"></i></a
              ><a href=""><i class="fa-solid fa-ellipsis-vertical"></i></a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div style="height: 10000px;" ></div>
    <!-- JavaScript Bundle with Popper -->
    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script> -->
    <script src="js/navBar_config.js"></script>
  </body>
</html>
