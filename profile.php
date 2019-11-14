<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <title>SMNK</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Style.css">
        <link rel="stylesheet" href="css/profile.css">

</html>
<body>
<?php include_once "secciones\header.php"; ?>

    

<div class="container main-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://i-love-png.com/images/img_191958_11550.png" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Cambiar imagen
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                      Nombre
                                    </h5>
                                   
                                    <p class="display-5">Informacion de la cuenta<p>
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#">Mis Datos</a>
                                </li>
                                                           </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" value="Editar Perfil"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-data">
                            <p>Mis Datos</p>
                            <a href="">Informacion Personal</a><br/>
                            <a href="">Seguridad</a><br/>
                            <a href="">Metodos de Pago</a><br/>
                            <a href="">Suscripciones</a>
                            <p>Compras</p>
                            <a href="">Mis Listas</a><br/>
                            <a href="">Mis pedidos</a><br/>
                            <a href="">Mis Carritos</a><br/>
                                                    </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tablero">
                            <div class="tab-pane fade show active">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Usuario</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>ID</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre de Usuario</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Juan Pelota</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>jpelota@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Telefono</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>911</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Domicilio</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lujan</p>
                                            </div>
                                        </div>
                           
            </form>           
        </div>


























  </body>