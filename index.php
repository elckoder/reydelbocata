<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Tu sitio de informática y servicios digitales en Avilés"/>
    <meta name="keywords" content="servicio técnico, cursos, informática, reparación, móvil, pantallas, baterías, cursos"/>
    <meta name="author" content="José Ramón Amado" />
    <meta name="copyright" content="José Ramón Amado Pena" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap-css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <title>index</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
<?php
    include("clases.php");
    $jumbotron = new Jumbotron("images/patatas.jpg", "EL REY DEL BOCATA DE AVILÉS", "text-dark", "INICIO", "text-light");
    $navBar = new Navbar("text-light","text-light","text-light","text-light","text-light");
    $footer = new Footer("text-light","¡BUEN PROVECHO!");
?>
    <header>
        <?php $navBar -> imprimir(); ?>
        <?php $jumbotron -> imprimir(); ?>
    </header>

        
    <div>
    <div class="col-12 text-center p-5 bg-dark"><a class="fredoca" href="bocatas.php" style="text-decoration:none; color: #fff;">BOCATAS</a></div>
    <div class="col-12 text-center p-5 bg-dark"><a class="fredoca" href="hamburguesas.php" style="text-decoration:none; color: #fff;">HAMBURGUESAS</a></div>
    <div class="col-12 text-center p-5 bg-dark"><a class="fredoca" href="pizzas.php" style="text-decoration:none; color: #fff;">PIZZAS</a></div>
    <div class="col-12 text-center p-5 bg-dark"><a class="fredoca" href="bebidas.php" style="text-decoration:none; color: #fff;">BEBIDAS</a></div>
    <div class="col-12 text-center p-5 bg-dark"><a class="fredoca" href="postres.php" style="text-decoration:none; color: #fff;">BEBIDAS</a></div>
    </div>

    <?php $footer -> imprimir(); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>