<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>K4ing/Sing up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
<body>
    <header class="app-header">
        <nav class="navbar app-navbar ">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                            <span class="icon-bar app-icon"></span>
                            <span class="icon-bar app-icon"></span>
                            <span class="icon-bar app-icon"></span>
                        </button>
                        <a href="#" class="navbar-brand app-link">Registrarse en K4ing</a>
                    </div>
                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="nav navbar-nav navbar-right app-nav">
                            <li class="app-enlaces dropdown mega-dropdown ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos<span class="caret">
                                    </span>
                                </a>
                                <ul class="dropdown-menu mega-dropdown-menu row">
                                    <li class="col-sm-5">
                                      <div class="carousel slide" id="SliderMenu" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img class="img-responsive" id="image" src="img/slider/menu/imagen1.jpg" alt="img1">
                                            </div>
                                            <div class="item"> 
                                                <img class="img-responsive" id="image" src="img/slider/menu/imagen2.jpg" alt="img2">
                                            </div>
                                            <div class="item">
                                                <img class="img-responsive" id="image" src="img/slider/menu/imagen3.jpg" alt="img3">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-block btn-devcode" id="personalizaciones">Personalizaciones</button>
                                    </li>
                                    <li class="col-sm-7">
                                    <h4 class="app-resaltar">ROPA</h4>
                                      <div class="list-group">
                                         <a href="#" class="list-group-item active">1 a 5 años</a>
                                         <a href="#" class="list-group-item">6 a 10 año</a>
                                         <a href="#" class="list-group-item">11 a 16 años</a>
                                         <a href="#" class="list-group-item">17 a 23 años</a>
                                         <a href="#" class="list-group-item">+24 años</a>
                                       </div> 
                                    </li>
                                </ul>
                            </li>
                            <li class="app-enlaces"><a href="#">Ofertas</a></li>
                            <li class="app-enlaces"><a href="index.html">Inicio</a></li>
                        </ul>
                    </div>
                </div>
        </nav>
        <h1 class="app-titulo">Ingresa tus datos correctamente</h1>
        <section class="app-seccion4">
            <div class="container">
            <form action="registro.php" method="POST" name="formulario">
                <ul class="list-group">
                    <li class="list-group-item app-lista1">
                        <h1>Registrate <span class="glyphicon glyphicon-user"></span></h1>
                    </li>
                          
                    <il class="list-group-item">
                        <label>Nombre</label>
                        <input type="text" name="nombre" placeholder="Nombre" class="app-input form-control"></il>

                    </li>
                    <li class="list-group-item">
                        <lebel>Apellido</lebel>
                        <input type="text" placeholder="Apellido" name="apellido" class="app-input form-control">
                    </li>
                    <li class="list-group-item">
                        <lebel>Fecha de Nacimiento</lebel>
                        <input type="date" placeholder="Fecha de nacimiento" name="fecha" class="form-control app-input">
                    </li>
                    <li class="list-group-item">
                        <lebel>Email</lebel>
                        <input type="email" placeholder="Email" name="email" class="form-control app-input">
                    </li>
                    <li class="list-group-item">
                        <lebel>Password</lebel>
                        <input type="password" placeholder="Password" name="password1" class="form-control app-input">
                    </li>
                    <li class="list-group-item">
                        <lebel>Confirmar Password</lebel>
                        <input type="password" placeholder="Confirmar Password" name="password2" class="form-control app-input">
                    </li>
                    <li class="list-group-item">
                        <lebel>Pais</lebel>
                        <input type="text" placeholder="Pais" name="pais" class="form-control app-input">
                    </li>
                    <li class="list-group-item">
                         <div class="row">
                            <div class="col-xs-12 col-sm-4"></div>
                            <div class="col-xs-12 col-sm-4 form-group">
                              <button class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-in "></span> Registrar</button>
                            </div>
                            <div class="col-xs-12 col-sm-4"></div>
                          </div>
                        </il>
                </ul>      
            </form>
            </div>
        </section>



    </header>
    

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>