<?php
$wrong="";
$wrongUser="";

if (!$_GET && !$_POST){
    $fkEmail="";
    $fkPassword="";
}
if ($_GET){
    $fkEmail=$_GET["email"];
    $fkPassword="";
}
if($_POST){
     $fkEmail=$_POST["email"];
     $fkPassword=$_POST["password"];
}

if($_POST){
    $usersJSON = file_get_contents("usuarios.json");
    $usuarios = json_decode($usersJSON,true);
     foreach($usuarios as $usuario){
              if($usuario["email"] == $_POST["email"]){
                  if(password_verify($_POST["password"],$usuario["password"])){
                  session_start();
                  $_SESSION["email"] = $_POST["email"];
                  $_SESSION["password"] =$_POST["password"];
                  header("location:index.php");
      }
    } else {
       $wrong="DATOS INVALIDOS";
    }
  }
}

if($_POST){
   if(isset($_POST["recordarme"])){
       setcookie("email",$_POST["email"]);
       setcookie("password", password_hash($_POST["password"],PASSWORD_DEFAULT));
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet" <link
          href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Style.css">
       </head>

<body>


<?php include "secciones\header.php"; ?>

<div></div>
<div class="container-fluid col-sm-2">
<h1 class="display-3 mt-5">INGRESAR</h1>
<form class="text-center mt-auto pl-5" action="#" method="POST">
              <div class="row">

                <span class="wrong"><?=$wrong?></span>
                <span class="wrong"><?=$wrongUser?></span>

                <div class="form-group mt-5 ml-1">
                  <input class="" type="email" placeholder="E-mail" name="email"
                  value=<?=$fkEmail?>>
                  </div>


                  <div class="form-group ml-1">
                  <input class=""type="password" placeholder="Password" name="password"
                  value=<?=$fkPassword?>>
                  </div>

                  <div class="form-group form-check pl-5">
                    <label class="form-check-label" for="remember">Recordarme</label>
                    <input class="" type="checkbox" name="recordarme"
                    value="recordarme">
                 <br>
                    <button class="btn btn-outline-dark mt-3" type="submit" role="button">INGRESAR</button>
                 
                  </div>

                
              </div>
          </form>
     </div>



  <div class="bannerbottom bg-white container-fluid text-center">
    <h1 class="display-5 text-dark">¿No tenés cuenta?<a href="registrarse.php">Registrate</a></h1>
  </div>



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
