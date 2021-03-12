<?php
    class Plato {
        private $titulo;
        private $foto;
        private $texto;
        private $precio;
        private $comprar;

        /* Creamos el constructor de la clase con cuatro argumentos, -las cuatro propiedades-*/

        function Plato($tit_plato, $fot_plato, $tex_plato, $pre_plato, $comprar) {
            $this -> titulo = $tit_plato;
            $this -> foto = $fot_plato;
            $this -> texto = $tex_plato;
            $this -> precio = $pre_plato;
            $this -> comprar = $comprar;
        }

        function imprimir() {
            echo "<form method='post' action='comprar.php'>";
            echo "<h4 class='text-center text-light bg-secondary mx-3 p-2 my-0'>" . $this->titulo . "</h4>";
            echo "<img class='col-12' title='" . $this->titulo . "' src='" . $this->foto . "' alt='menu photo' width='100%' height='auto'>";
            echo "<p class='mb-0 mx-3 p-3 bg-secondary text-light'>" . $this->texto . "</p>";
            echo "<h4 class='text-center text-light bg-info mx-3 p-2'>" . $this->precio . "€</h4>";
            echo "<p class='text-center text-light bg-info mx-3 p-2 mb-5'><input type='submit' style='text-decoration:none; color:#000;' value='" . $this->comprar . "'></p>";
            echo "</form>";
        }
    }

    //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    class Postre {
        private $titulo;
        private $foto;
        private $texto;
        private $precio;
        private $comprar;

        /* Creamos el constructor de la clase con cuatro argumentos, -las cuatro propiedades-*/

        function Postre($tit_postre, $fot_postre, $tex_postre, $pre_postre, $comprar) {
            $this -> titulo = $tit_postre;
            $this -> foto = $fot_postre;
            $this -> texto = $tex_postre;
            $this -> precio = $pre_postre;
            $this -> comprar = $comprar;
        }

        function imprimir() {
            echo "<form method='post' action='comprar.php'>";
            echo "<h4 class='text-center text-light bg-secondary mx-3 p-2 my-0'>" . $this->titulo . "</h4>";
            echo "<img class='col-12' title='" . $this->titulo . "' src='" . $this->foto . "' alt='foto postre' width='100%' height='auto'>";
            echo "<p class='mb-3 mb-0 mx-3 p-3 bg-secondary text-light'>" . $this->texto . "</p>";
            echo "<h4 class='text-center text-light bg-info mx-3 p-2'>" . $this->precio . "€</h4>";
            echo "<p class='text-center text-light bg-info mx-3 p-2 mb-5'><input type='submit' style='text-decoration:none; color:#000;' value='" . $this->comprar . "'></p>";
            echo "</form>";
        }
    }

    //:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::

    class Bebida {
        private $titulo;
        private $foto;
        private $texto;
        private $precio;
        private $comprar;

        /* Creamos el constructor de la clase con cuatro argumentos, -las cuatro propiedades-*/

        function Bebida($tit_bebida, $fot_bebida, $tex_bebida, $pre_bebida) {
            $this -> titulo = $tit_bebida;
            $this -> foto = $fot_bebida;
            $this -> texto = $tex_bebida;
            $this -> precio = $pre_bebida;
        }

        function imprimir() {
            echo "<form method='post' action='comprar.php'>";
            echo "<h4 class='text-center text-light bg-secondary mx-3 p-2 my-0'>" . $this->titulo . "</h4>";
            echo "<img class='col-12' title='" . $this->titulo . "' src='" . $this->foto . "' alt='menu photo' width='100%' height='auto'>";
            echo "<p class='mx-3 mb-0 p-3 bg-secondary text-light'>" . $this->texto . "</p>";
            echo "<h4 class='text-center text-light bg-info mx-3 p-2 mb-5'>" . $this->precio . "€</h4>";
            echo "<p class='text-center text-light bg-info mx-3 p-2 mb-5'><input type='submit' style='text-decoration:none; color:#fff;' value='" . $this->comprar . "'></p>";
            echo "</form>";
        }
    }

    //::::::::::::::::::: JUMBOTRON ::::::::::::::::::::::

    class Jumbotron {
        private $fondo;
        private $titulo;
        private $colorTitulo;
        private $subtitulo;
        private $colorSubtitulo;

        function Jumbotron($fondo, $titulo, $colorTitulo, $subtitulo, $colorSubtitulo) {
            $this -> fondo = $fondo;
            $this -> titulo = $titulo;
            $this -> colorTitulo = $colorTitulo;
            $this -> subtitulo = $subtitulo;
            $this -> colorSubtitulo = $colorSubtitulo;
        }

        function imprimir() {
           echo' <div class="jumbotron jumbotron-fluid mb-0" style="background-image: url( ' . $this->fondo . ');">
                    <div class="container">
                        <h2 class="text-center font-weight-bold ' . $this->colorTitulo . '">' . $this->titulo . '</h2>
                        <h2 class="text-center font-weight-bold ' . $this->colorSubtitulo . '">' . $this->subtitulo . '</h2>
                    </div>
                </div> ';
        }
    }

    //::::::::::::::::::::::::::: NAVBAR :::::::::::::::::::::

    class Navbar {
        private $link1;
        private $link2;
        private $link3;
        private $link4;
        private $link5;

        function Navbar ($link1, $link2, $link3, $link4, $link5) {
            $this -> link1 = $link1;
            $this -> link2 = $link2;
            $this -> link3 = $link3;
            $this -> link4 = $link4;
            $this -> link5 = $link5;
        }

        function imprimir() {
           echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand font-weight-bold text-danger russo" href="index.php">Rey del Bocata de Avilés</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link ' . $this->link1 . '" href="bocatas.php">BOCATAS<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link ' . $this->link2 . '" href="hamburguesas.php">HAMBURGUESAS<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link ' . $this->link3 . '" href="pizzas.php">PIZZAS<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link ' . $this->link4 . '" href="bebidas.php">BEBIDAS<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link ' . $this->link5 . '" href="postres.php">POSTRES<span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>';
        }
    }

    //::::::::::::::::::::::::::: FOOTER :::::::::::::::::::::

    class Footer {
        private $fondo;
        private $texto;

        function Footer($colorFondo, $titulo) {
            $this -> fondo = $colorFondo;
            $this -> texto = $titulo;
        }

        function imprimir() {
           echo '<footer>
                    <div class="row mt-4 pt-4 mb-0 px-5 pb-2 bg-success">         
                        <div class="col-12">
                        <h5 class="' . $this->fondo . ' d-flex justify-content-center">' . $this->texto . '</h5>
                        </div>
                    </div>
                </footer>';
        }
    }

?>