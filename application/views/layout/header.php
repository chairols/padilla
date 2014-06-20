<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        
        <title>Login</title>
        
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
        
        <script src="/assets/js/jquery-1.8.2.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        
        <div class="container">
      

        <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a href="/home/" class="navbar-brand">Roller Service</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span class="sr-only">Toogle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                Maestros <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/articulos/">Artículos</a></li>
                                <li><a href="/productos/">Productos</a></li>
                                <li><a href="/sucursales/">Sucursales</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                <?=$session['nombre'].' '.$session['apellido']?> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/usuarios/logout/">Salir</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                
            </div>
        </nav>
          <br><br><br>