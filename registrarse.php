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
        <link rel="stylesheet" href="css/Style.css" />
       </head>

<body>
  <!-- NAVEGACION -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">
        <i class="fab fa-stripe-s fa-2x"></i></i>MNK</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-right text-dark"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav mg-auto">
          <li class="nav-item active"><a class="nav-link" href="#lanzamientos">LANZAMIENTOS</a></li>
          <li class="nav-item"><a class="nav-link" href="#hombres">HOMBRES</a></li>
          <li class="nav-item"><a class="nav-link" href="#mujeres">MUJERES</a></li>
          <li><a href="#Ofertas" class="nav-link">OFERTAS</a></li>
        </ul>
      </div>
      <div class="navmenu">
        <a href="#"><i class="fas fa-search"></i></a>
        <a href="#"><i class="fas fa-shopping-cart"></i></a>
        <a href="iniciarCuenta.php"><i class="fas fa-user-circle"></i></a>
      </div>
    </div>
  </nav>



  <div class="register container-fluid">
    <div class="row">
      <div class="col-sm-6 text-center text-light">
        <h1 class="display-2 py-5">REGISTRARSE</h1>
        <form enctype="text/plain" method="POST" action="index.php">
          <input type="text" name="user" placeholder="Nombre" minlength="3" required=true><br></br>
          <input type="text" name="user" placeholder="Apellido" minlength="3" required=true><br></br>
          <input type="date" name="date" placeholder="Fecha de Nacimiento" minlength="8" required=true><br></br>
          <input type="email" name="correo" placeholder="E-mail" required=true><br></br>
          <input type="password" name="direccion" placeholder="Password" minlength="8" required=true><br></br>
          <input type="password" name="direccion" placeholder="Repetir Password" minlength="8" required=true><br></br>
                   <br>
          <a class="btn btn-outline-light" href="#" role="button">Registrarse</a>

          <form action="../../form-result.php" method="post" target="_blank">
            <br>
            <br>
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