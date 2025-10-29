<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto con Bootstrap</title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        #miCarrusel img {
            max-height: 300px;
            object-fit: cover;
        }
    </style>
</head>
  
  <body class="d-flex flex-column h-100">

  <!-- Header -->
    <header class="bg-light text-center p-4">
        <div class="d-flex justify-content-center">
            <img src="../img/php_logo.png" alt="Imagen encabezado" class="img-fluid rounded shadow"
                style="max-height: 120px; width: auto;">
        </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../inicio.html">Inicio</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary me-2 text-white" href="ejercicio1.php">Variables</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary me-2 text-white" href="ejercicio2.php">Clases y Funciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success me-2 text-white" href="#">Condiciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning me-2 text-white" href="../ejercicio1.4.php">Bucles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger me-2 text-white" href="../ejercicio5.php">Formularios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary me-2 text-white" href="../ejercicio6.php">Sesiones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary me-2 text-white" href="../ejercicio7.php">Cookies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success me-2 text-white" href="../ejercicio1.3.php">Trabajo Final</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path
          d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"
        ></path>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path
          d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"
        ></path>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path
          d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
        ></path>
        <path
          d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
        ></path>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path
          d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
        ></path>
      </symbol>
    </svg>
    <div
      class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle"
    >
      <button
        class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
        id="bd-theme"
        type="button"
        aria-expanded="false"
        data-bs-toggle="dropdown"
        aria-label="Toggle theme (auto)"
      >
        <svg class="bi my-1 theme-icon-active" aria-hidden="true">
          <use href="#circle-half"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul
        class="dropdown-menu dropdown-menu-end shadow"
        aria-labelledby="bd-theme-text"
      >
        <li>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center"
            data-bs-theme-value="light"
            aria-pressed="false"
          >
            <svg class="bi me-2 opacity-50" aria-hidden="true">
              <use href="#sun-fill"></use>
            </svg>
            Light
            <svg class="bi ms-auto d-none" aria-hidden="true">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
        <li>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center"
            data-bs-theme-value="dark"
            aria-pressed="false"
          >
            <svg class="bi me-2 opacity-50" aria-hidden="true">
              <use href="#moon-stars-fill"></use>
            </svg>
            Dark
            <svg class="bi ms-auto d-none" aria-hidden="true">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
        <li>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center active"
            data-bs-theme-value="auto"
            aria-pressed="true"
          >
            <svg class="bi me-2 opacity-50" aria-hidden="true">
              <use href="#circle-half"></use>
            </svg>
            Auto
            <svg class="bi ms-auto d-none" aria-hidden="true">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
      </ul>
    </div>
    
    <!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container py-4">
    <section class="container">
      <h2 class="mb-4">3- Estructuras Condicionales</h2>

      <!-- Ejercicio 3.1 -->
      <article id="ejer2_1" class="card mb-4 shadow-sm bg-light rounded">
        <div class="card-body">
          <h3 class="card-title">Ejercicio 3.1</h3>
           <h5 class="fw-bold mb-3">Descripción:</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  🔢 Crea dos variables <strong>$a</strong> y <strong>$b</strong> que contengan números. Por ejemplo, <strong>$a = 8</strong> y <strong>$b = 5</strong>.
                </li>
                <li class="list-group-item">
                  ⚖️ Comprueba si el valor de <strong>$a</strong> es mayor que el de <strong>$b</strong>.
                </li>
                <li class="list-group-item">
                  📝 Si <strong>$a &gt; $b</strong>, muestra el siguiente mensaje:
                  <div class="alert alert-primary mt-2 mb-0">
                    <em>“a es mayor que b.”</em>
                  </div>
                </li>
                <li class="list-group-item">
                  💡 De lo contrario, muestra mensajes para los otros casos: <strong>a menor que b</strong> o <strong>a igual a b</strong>.
                </li>
              </ul>
              <br/>
          <?php 
            # 3 - Estructuras condicionales
            # Ejercicio 3.1

            # Crear las variables
            $a = 8;
            $b = 5;

            # Comprobar si a es mayor que b
            echo "a es $a y b es $b.<br>";

           #Esructura condicional con todas las posibilidades
            if ($a > $b) {
              echo "a es mayor que b.";
            } elseif ($a < $b) {
              echo "a es menor que b.";
            } else {
              echo "a es igual que b.";
            }
?>
        </div>
      </article>

      <!-- Ejercicio 3.2 -->
      <article id="ejer2_2" class="card mb-4 shadow-sm bg-light rounded">
        <div class="card-body">
          <h3 class="card-title">Ejercicio 3.2</h3>
          
           <h5 class="fw-bold mb-3">Descripción:</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  💡 Crea un objeto de la clase <strong>Bombilla</strong>.
                </li>
                <li class="list-group-item">
                  🔘 Enciende o apaga la bombilla utilizando el método correspondiente.
                </li>
                <li class="list-group-item">
                  🧠 Usa el método adecuado de la clase <strong>Bombilla</strong> para evaluar el valor de la propiedad <code>encendida</code>.
                </li>
              </ul>
              <br/>
          <?php
        // Incluir la clase Bombilla desde la carpeta recursos
        require_once '../recursos/Bombilla.php';

        // Crear un objeto de la clase Bombilla
        $bombilla = new Bombilla();

        // Cambia el estado aquí: encender() o apagar()
        $bombilla->encender();   // Para probar encendida
        // $bombilla->apagar();   // Para probar apagada

        // Evaluar el estado con getEncendida() y mostrar mensajes según el ejercicio
  

        if ($bombilla->getEncendida()) {
            echo "La Bombilla está ahora encendida<br>";
            echo "Apaga esa luz, que me deslumbras!!!";
        } else {
            echo "La Bombilla está ahora apagada<br>";
            echo "No veo nada, da la luz!!!";
        }
        ?>


        </div>
      </article>

      <!-- Ejercicio 3.3 -->
      <article id="ejer2_3" class="card mb-4 shadow-sm bg-light rounded">
        <div class="card-body">
          
        <h3 class="card-title">Ejercicio 3.3</h3>

         <h5 class="fw-bold mb-3">Descripción:</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  🎨 Crea una variable llamada <strong>$color</strong> para guardar un determinado color (por ejemplo, “Rojo” o “Verde”).
                </li>
                <li class="list-group-item">
                  🔡 Usa una función estándar de PHP para convertir el contenido de la variable a <strong>minúsculas</strong> (por ejemplo, <code>strtolower()</code>).
                </li>
                <li class="list-group-item">
                  🔁 Utiliza una estructura condicional <strong>switch</strong> para evaluar el color y mostrar un mensaje diferente en función de su valor.
                </li>
                <li class="list-group-item">
                  🧾 Si el color no coincide con ninguno de los casos definidos, muestra un mensaje indicando que el color no está registrado.
                </li>
              </ul>
              <br/>
          <?php

          #Crear la variable color
          $color = "Rojo";  
          #Convertir el color a minúsculas
          $color_minus = strtolower($color);

          #Definir un array asociativo con los colores conocidos
          $colores = [
              "rojo" => ["Gorria", "Red"],
              "verde" => ["Berdea", "Green"],
              "amarillo" => ["Horia", "Yellow"]
          ];


          #Comprobar si el color existe en el array
          if (array_key_exists($color_minus, $colores)) {
              #Obtener los valores del array
              $euskera = $colores[$color_minus][0];
              $ingles = $colores[$color_minus][1];

              #Mostrar la información
              echo ucfirst($color_minus) . " es $euskera en Euskara y $ingles en Inglés";

          } else {
              #Si el color no existe en el array
              echo "Lo siento, pero no conozco el color $color";
          }
          ?>

        </div>
      </article>

      <!-- Ejercicio 3.4 -->
      <article id="ejer2_4" class="card mb-4 shadow-sm bg-light rounded">
        <div class="card-body">
          <h3 class="card-title">Ejercicio 3.4</h3>
          <h5 class="fw-bold mb-3">Descripción:</h5>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  🟣 Crea un objeto de la clase <strong>Pokemon</strong> (por ejemplo, el Pokémon <strong>Gengar</strong>).
                </li>
                <li class="list-group-item">
                  ⚔️ Hiere al recién creado Pokémon con la fuerza que desees (por ejemplo, entre <strong>1 y 10</strong>).
                </li>
                <li class="list-group-item">
                  ❤️ Comprueba la vida actual del Pokémon usando el método correspondiente de la clase.
                </li>
                <li class="list-group-item">
                  🧠 Si la vida es superior a <strong>6</strong>, muestra el mensaje:
                  <div class="alert alert-success mt-2 mb-0">
                    <em>“La cosa no va mal, vas aguantando.”</em>
                  </div>
                </li>
              </ul>
              <br/>
          <?php
          #Incluir la clase Pokemon desde la carpeta recursos
          require_once '../recursos/pokemon.php';

          #Crear un objeto de la clase Pokemon
          $pokemon = new Pokemon("Gengar");

          #Herir al Pokémon con una fuerza determinada
          $pokemon->herir(4); #sepuede cambiar la fuerza(1 a 10)

          #Obtener la vida actual del Pokémon
          $vida_actual = $pokemon->getVida();

          #Mostrar mensajes según el valor de vida
          
          #echo "Ahora la vida de Gengar es {$vida_actual}<br>";

          #Estructura condicional según la vida del Pokémon
          if ($vida_actual > 6) {
              echo "La cosa no va mal, vas aguantando";
          } elseif ($vida_actual >= 3 && $vida_actual <= 6) {
              echo "Estás un poco débil, defiéndete!!";
          } else {
              echo "Estás muy débil, es la hora del ataque final!!";
          }
          ?>

        </div>
      </article>

    </section>
  </div>
</main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
      <div class="container">
        <span class="text-body-secondary"
          >IMAW - Ciudad Jardin</span
        >
      </div>
    </footer>
    <script
      src="../js/bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    ></script>
  </body>
</html>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: #0000001a;
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow:
          inset 0 0.5em 1.5em #0000001a,
          inset 0 0.125em 0.5em #00000026;
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .bd-mode-toggle .bi {
        width: 1em;
        height: 1em;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>