<?php
// Ejercicio 1.5

// Crea lista (array)
$paisajes = [
    "Imagen_otra_1.jpg",
    "Imagen_otra_3.jpg",
    "Imagen_otra_4.jpg",
    "Imagen_otra_2.jpg"
];
// Crea funcion aleatoria
function aleatorio() {

    $imagen = rand(0,3);
    
    return $imagen;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
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
    <!--cada vez que se cargue la página saldrá una foto distinta-->
        <div class="card shadow-sm p-4">
            <h1 class="card-title text-secondary"><strong>Ejercicio 1.5</strong></h1>
            <div class="card-body mt-3 text-center">
                <img src="img/<?php echo $paisajes[aleatorio()]; ?>" 
                    alt="<?php echo $paisajes[aleatorio()]; ?>" 
                    class="img-fluid rounded shadow-sm">
            </div>
        </div>
    </div>

</body>
</html>