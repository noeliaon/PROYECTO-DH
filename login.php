<?php
$errorLogin = "";
if($_POST){
    require_once 'secciones/Validador.php';
    $validador = new Validador;

    $errorLogin = $validador->login($_POST["email"],$_POST["password"]);

    if($errorLogin == ""){
        //aca logueo.
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

<h1 class="display-4 text-center mt-5  text-dark" style="background: dark;">Iniciar Sesion</h1>
<div class="container-fluid col-sm-2">

<form class="text-center" method="POST">
              

                
                <div class="form-group col-sm mt-5">
                  <input class="" type="email" placeholder="E-mail" name="email">
                  
                  </div>


                  <div class="form-group col-sm">
                  <input class=""type="password" placeholder="Password" name="password">
                  
                  </div>

                  <div class="form-group form-check col-sm">
                    <label class="form-check-label" for="remember">Recordarme</label>
                    <input class="" type="checkbox" name="recordarme"
                    value="recordarme">
                 <br>
                 <span style="color:red;font-size:10px;"><?=$errorLogin;?></span>
                    <button class="btn btn-outline-dark mt-3" type="submit" role="button">INGRESAR</button>
                 
                  </div>
                </div>
          </form>
     </div>



  <div class="bannerbottom bg-white container-fluid text-center">
    <h1 class="display-5 text-dark">¿No tenés cuenta?<a href="register.php">Registrate</a></h1>
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
