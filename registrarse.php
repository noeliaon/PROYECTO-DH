<?php
$nombre = "";
$pw = "";
$pwrep = "";
$apellido ="";
$mail = "";
$errorNombre = "";
$errorApellido = "";
$errorEmail = "";
$errorPassword = "";
$errorAvatar = "";
$usuariosEnJSON = file_get_contents("usuarios.json");
$usuarios = json_decode($usuariosEnJSON,true);


if($_POST){
      $errores = false;
    if($_POST["nombre"] == ""){
        $errorNombre = "Ingresar un nombre";
        $errores = true;
    }else if(strlen($_POST["nombre"]) < 3){
        $errorNombre = "El nombre debe tener por lo menos 3 caracteres";
        $errores = true;
    }else{
      $nombre = $_POST["nombre"];
    }
    if($_POST["apellido"] == ""){
        $errorApellido = "Ingrese un apellido";
        $errores = true;
    }
    else {
      $apellido = $_POST["apellido"];
    }
 
    $nuevoEmail=$_POST["email"];
    $match=false;
    foreach($usuarios as $usuarioJson){
      
             if ($usuarioJson["email"]==$nuevoEmail){
                  $match=true;
                                 break;
              }
     }


    if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL == false)){
       $errorEmail = "Mail invalido";
       $errores = true;

    }elseif($match==true){
            $errores = true;
            $errorEmail = "Ya hay un usuario registrado con ese email";

    }else {
      $mail = $_POST["email"];
    }


    if($_POST["pw"] == "" || $_POST["pwrep"] == ""){
        $errorPassword = "Ingresar password";
        $errores = true;
    }else if($_POST["pw"] != $_POST["pwrep"]){
        $errorPassword = "Password no coincide";
        $errores = true;
    }else if(strlen($_POST["pw"]) < 6){
        $errorPassword = "Al menos 6 caracteres";
        $errores = true;
    }else{
    
        $pw = $_POST["pw"];
        $pwrep = $_POST["pw"];
       $contrasenia = password_hash($_POST["pw"],PASSWORD_DEFAULT);
    }
   
    if(!$errores){
              $usuario = [
            "id"=> md5($_POST["nombre"]),
            "nombre" => $_POST["nombre"],
            "apellido" => $_POST["apellido"],
            "email" => $_POST["email"],
            "password" => $contrasenia
        ];
         $usuariosEnJSON = file_get_contents("usuarios.json");
        $usuarios = json_decode($usuariosEnJSON);
        $usuarios[] = $usuario;
        $nuevosUsuariosEnJSON = json_encode($usuarios);
        file_put_contents("usuarios.json",$nuevosUsuariosEnJSON);
        header('Location:loginB.php?email='.urlencode($mail));
        exit;
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
    <head>
=======

<head>
>>>>>>> 3116f19a227f8cbf7138fe94b20c7d30cc4e1870
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
        <link rel="stylesheet" href="css/Style.css" />
       </head>
<body>


<?php include "secciones\header.php";?>


  <div class="container-fluid col-sm-3">
    <div class="row text-center text-dark">
    
       
        <form enctype="multipart/form-data" method="POST" action="">
        <h1 class="display-3 py-5 text-center">REGISTRARSE</h1>
        
        <div class="form group">
        <span class="col-sm" style="color:red;font-size:14px;"><?=$errorNombre;?></span>
        <input type="text" class="form-control" name="nombre" placeholder="Ingresa tu Nombre" value="<?=$nombre?>"required>
      </div>


        <div class="form group pt-5">
        <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?=$apellido?>" required><br></br>
        </div>

        <div class="form group py-1">
        <input type="date" class="form-control" name="date" placeholder="Fecha de Nacimiento" required><br></br>
        </div>

        <div class="form group py-1">
        <span style="color:red;font-size:14px;"><?=$errorEmail;?></span> 
        <input type="email" class="form-control" name="email" placeholder="E-mail" value="<?=$mail?>" required><br></br>
        </div>

        <div class="form group py-1">
        <span style="color:red;font-size:14px;"><?=$errorPassword;?></span>
        <input type="password" class="form-control" name="pw" placeholder="Password" value="<?=$pw?>" required><br></br>
        </div>

        <div class="form group py-1">
        <input type="password"  class="form-control" name="pwrep" placeholder="Repetir Password" value="<?=$pwrep?>" required><br></br>
        </div>

          <button class="btn btn-outline-dark ml-5 mb-5" type="submit" role="button">Registrarse</button>
          </form>

      
                       

          <form action="../../form-result.php" method="post" target="_blank">
           
            <p><input type="checkbox" name="Noticias" value="likes"> Me gustaría recibir noticias sobre productos y
                promociones de SMNK</p></form>
                <br>
            <form action="../../form-result.php" method="post" target="_blank">
             <p><input type="checkbox" name="noticias de Smnk" value="likes"> He leído y acepto las&nbsp;<a href="#"
                id="terms">Condiciones Legales</a>&nbsp;y la&nbsp;<a href="#" id="privacyStatement">Política de
                Privacidad</a>&nbsp;de la empresa.</p>
              <br>
            </form>

        </form>
      </div>

    </div>
  </div>





<br>

<?php include "secciones/footer.php"; ?>



<<<<<<< HEAD



=======
  <!-- FOOTER -->
  
  <footer>
    <div class="container-fluid text-left">
      <div class="row">
        <div class="col-sm-4">
          <h5 class="text-dark">About</h5>
          <p class="pt-4 text-dark">Copyright ©2019 Todos los Derechos Resevados</p>
        </div>
        <div class="col-sm-4 text-center">
          <a href="preguntasFrecuentes.php">
            <h5 class="text-dark">PREGUNTAS FRECUENTES</h5>
          </a>
        </div>
        <div class="col-sm-4 social text-right pt-1">
          <h5 class="text-dark">FOLLOW US</h5>
          <p class="text-dark">Social Media</p>
          <div class="column text-dark">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  
>>>>>>> 3116f19a227f8cbf7138fe94b20c7d30cc4e1870


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