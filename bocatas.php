<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Carta de platos de restaurante en tu movil"/>
    <meta name="author" content="José Ramón Amado" />
    <meta name="copyright" content="José Ramón Amado Pena" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/bootstrap-css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <title>entrantes</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

    <?php
        include("clases.php");
        $bocata1 = new Plato("bocata 1", "images/plato1.jpg", "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nostrum, quibusdam facilis porro officia enim 
        consequatur iusto molestiae dicta ipsa molestias reiciendis reprehenderit pariatur sint voluptatem aspernatur! 
        Optio est maxime qui", 12.5, "Añadir");
        $bocata2 = new Plato("bocata 2", "images/plato2.jpg", "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nostrum, quibusdam facilis porro officia enim 
        consequatur iusto molestiae dicta ipsa molestias reiciendis reprehenderit pariatur sint voluptatem aspernatur! 
        Optio est maxime qui", 25.70, "Añadir");
        $bocata3 = new Plato("bocata 3", "images/plato3.jpg", "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nostrum, quibusdam facilis porro officia enim 
        consequatur iusto molestiae dicta ipsa molestias reiciendis reprehenderit pariatur sint voluptatem aspernatur! 
        Optio est maxime qui", 18.25, "Añadir");
        $bocata4 = new Plato("bocata 4", "images/plato4.jpg", "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Nostrum, quibusdam facilis porro officia enim 
        consequatur iusto molestiae dicta ipsa molestias reiciendis reprehenderit pariatur sint voluptatem aspernatur! 
        Optio est maxime qui", 20.00, "Añadir");
        $navBar = new Navbar("text-warning","text-light","text-light","text-light","text-light","text-light","text-light","text-light","text-light", "text-danger");
        $jumbotron = new Jumbotron("images/patatas.jpg", "EL REY DEL BOCATA DE AVILÉS", "text-light", "BOCATAS", "text-light");
        $footer = new Footer("text-light","¡BUEN PROVECHO!");
    ?>

    <header>
        <?php $navBar -> imprimir(); ?>
        <?php $jumbotron -> imprimir(); ?>
    </header>

    <div>     
        <div class="my-3 mx-auto">
            <?php
                $bocata1 -> imprimir();
                $bocata2 -> imprimir();
                $bocata3 -> imprimir();
                $bocata4 -> imprimir();
            ?>
        </div>
    </div>

    <?php $footer -> imprimir(); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>