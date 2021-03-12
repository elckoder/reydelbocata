<!DOCTYPE html>

<?php 
    session_start();
    $passwd="Elcoder@2020";

    if(isset($_POST["enviar"])) {
        if($_POST["passwd"] == $passwd) {
            $_SESSION["login"] = $passwd;
            header("Location:index.php");
        }
    }
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/favicon.ico" type="images/x-icon"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>elcoder-index</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>
<body style="background:#EAEAEA">
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <strong><a class="navbar-brand" href="index.php">elc<span class="text-danger">o</span>der</a></strong>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="regclie.php">Nuevo cliente<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="resguardo.php">Resguardo<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="ticket.php">Ticket servicio<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="ticket-venta.php">Ticket venta<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="factura.php">Factura<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="factura-venta.php">Factura venta<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="presupuesto.php">Presupuesto<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="buscar_factura.php">Buscar factura<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="form_os.php">Formulario OS<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="form_movil.php">Formulario movil<span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </div>
    </nav>
    <!--:::::::::::: FORMULARIO LOGIN :::::::::::::-->

    <form  class="col-10 col-sm-9 col-md-7 col-lg-6 d-flex flex-column mx-auto my-5 border border-primary p-3" action="#" method="post" enctype="multipart/form-data">
        <h5 class="mb-4 mx-auto">Introduce la contraseña para poder utilizar la aplicación.</h5>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="password" class="form-control" placeholder="Password" name="passwd" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="check" required>
                    <label class="form-check-label" for="gridCheck1">
                    Acepto los <a href="terminos.php">términos de uso</a> 
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <input type="submit" class="col-11 btn btn-success mx-auto mb-2" value="Acceder" name="enviar">  
        </div>
    </form>

    <!--:::::::::::::::::::::::::::::::::::::::::::-->

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
</body>
</html>