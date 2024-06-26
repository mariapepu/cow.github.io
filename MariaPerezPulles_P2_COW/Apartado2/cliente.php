<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Important: Only recognizes CSS files if they are inside of css/ -->
    <link href="css/estilo.css" rel="stylesheet" type="text/css" />


    <title>Bootstrap Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <link rel="stylesheet" href="bootstrap-4.3.1_v2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="bootstrap-4.3.1_v2/js/popper.min.js"></script>
    <script src="bootstrap-4.3.1_v2/js/bootstrap.min.js"></script>
    <script src="bootstrap-4.3.1_v2/js/bootstrap.offcanvas.js"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="styles_client.css" rel="stylesheet">
</head>

<body>
    <div class="bs-canvas-overlay bs-canvas-anim bg-dark position-fixed w-100 h-100">
    </div>

    <!-- contenido que debe ser empujado por la nav bar -->
    <div class="bs-offset-main bs-canvas-anim">
        <!-- barra superior -->
        <nav class="navbar">
            <button class="btn" type="button" data-toggle="canvas" data-target="#bs-canvas-left" aria-expanded="false"
                aria-controls="bs-canvas-left">&#9776;</button>
            <div>
                <img src="../assets\logo_simple.webp" alt="logo" width="30" height="30">
                <h5 class="d-inline-block align-text-top">HOTELES.COM</h5>
            </div>
            <div class="dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                    <img src="../assets\icons\account_circle.svg" alt="sesion">
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="sign_up.php">Sign Up</a>
                    <a class="dropdown-item disabled" href="#">Sign In</a>
                </div>
            </div>
        </nav>

        <main role="main">
            <!-- jumbotron -->
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading section-title">¿Dónde quieres viajar?</h1>
                    <form action="./servidor.php" method="POST">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <img src="../assets/icons/location.svg" class="icon" alt="Icono">
                                    </div>
                                </div>
                                <input type="text" class="form-control"
                                    placeholder="Introduce una ciudad, pueblo o lugar de interés" name="destination"
                                    required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="date" class="form-control" placeholder="Fecha entrada" name="checkin">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="date" class="form-control" placeholder="Fecha salida" name="checkout">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <img src="../assets/icons/group.svg" class="icon" alt="Icono">
                                        </div>
                                    </div>
                                    <select id="inputState" class="form-control" placeholder="Número de personas"
                                        name="guests">
                                        <option selected disabled>Número de personas</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                    </select>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn search-button btn-lg btn-block">Buscar</button>
                            </div>
                    </form>
                </div>
            </section>

            <!-- cards -->
            <div class="album py-5">
                <div class="section-title">
                    <h1>Hoteles más vistos por los viajeros</h1>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="https://carmenshotel.com/" class="card" target="_blank">
                                    <img src="../assets/hotel-images/hamilton.jpg">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="container">
                                            <h4><b>Hotel 4</b></h4>
                                            <p>Hamilton, Canada</p>
                                            <p style="color:#ffc0e1">4 <img src="../assets/icons/star.svg"
                                                    style="width:13px; height:13px;">
                                            </p>
                                        </div>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="https://carmenshotel.com/" class="card" target="_blank">
                                    <img src="../assets/hotel-images/hamilton.jpg">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="container">
                                            <h4><b>Hotel 4</b></h4>
                                            <p>Hamilton, Canada</p>
                                            <p style="color:#ffc0e1">4 <img src="../assets/icons/star.svg"
                                                    style="width:13px; height:13px;">
                                            </p>
                                        </div>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="https://carmenshotel.com/" class="card" target="_blank">
                                    <img src="../assets/hotel-images/hamilton.jpg">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="container">
                                            <h4><b>Hotel 4</b></h4>
                                            <p>Hamilton, Canada</p>
                                            <p style="color:#ffc0e1">4 <img src="../assets/icons/star.svg"
                                                    style="width:13px; height:13px;">
                                            </p>
                                        </div>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="https://carmenshotel.com/" class="card" target="_blank">
                                    <img src="../assets/hotel-images/hamilton.jpg">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="container">
                                            <h4><b>Hotel 4</b></h4>
                                            <p>Hamilton, Canada</p>
                                            <p style="color:#ffc0e1">4 <img src="../assets/icons/star.svg"
                                                    style="width:13px; height:13px;">
                                            </p>
                                        </div>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="https://carmenshotel.com/" class="card" target="_blank">
                                    <img src="../assets/hotel-images/hamilton.jpg">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="container">
                                            <h4><b>Hotel 4</b></h4>
                                            <p>Hamilton, Canada</p>
                                            <p style="color:#ffc0e1">4 <img src="../assets/icons/star.svg"
                                                    style="width:13px; height:13px;">
                                            </p>
                                        </div>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <a href="https://carmenshotel.com/" class="card" target="_blank">
                                    <img src="../assets/hotel-images/hamilton.jpg">
                                    <div class="card-body">
                                        <p class="card-text">
                                        <div class="container">
                                            <h4><b>Hotel 4</b></h4>
                                            <p>Hamilton, Canada</p>
                                            <p style="color:#ffc0e1">4 <img src="../assets/icons/star.svg"
                                                    style="width:13px; height:13px;">
                                            </p>
                                        </div>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-5">
                <div class="container">
                    <div class="section-title">
                        <h1>¿No sabes dónde viajar?</h1>
                    </div>
                    <table class="table table-hover table-striped">
                        <thead class="thead">
                            <tr>
                                <th scope="col">Posición</th>
                                <th scope="col">Destino</th>
                                <th scope="col">Puntuación</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Tokio, Japón</td>
                                <td>9.5</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>París, Francia</td>
                                <td>9.3</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Nueva York, EE.UU.</td>
                                <td>9.0</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Roma, Italia</td>
                                <td>8.8</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Sídney, Australia</td>
                                <td>8.6</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <!-- Off-canvas sidebar markup, left/right or both. -->
    <div id="bs-canvas-left" class="bs-canvas bs-canvas-anim bs-canvas-left position-fixed h-100" data-offset="true"
        data-overlay="false">
        <header class="bs-canvas-header p-3">
            <h4 class="d-inline-block mb-0">Menú</h4>
            <button type="button" class="bs-canvas-close close" aria-label="Close"><span aria-hidden="true"
                    class="text-dark">&times;</span></button>
        </header>
        <div class="bs-canvas-content px-3 py-5">
        </div>
        <!-- inside nav bar -->
        <div class="collapse bg-dark" id="navbarHeader"></div>
        <div class="bs-canvas-content px-3 py-5">
            <div class="list-group my-5">
                <h3 class="h3-menu">Inicio de session</h3>
                <hr class="menu-hr">
                <h3 class="h3-menu">Explorar</h3>
                <h3 class="h3-menu">Escribenos</h3>
                <h3 class="h3-menu">Cookies</h3>
                <hr class="menu-hr">
                <h3 class="h3-menu">Filtros</h3>
                <ul class="menu-ul">
                    <li class="menu-li">Estrellas</li>
                    <li class="menu-li">Precio</li>
                    <li class="menu-li">Valoración de usuarios</li>
                    <li class="menu-li">Ubicación</li>
                    <li class="menu-li">Tipo de alojamiento</li>
                    <li class="menu-li">Facilidades</li>
                    <li class="menu-li">Disponibilidad</li>
                </ul>
            </div>
        </div>
    </div>

    <footer class="text-muted">
        <div class="container">
            <div class="row">
                <p class="col-md-4">
                    <img src="../assets/logo_simple.webp" alt="Logo hoteles.com" class="footer-logo">
                </p>
                <div class="col-md-4" style="text-align: center;">
                    <p><a href="/sobre-nosotros">Sobre nosotros</a></p>
                    <p><a href="/contacto">Contacto</a></p>
                    <p><a href="/terminos-y-condiciones">Términos y Condiciones</a></p>
                    <p><a href="/politica-de-privacidad">Política de Privacidad</a></p>
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src="../assets/icons/facebook.svg" alt="Facebook" />
                    </a>
                    <a href="https://www.twitter.com/" target="_blank">
                        <img src="../assets/icons/twitter.svg" alt="Twitter" />
                    </a>
                    <a href="https://www.instagram.com/" target="_blank">
                        <img src="../assets/icons/instagram.svg" alt="Instagram" />
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class="footer-copy">&copy; 2024 Hoteles.com. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

</body>




</html>