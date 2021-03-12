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
    <link rel="stylesheet" href="css/bootstrap-css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <title>elcoder-index</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />       
    <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
    <script>
        $(document).ready(function() {

            var map = L.map('map').setView(['43.541588', '-5.939436'], 12);

            L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
                    maxZoom: 18
                    }).addTo(map);
           
            marker=L.marker(['43.541588', '-5.939436'],{draggable: true}).addTo(map);

            $(marker).mouseover(function () { 
                if(confirm("Avenida de Asturias 6, Avilés. ¿Quieres verlo en Google Maps?")) {
                    window.open("https://goo.gl/maps/YRXW2MDUumciyo7h9");
                }
            });
        });
    </script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand font-weight-bold" style="font-family: 'Ubuntu', sans-serif;
"  href="index.php">elcoder.<span class="text-danger font-weight-bold">es</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dónde estamos<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="moviles.php">Para móviles</a>
                    <a class="dropdown-item" href="computer.php">Para ordenadores</a>
                    <a class="dropdown-item" href="copias.php">Copias y Escaneos</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contacto.php" tabindex="-1">Contacto</a>
                </li>
                </ul>
            </div>
        </nav>
    </header>

    <content>

        <div class="jumbotron jumbotron-fluid bg-warning">
        <div class="container">
            <h1 class="display-4 font-weight-bold  text-dark" style="font-family: 'Ubuntu', sans-serif;">
            elcoder.<span class="text-danger font-weight-bold">es</span></h1>
            <p class="lead font-weight-bold  text-dark">Tu sitio de servicios digitales en Avilés</p>
        </div>
        </div>

        <div id="map" style="width:90%; height:300px; margin:auto;"></div>

        <div class="card text-white bg-info mb-3 mt-3 col-10 mx-auto">
            <div class="card-header">Copias y escaneos</div>
            <div class="card-body">
                <h5 class="card-title">Copias</h5>
                <p class="card-text">Se entiende como copias al copiado de un documento en papel en otro también en papel.
                Lo que comúnmente conocemos como fotocopia. Los precios de las copias varían en función de 2 variables:
                la cantidad de copias que queremos hacer y el tipo de documento. Los documentos en tamaño A4 o A3, se 
                consideran como copias que se pueden hacer con la bandeja automática de la máquina. El precio de estas copias
                en tamaño A4, (tamaño folio normal) y en blanco y negro, es de 0.15€ la copia y 0.10€ a partir de las 10 copias. Para los tamaños
                "especiales" que no puedan ser introducidos por el alimentador automático, como pueden ser pasaportes, libros de familia... 
                el precio es de 0.15€ la hoja independientemente de la cantidad a imprimir. Las copias que vayan en la misma hoja por
                ambas caras, se entenderán como dos hojas. El precio de las copias en color en tamaño A4 que sean aptas para el alimentador automático,
                es de 0.30€ independientemente de la cantidad de copias y de 0.50€ para formatos que tengan que ser introducidos en el alimentador
                manual.  <br>El precio para las copias de tamaño A3 se calcula de la misma forma que los A4 pero multiplicándolo por 2, pues es un tamaño 
                cuyas dimensiones son justo el doble que los A4. </p>
                <h5 class="card-title">Escanéos</h5>
                <p class="card-text">Se entiende por escaneos a la digitalización de un documento que está en formato papel. Esto se suele utilizar cuando
                tenemos que enviar un email de un documento, pero este documento se encuentra en papel. En elcoder te ayudamos con este proceso para que la 
                operación no te suponga más de 5 minutos. <br>El precio de los escaneos es de 0.10€ la hoja mediante alimentador automático y 0.15€ mediante 
                el alimentador manual, sin importar si el documento es en color o en blanco y negro. El cliente debe traer el dispositivo usb para guardar
                los documentos una vez escaneados. <br>Si además, necesitas que te enviemos los documetos por email, el precio del envío de email es de 1.80€
                a una sola dirección de correo electrónico. Se sumarán 0.20€ por cada dirección de correo electrónico adicional.</p>
                <h5 class="card-title">Email</h5>
                <p class="card-text">info@elcoder.es</p>
            </div>
        </div>
        <div class="card text-black bg-warning py-2 mb-3 mt-3 col-10 mx-auto">
                <p class="card-text text-center">Si pasas el ratón sobre el 
                marcador de color azul que hay en el mapa o le haces click 
                con el dedo desde tu móvil, podrás abrir la ubicación en Google Maps.</p>
            </div>
        </div>
    
    </content>

    <footer>
        <div class="row mt-4 pt-4 mb-0 px-5 pb-2 bg-dark">         
            <div class="col col-md-6">
                <h5 class="text-light d-flex justify-content-center justify-content-md-start">elcoder.<span class="text-danger">es</span></h5>
            </div>
            <div class="col-md-6">
                <ul class="list-inline d-flex justify-content-center justify-content-md-end">
                    <li class="list-inline-item"><a href="politicaPrivacidad.php">Política de privacidad</a></li>
                    <li class="list-inline-item"><a href="contacto.php" class="text-light ">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>