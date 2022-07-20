

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/log-style.css" />
    <link rel="stylesheet" href="css/style_note.css" />
  </head>
  <body>
    <header>
      <div class="main-header__container">
        
        <form action="../CONTROLER/user_controler.php" class="form-login" method="post">
          
          <div class="container-inputs">
            <h1 href="./phpLog/datos_conexion.php" method="post" class="logo-principal">
              Note JS
            </h1>
            <h2>Log In</h2>
            <label class="form-label" >Email</label>
            <input
            type="email"
            name="email_Login"
            class="input-100"
            placeholder="Enter your email"
            required
            />
            
            <label class="form-label">Password</label>
            <input
            type="password"
            class="input-100"
            placeholder="Enter your password"
            name="password_login"
            required
            />
            
            <a href="" class="restore-pass">Restore password</a>
            <input type="submit" name="send" value="Get Into" class="btn-start" />
            <p class="form__link">
              You do not have an account?<a href="./sign-up.php">Sign up</a>
            </p>
          </div>
        </div>
      </form>
    </header>
  </body>
</html>
