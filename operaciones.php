<!doctype html>
<html lang="en">
    <head>
        <title>Carnetizacion</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        /> 
    </head>
    <!--  -->
    <body>
        <header>
            <!-- place navbar here -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" > <img src="https://certificadossena.net/wp-content/uploads/2022/10/logo-sena-negro-png-2022-300x294.png" width="35px"></a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
             </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio Calaculadora</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Salir</a>
                </li>
             </ul>
             <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                <button class="btn btn-success" type="submit">Buscar</button>
                </form>
             </div>
                </div>
        </nav>
            <!-- Fin navbr -->
        </header>
        <main>
            <!-- Formato de html -Bootstrap-->
            <div class="container mt-3">
                <div
                    class="row justify-content-center align-items-center g-2"
                >
                <form action="operaciones.php" method="post"> 
                    <div class="mb-3">
                        <label for="numeroA" class="form-label">NumeroA</label>
                        <input type="number" class="form-control" id="columnas" name="numeroA">
                    <div class="mb-3">
                        <label for="numeroB" class="form-label">NumeroB</label>
                        <input type="number" class="form-control" id="filas" name="numeroB">
                    </div>
                    <h5>Elige la operación</h5>
                        <div class="form-check">
                        <input class="form-check-input" value="1" type="radio" name="operador" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            suma
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" value="2" type="radio" name="operador" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            resta
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" value="3" type="radio" name="operador" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            multiplicar
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" value="4" type="radio" name="operador" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                        Dividir
                        </label>
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Hacer operacion</button>
                </form>
                <!-- Fin de formato html Bootstrap -->
                <?php 
    
                if (isset($_POST['numeroA']) && isset($_POST['numeroB']) && isset($_POST['operador'])) {
                    
                    //Varibles
                    $numeroA = floatval($_POST['numeroA']); //Floatval para convertir la variable 
                    $numeroB = floatval($_POST['numeroB']);     
                    $operador = $_POST['operador'];
                
                        // Funciones
                        function suma($a, $b) {
                            return $a + $b;
                        }
                    
                        function resta($a, $b) {
                            return $a - $b;
                        }
                    
                        function multiplicar($a, $b) {
                            return $a * $b;
                        }
                    
                        function division($a, $b) {
                            if ($b == 0) {
                                return 'Error: División por cero';
                            }
                            return $a / $b;
                        }
                    
                        // Operaciones
                        switch ($operador) {
                            case 1:
                                $simbolo = "+";
                                $resultado = suma($numeroA, $numeroB);
                                break;
                            case 2:
                                $simbolo = "-";
                                $resultado = resta($numeroA, $numeroB);
                                break;
                            case 3:
                                $simbolo = "x";
                                $resultado = multiplicar($numeroA, $numeroB);
                                break;
                            case 4:
                                $simbolo = "/";
                                $resultado = division($numeroA, $numeroB);
                                break;
                            default:
                                $simbolo = "?";
                                $resultado = "Operador no válido";
                                break;
                        }
                    echo '<h5>' .($numeroA) . ' ' . $simbolo . ' ' .($numeroB) . ' = ' .($resultado) . '</h5>';
                } 
                else {
                    echo '<h5>Introduce valores</h5>';
                }
                
                ?>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
