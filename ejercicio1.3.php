<?php
// Ejercicio 1.3

// Crea lista de meses (array)
$meses = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
];
// Crea lista de meses con sus correspondientes números
$mes = [
    "Enero" => 1,
    "Febrero" => 2,
    "Marzo" => 3,
    "Abril" => 4,
    "Mayo" => 5,
    "Junio" => 6,
    "Julio" => 7,
    "Agosto" => 8,
    "Septiembre" => 9,
    "Octubre" => 10,
    "Noviembre" => 11,
    "Diciembre" => 12
];

$mes = 4
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        #miCarrusel img {
            max-height: 300px;
            object-fit: cover;
        }
    </style>
</head>

<body>

    <!-- Header -->
    <header class="bg-light text-center p-4">
        <div class="d-flex justify-content-center">
            <img src="img/php_logo.png" alt="Imagen encabezado" class="img-fluid rounded shadow"
                style="max-height: 120px; width: auto;">
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.html">Inicio</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary me-2 text-white" href="ejercicio1.1.php">Variables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary me-2 text-white" href="ejercicio1.2.php">Clases y Funciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success me-2 text-white" href="ejercicio1.3.php">Condiciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning me-2 text-white" href="ejercicio1.4.php">Bucles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger me-2 text-white" href="ejercicio1.5.php">Formularios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary me-2 text-white" href="ejercicio1.1.php">Sesiones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary me-2 text-white" href="ejercicio1.2.php">Cookies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success me-2 text-white" href="ejercicio1.3.php">Trabajo Final</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="card shadow-sm p-4">
            <h1 class="card-title text-warning"><strong>Ejercicio 1.3</strong></h1>
            <div class="card-body mt-3">
                <p class="card-text">
    <!--el mes 4 es igual a mayo-->
                    El mes <b><?php echo $mes; ?></b> es <b><?php echo $meses[$mes - 1]; ?></b>
                </p>
            </div>
        </div>
    </div>

</body>
</html>