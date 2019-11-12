<!DOCTYPE html>
<?php
//errores para mostrar
$errorNombre = "";
$errorEmail = "";
$errorContrasenia = "";
$errores = false;

//que hago si se envia el formualario
if($_POST){
    require_once 'secciones/Validador.php';
    $validador = new Validador;
    //VALIDO
    $errorNombre = $validador->full_name($_POST["full_name"]);
    $errorEmail = $validador->email($_POST["email"]);
    $errorContrasenia = $validador->contrasenias($_POST["password"],$_POST["confirm_password"]);

    //si no hay errores de validacion...
    if($errorNombre == "#" && $errorEmail == "#" && $errorContrasenia == "#"){
        //aca registro.
        require_once 'secciones/database.php';
        $bd = new BD;
        $id_user = $bd->registrarUsuario($_POST["full_name"],$_POST["email"],$_POST["password"]);
        //si se registro bien...
        if($id_user){
            //LOGUEO AL USUARIO Y REDIRIJO AL HOME
            session_start();
            $_SESSION["id_usuario_logueado"] = $id_user;
            header("Location:home.php");
        }

    }   
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>SMNK</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet" <link
    href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Style.css">
</head>

<body>


  <?php include_once "secciones\header.php";?>

 
  
    
  <div class="container">

  <h2 class="display-4 text-center mt-5">Crea tu cuenta</h1>

      <form class="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="firstname" class="col-sm"></label>
          <div class="col-md-9">
            <input type="text" class="form-control " name="full_name" placeholder="Nombre Completo">
            <span style="color:red;font-size:12px;"><?=$errorNombre != "#" ? $errorNombre : '';?></span>
          </div>
        </div>


        <div class="form-group">
          <label for="email" class="col-sm control-label"></label>
          <div class="col-md-9">
            <input type="text" class="form-control " name="email" placeholder="E-mail">
            <span style="color:red;font-size:12px;"><?=$errorEmail != "#" ? $errorEmail : '';?></span>
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-md-3 control-label"></label>
          <div class="col-md-9">
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
        </div>

        <div class="form-group">
          <label for="password" class="col-md-3 control-label"></label>
          <div class="col-md-9">
            <input type="password" class="form-control " name="confirm_password" placeholder="Repetir Password">
            <span style="color:red;font-size:12px;"><?=$errorContrasenia != "#" ? $errorContrasenia : '';?></span>
          </div>
        </div>

        
  <!-- Boton -->
        <div class="form-group">
                  <div class="col-sm">
            <button type="submit" class="btn btn-info btn-block btn-dark" style="margin-bottom:250px;">Registrarte</button>

          </div>
        </div>
</div>


      </form>
  

  <?php include "secciones/footer.php"; ?>








  <!--SCRIPTS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>