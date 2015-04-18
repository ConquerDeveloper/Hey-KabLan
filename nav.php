<!DOCTYPE html>
<html>
    <head>
        <title>¡Hey KabLan! - Un golpe de diversión</title>
        <meta charset="utf-8"/>
        <meta name="description" content="" />
        <meta name="author" content="Kevin Abreu" />
        <meta name="keywords" content="" />
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="stylesheet.css"/>
    </head>
<body>
    <!--Navegador-->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Populares
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Recientes
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#miModal">
                            Registro
                        </a>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" action="inicio.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Correo electrónico" required="required"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Contraseña" required="required" />
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>
    </nav>

    <!--HR-->

    <div class="container">
        <div class="row">
            <hr/>
        </div>
    </div>



    <!--Modal de registro-->
    <div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title text-center" id="myModalLabel">Conviértete en KabLaniano</h2>
                </div>
                <div class="modal-body">
                    <form action="registrar.php" method="post" id="formulario">
                        <div class="form-group">
                            <label for="Nombre">Nombre de Usuario:</label>
                            <input type="text" name="nombreUsuario" class="form-control" id="nombreUsuario" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="Correo">Correo Electrónico:</label>
                            <input type="email" name="correoUsuario" class="form-control" id="correoUsuario" required="required"/>
                        </div>
                        <div class="form-group">
                            <label for="Contraseña">Contraseña:</label>
                            <input type="password" name="passUsuario" class="form-control" id="passUsuario" required="required"/>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary btn-form">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#miModal").on("shown.bs.modal", function(){
                    $("#nombreUsuario").focus();
                });
            });
        </script>
</body>
</html>