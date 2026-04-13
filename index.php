<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProNova core</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!--<div class="container">-->
    <section id="inicio">
        <div class="hero-wrapper d-flex flex-column">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="col-2">
                        <a class="navbar-brand" href="#inicio"><img src="./img/Logotipo.png" class="img-fluid logo"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#servicios">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#nosotros">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contacto">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <header class="text-white text-center flex-grow-1">            
                    <div id="carrusel" class="carousel slide h-100" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/consultoria.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Consultoría estratégica</h1>
                                    <p>Transformamos tu estrategia TI en resultados reales para tu negocio</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/software.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Desarrollo y automatizacíon</h1>
                                    <p>Automatiza procesos y mejora tu productividad con soluciones personalizadas</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/soporte.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Infraestructura y soporte</h1>
                                    <p>Mantenemos tu operación funcionando sin interrupciones</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/seguridad.png" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h1>Ciberseguridad</h1>
                                    <p>Defiende tu empresa contra amenazas digitales con soluciones avanzadas</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carrusel" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>            
            </header>
        </div>
    </section>

        <!-- Content Section -->
        <section id="servicios" class="py-5 servicios">
            <div class="container-fluid px-4 px-md-5">
                <div class="row g-4">
                    <div class="col-12 col-md-6 d-flex">
                        <div class="servicio-card servicio-card-m w-100" onclick="mostrarSeccion('detalle-consultoria')">
                            <img src="./img/servicioconsultoria.png" class="d-block" alt="...">
                            
                            <div class="contenido">
                                <h3>Consultoría</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>   
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="servicio-card servicio-card-v w-100" onclick="mostrarSeccion('detalle-software')">
                            <img src="./img/serviciosoftware.png" class="d-block" alt="...">
                            
                            <div class="contenido">
                                <h3>Desarrollo</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="servicio-card servicio-card-v w-100" onclick="mostrarSeccion('detalle-infraestructura')">
                            <img src="./img/servicioinfraestructura.png" class="d-block" alt="...">
                            
                            <div class="contenido">
                                <h3>Infraestructura</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>    
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="servicio-card servicio-card-m w-100" onclick="mostrarSeccion('detalle-ciberseguridad')">
                            <img src="./img/serviciociberseguridad.png" class="d-block" alt="...">
                            
                            <div class="contenido">
                                <h3>Ciberseguridad</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </section>

        <section id="detalle-consultoria" class="detalle-servicio d-none">
            <div class="container">
              <h2>Desarro-------llo</h2>
              <p>Contenido detallado de desarrollo...</p>
            </div>
        </section>
        <section id="detalle-software" class="detalle-servicio d-none">
            <div class="container">
              <h2>software</h2>
              <p>Contenido detallado de desarrollo...</p>
            </div>
        </section>
        <section id="detalle-infraestructura" class="detalle-servicio d-none">
            <div class="container">
              <h2>infraestructura</h2>
              <p>Contenido detallado de desarrollo...</p>
            </div>
        </section>
        <section id="detalle-ciberseguridad" class="detalle-servicio d-none">
            <div class="container">
              <h2>ciberseguridad</h2>
              <p>Contenido detallado de desarrollo...</p>
            </div>
        </section>
        
        <section id="nosotros" class="py-5 nosotros">
            
        </section>
        
        <section id="contacto" class="py-5 contacto">
            
        </section>
        
        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-4">
            <div class="container">
                <p>&copy; 2023 webpronova. Todos los derechos reservados.</p>
                <div class="social-icons">
                    <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-3"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </footer>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JS -->
        <script src="js/script.js"></script>
   
</body>
</html>
