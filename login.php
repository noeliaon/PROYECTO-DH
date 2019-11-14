<?php
$errorLogin = "";
if($_POST){
    require_once 'secciones/Validador.php';
    $validador = new Validador;

    $errorLogin = $validador->login($_POST["email"],$_POST["password"]);

    if($errorLogin == ""){
        session_start();
        $_SESSION["id_usuario_logueado"] = $id_user;
        header("Location:profile.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>SMNK</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="css/login.css">
     
       </head>
<body>




<div class="sidenav">
              <div class="login-main-text">
              <a href="index.php">
                  <p class="display-3 text-center text-white">
        <i class="fab fa-stripe-s fa-2x"></i>Mk</p></a>
       
       
         
            
            <a href="register.php"><button type="submit" class="btn btn-secondary btn-light">Registrate</button></a>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12 text-center py-5">
            <div class="login-form">
              <p class="display-3">Ingresar</p>
            <form method="POST">
                  <div class="form-group">
                     
                     <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                      <input type="password" class="form-control" name="password" placeholder="Contraseña">
                     <span style="color:red;font-size:10px;"><?=$errorLogin;?></span>
                  </div>
                  <div class="remember">
                            <input type="checkbox" name="recordarme" value="recordar"> <span>Recordar</span>
                        </div>
                        <div class="mt-3">
                            <a href="forgot.php" style="color:black; text-decoration:none;">Olvidaste la contrasena?</a>
                        </div>
                  <button type="submit" class="btn btn-black mt-3">Login</button>
                  
               </form>
            </div>
         </div>
      </div>
      

    



</body>
</html>
