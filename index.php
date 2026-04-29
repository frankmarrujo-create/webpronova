<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Soluciones tecnológicas, desarrollo de software, infraestructura y ciberseguridad para empresas.">
    <meta property="og:title" content="ProNova Core">
    <meta property="og:description" content="Soluciones tecnológicas empresariales">
    <meta property="og:image" content="https://pronovacore.com/img/Logotipo.png">
    <meta property="og:type" content="website">
    <title>ProNova Core | Desarrollo de Software, Infraestructura y Ciberseguridad</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./img/pronova_favicon.ico" type="image/png">
</head>
<body>
    <main>
    <a href="https://wa.me/5213313285484?text=Hola,%20me%20interesa%20información%20sobre%20sus%20servicios"
        class="whatsapp-float-text"
        target="_blank">

        <i class="bi bi-whatsapp fs-1"></i>
        <span>Contáctanos</span>

     </a>
    <!--Seccion inicio-->
    <section id="inicio">
        <div class="hero-wrapper d-flex flex-column">
            <!-- Navbar -->
<!--            <ul class="navbar-nav ms-auto align-items-center">-->
                <nav class="navbar navbar-expand-lg fixed-top">
                    <div class="container">
                        <div class="col-2">
                            <a class="navbar-brand" href="#inicio"><img src="./img/Logotipo.png" loading="eager" class="logo"></a>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto align-items-center">
                                <li class="nav-item"><!-- active se pone esta clase en <a> para que el texto aparezca en negro-->
                                    <a class="nav-link " href="#inicio"><i class="bi bi-house-door me-2"></i>Inicio</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarServicios" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"><i class="bi bi-grid-fill me-2"></i>Servicios</a>
                                    <ul class="dropdown-menu border-0 shadow-lg p-3 rounded-4" aria-labelledby="navbarServicios">
                                        <li>
                                            <a class="dropdown-item rounded-3 py-2 d-flex align-items-center" href="#detalle-consultoria"><i class="bi bi-briefcase text-purple me-3 fs-5"></i>
                                                <small class="d-block text-purple fw-bold">Consultoría TI</small>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a class="dropdown-item rounded-3 py-2 d-flex align-items-center" href="#detalle-software"><i class="bi bi-code-square text-purple me-3 fs-5"></i>
                                                <small class="d-block text-purple fw-bold">Desarrollo de sóftware</small>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a class="dropdown-item rounded-3 py-2 d-flex align-items-center" href="#detalle-infraestructura"><i class="bi bi-hdd-network text-purple me-3 fs-5"></i>
                                                <small class="d-block text-purple fw-bold">Soporte e infraestructura</small>
                                            </a>
                                        </li>
                                        
                                        <li>
                                            <a class="dropdown-item rounded-3 py-2 d-flex align-items-center" href="#detalle-ciberseguridad"><i class="bi bi-shield-lock text-purple me-3 fs-5"></i>
                                                <small class="d-block text-purple fw-bold">Ciberseguridad</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#nosotros"><i class="bi bi-people me-2"></i>Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contacto"><i class="bi bi-chat-dots me-2"></i>Contacto</a>
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
                                <img src="./img/consultoria.webp" loading="eager" class="d-block w-100" alt="...">
                                <div class="carousel-caption ">
                                    <h1>Consultoría estratégica</h1>
                                    <p>Transformamos tu estrategia TI en resultados reales para tu negocio</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/software.webp" loading="eager" class="d-block w-100" alt="...">
                                <div class="carousel-caption ">
                                    <h1>Desarrollo y automatizacíon</h1>
                                    <p>Automatiza procesos y mejora tu productividad con soluciones personalizadas</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/soporte.webp" loading="eager" class="d-block w-100" alt="...">
                                <div class="carousel-caption ">
                                    <h1>Infraestructura y soporte</h1>
                                    <p>Mantenemos tu operación funcionando sin interrupciones</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="./img/seguridad.webp" loading="eager" class="d-block w-100" alt="...">
                                <div class="carousel-caption ">
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

        <!-- Seccion servicios -->
<!--        <section id="servicios" class="py-5 servicios">
            <div class="container-fluid px-4 px-md-5">
                <div class="row g-4">
                    <div class="col-12 col-md-6 d-flex">
                        <div class="servicio-card servicio-card-m w-100" onclick="mostrarSeccion('detalle-consultoria')">
                            <img src="./img/servicioconsultoria.png" class="d-block" alt="...">
                            
                            <div class="contenido">
                                <h3>Consultoría Estratégica</h3>
                                <p>Optimiza tus procesos y toma mejores decisiones con tecnología alineada a tu negocio.</p>
                                
                                <div class="mt-4">
                                    <button class="btn btn-pronova">
                                        Explorar servicio 
                                        <i class="bi bi-arrow-right-circle-fill ms-2"></i>
                                    </button>
                                </div>                                
                            </div>
                        </div>   
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="servicio-card servicio-card-v w-100" onclick="mostrarSeccion('detalle-software')">
                            <img src="./img/serviciosoftware.png" class="d-block" alt="...">
                            
                            <div class="contenido">
                                <h3>Desarrollo y Automatización</h3>
                                <p>Digitaliza y automatiza tus operaciones para aumentar eficiencia y control.</p>
                                
                                <div class="mt-4">
                                    <button class="btn btn-pronova-purple">
                                        Ver solución
                                        <i class="bi bi-gear-fill ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="servicio-card servicio-card-v w-100" onclick="mostrarSeccion('detalle-infraestructura')">
                            <img src="./img/servicioinfraestructura.png" class="d-block" alt="...">
                            
                            <div class="contenido">
                                <h3>Infraestructura y Soporte</h3>
                                <p>Mantén tu operación estable con tecnología confiable y soporte especializado.</p>
                                
                                <div class="mt-4">
                                    <button class="btn btn-pronova-purple">
                                        Más información
                                        <i class="bi bi-lightning-charge-fill ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="col-12 col-md-6 d-flex">
                        <div class="servicio-card servicio-card-m w-100" onclick="mostrarSeccion('detalle-ciberseguridad')">
                            <img src="./img/serviciociberseguridad.png" class="d-block" alt="...">
                            
                            <div class="contenido">
                                <h3>Ciberseguridad</h3>
                                <p>Protege tu información y garantiza la continuidad de tu negocio.</p>
                                
                                <div class="mt-4">
                                    <button class="btn btn-pronova">
                                        Proteger mi empresa 
                                        <i class="bi bi-shield-lock-fill ms-2"></i>
                                    </button>
                                </div>    
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </section>
-->
        <!-- seccion detalle-consultoria -->
        <section id="detalle-consultoria" class="py-5 detalle-servicio ">
            <div class="container-fluid p-0 detalle-consultoria-premium">
                <div class="row g-0 align-items-center pt-5 ps-lg-5 ps-xl-5 mb-5 hero-detalle">
                    <div class="col-lg-7 p-5 ps-lg-5 ps-xl-5">
                        <h6 class="text-purple fw-bold text-uppercase mb-3" style="letter-spacing: 2px;">Servicios</h6>
                        <h2 class="display-5 fw-bold mb-4" style="color: #212B38;">Consultoría estratégica en TI</h2>
                        <p class="lead text-muted mb-5">Impulsamos el crecimiento de tu empresa mediante soluciones tecnológicas alineadas a tus objetivos.</p>
                        <a href="#contacto" class="btn btn-pronova-green px-5 py-3 rounded-5">
                            Agenda una consultoría inicial <i class="bi bi-calendar3 ms-2"></i>
                        </a>
                    </div>
                    <div class="col-lg-5 p-0">
                        <img src="./img/consultoria.webp" loading="lazy" class="img-fluid h-100 object-fit-cover rounded-start-lg" alt="Estrategia TI ProNova">
                    </div>
                </div>

                <div class="container mb-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-md-5">
                            <div class="p-5 rounded-4 position-relative" style="background-color: #212B38; color: #FFFFFF; overflow: hidden;">
                                <i class="bi bi-exclamation-triangle position-absolute text-white-10" style="font-size: 10rem; bottom: -20px; right: -20px; opacity: 0.1;"></i>
                                <h4 class="fw-bold mb-4" style="color: #FF6B6B;"><i class="bi bi-exclamation-triangle-fill me-2"></i>El desafío actual</h4>
                                <p class="mb-0 text-white-80 lead">Muchas empresas operan con procesos ineficientes, sistemas desconectados y sin una estrategia tecnológica clara, lo que limita su crecimiento y genera costos innecesarios.</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="p-5 border-start-lg border-green border-4">
                                <h6 class="text-purple fw-bold mb-2">Nuestra propuesta</h6>
                                <h3 class="fw-bold mb-4" style="color: #212B38;">Eficiencia, control y ventaja competitiva</h3>
                                <p class="lead text-muted">En <strong>ProNova Core</strong> analizamos tu operación y diseñamos una estrategia tecnológica que optimiza tus procesos, mejora la eficiencia y convierte la tecnología en una ventaja competitiva.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mb-5 py-5 bg-light rounded-5 p-5 shadow-inner">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-5" style="color: #212B38;">La ingeniería detrás de tu éxito</h3>

                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-zoom-in text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Diagnóstico</h5>
                                        <p class="small text-muted mb-0">Tecnológico completo.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-eye text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Análisis de procesos</h5>
                                        <p class="small text-muted mb-0">La base de la transformación digital.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-bullseye text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Identificación de oportunidades</h5>
                                        <p class="small text-muted mb-0">Encontrar ventajas competitivas.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-map text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Roadmap</h5>
                                        <p class="small text-muted mb-0">Ruta tecnológica.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <h3 class="fw-bold mb-5" style="color: #212B38;">Impacto directo en tu negocio</h3>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center p-3 rounded-4" style="background-color: rgba(33, 150, 85, 0.08);">
                                    <i class="bi bi-lightning-charge-fill text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Mayor eficiencia operativa</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-4" style="background-color: rgba(33, 150, 85, 0.08);">
                                    <i class="bi bi-cash-stack text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Reducción de costos estratégicos</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-4" style="background-color: rgba(33, 150, 85, 0.08);">
                                    <i class="bi bi-graph-up-arrow text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Mejor toma de decisiones con datos</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-4" style="background-color: rgba(33, 150, 85, 0.08);">
                                    <i class="bi bi-sort-up text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Crecimiento sostenible</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-4" style="background-color: rgba(33, 150, 85, 0.08);">
                                    <i class="bi bi-person-arms-up text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Agilidad y Adaptabilidad</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mb-5 py-5 text-center">
                    <h2 class="fw-bold mb-5" style="color: #212B38;">Nuestro proceso de ingeniería</h2>

                    <div class="row g-4 timeline-horizontal position-relative">
                        <div class="timeline-line d-none d-lg-block"></div>

                        <div class="col-lg-3 col-md-6">
                            <div class="timeline-item p-4">
                                <div class="timeline-numero bg-purple text-white mb-3 mx-auto">1</div>
                                <h5 class="fw-bold text-dark">Diagnóstico</h5>
                                <p class="small text-muted">Levantamiento inicial.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="timeline-item p-4">
                                <div class="timeline-numero bg-purple text-white mb-3 mx-auto">2</div>
                                <h5 class="fw-bold text-dark">Análisis</h5>
                                <p class="small text-muted">Evaluación profunda.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="timeline-item p-4">
                                <div class="timeline-numero bg-purple text-white mb-3 mx-auto">3</div>
                                <h5 class="fw-bold text-dark">Propuesta</h5>
                                <p class="small text-muted">Solución a medida.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="timeline-item p-4">
                                <div class="timeline-numero bg-green text-white mb-3 mx-auto"><i class="bi bi-check-lg"></i></div>
                                <h5 class="fw-bold text-dark">Implementación</h5>
                                <p class="small text-muted">Puesta en marcha.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid py-5 text-center" style="background: linear-gradient(135deg, #212B38 0%, #151d26 100%);">
                    <div class="container p-5">
                        <h2 class="display-6 fw-bold text-white mb-4">Descubre cómo optimizar tu empresa hoy mismo</h2>
                        <p class="lead text-white-80 mb-5">No dejes que procesos ineficientes limiten tu crecimiento. Agenda una consultoría de diagnóstico con nuestros expertos.</p>
                        <a href="#contacto" class="btn btn-pronova-green btn-lg px-5 py-3 rounded-5 fs-5 shadow">
                            Quiero mi Diagnóstico Tecnológico Gratis <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        
        <!-- seccion detalle-software -->
        <section id="detalle-software" class="py-5 detalle-servicio desarrollo-premium"><!--d-none lo quite -->
            <!-- HERO -->
            <div class="hero-dev py-5">
              <div class="container-fluid p-0">
                <div class="row align-items-center g-4 pt-5 ps-lg-5 ps-xl-5 ">

<!--                   TEXTO <div class="col-lg-7 p-5 ps-lg-5 ps-xl-5">-->
                  <div class="col-md-6 p-5 ps-lg-5 ps-xl-5 text-white">
                    <h6 class="text-green fw-bold text-uppercase mb-3" style="letter-spacing: 2px;">Servicios</h6>
                    <h1 class="fw-bold display-5 mb-3">Desarrollo y automatización</h1>
                    <p class="lead">
                      Transforma tu operación con soluciones tecnológicas diseñadas a la medida de tu negocio.
                    </p>
                    <a href="#contacto" class="btn btn-pronova-green px-5 py-3 rounded-5">
                            Agenda una consulta inicial <i class="bi bi-calendar3 ms-2"></i>
                        </a>
                  </div>

                  <!-- IMAGEN -->
                  <div class="col-md-6">
                      <!--<img src="./img/consultoria.png" class="img-fluid h-100 object-fit-cover rounded-start-lg" alt="Estrategia TI ProNova">-->
                    <img src="./img/software.webp" loading="lazy" class="img-fluid object-fit-cover rounded-start-lg" alt="">
                  </div>

                </div>
              </div>
            </div>

            <!-- PROBLEMA / SOLUCIÓN -->
            <div class="container py-5">
              <div class="row g-4">

                <div class="col-md-6">
                  <div class="card-dark p-4 h-100">
                    <h4 class="text-danger fw-bold mb-3">
                      <i class="bi bi-exclamation-triangle-fill me-2"></i>Problemática actual
                    </h4>
                    <p>Los procesos manuales y la falta de integración entre sistemas generan errores, pérdida de tiempo y baja productividad.</p>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card-dark p-4 h-100 border-morado">
                    <h4 class="text-green fw-bold mb-3">
                      <i class="bi bi-lightning-fill me-2"></i>Solución ProNova core
                    </h4>
                    <p>Desarrollamos herramientas y automatizaciones que optimizan tu operación, integran sistemas y eliminan tareas repetitivas.</p>
                  </div>
                </div>

              </div>
            </div>

            <!-- INCLUYE -->
            <div class="container py-5 text-white">
              <h2 class="text-center mb-5">¿Qué incluye?</h2>

              <div class="row g-4 text-center">

                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card-feature">
                    <i class="bi bi-code-slash fs-2 text-green"></i>
                    <p class="mt-3 fw-bold">Arquitectura y desarrollo de sistemas a medida</p>
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card-feature">
                    <i class="bi bi-gear fs-2 text-green"></i>
                    <p class="mt-3 fw-bold">Automatización de procesos e IA</p>
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card-feature">
                    <i class="bi bi-diagram-3 fs-2 text-green"></i>
                    <p class="mt-3 fw-bold">Integración de plataformas y ecosistemas</p>
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                  <div class="card-feature">
                    <i class="bi bi-window fs-2 text-green"></i>
                    <p class="mt-3 fw-bold">Apps empresariales</p>
                  </div>
                </div>
                
              </div>
            </div>

            <!-- BENEFICIOS -->
            <div class="container py-5">
              <h2 class="text-center text-white mb-5">Beneficios</h2>

              <div class="row g-4">

                <div class="col-md-6">
                  <div class="beneficio">
                    <i class="bi bi-clock text-white"></i>
                    <span>Ahorro de tiempo</span>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="beneficio">
                    <i class="bi bi-bug text-white"></i>
                    <span>Reducción de errores</span>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="beneficio">
                    <i class="bi bi-graph-up text-white"></i>
                    <span>Mayor productividad</span>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="beneficio">
                    <i class="bi bi-shield-check text-white"></i>
                    <span>Control total</span>
                  </div>
                </div>

              </div>
            </div>

            <!-- CTA -->
            <div class="cta-dev py-5 text-center" style="background: linear-gradient(135deg, #212B38 0%, #151d26 100%);">
              <div class="container">
                <h2 class="text-white mb-4">Solicita una solución a la medida de tu empresa</h2>
                <p class="lead text-white-80 mb-5">Hablemos de cómo una solución tecnológica a la medida puede potenciar tus procesos e impulsar el crecimiento de tu empresa.</p>
                <a href="#" class="btn btn-dev px-5 py-3">Contactar con un experto</a>
              </div>
            </div>
        </section>
        
        <!-- seccion detalle-infraestructura -->
        <section id="detalle-infraestructura" class="py-5 detalle-servicio infra-premium">
            <div class="container-fluid p-0 mb-5">
                <div class="row align-items-center g-4 pt-4 ps-lg-5 ps-xl-5 mt-lg-5">
                    <div class="col-lg-6 text-center">
                        <img src="./img/soporte.webp" loading="lazy" class="img-fluid rounded-4 shadow-sm" alt="">
                    </div>
                    <div class="col-lg-6 p-5 ps-lg-5 ps-xl-5">
                        <h6 class="text-purple fw-bold text-uppercase mb-3" style="letter-spacing: 2px;">Servicios</h6>
                        <h2 class="display-5 fw-bold mb-4">Infraestructura y Soporte</h2>
                        <p class="lead text-muted mb-5">Asegura la continuidad de tu operación con tecnología confiable y soporte especializado.</p>
                        <a href="#contacto" class="btn btn-pronova-green px-5 py-3 rounded-5">
                            Contacta a un experto <i class="bi bi-calendar3 ms-2"></i>
                        </a>
                    </div>

                </div>
              </div>

              <!-- PROBLEMA / SOLUCIÓN (DISEÑO DIFERENTE) -->
              <div class="container mb-5 py-5">
                <div class="row align-items-center g-5">
                  <div class="col-md-5">
                    <div class="p-5 rounded-4 position-relative" style="background-color: #212B38; color: #FFFFFF; overflow: hidden;">
                        <i class="bi bi-exclamation-octagon position-absolute text-white-10" style="font-size: 10rem; bottom: -20px; right: -20px; opacity: 0.1;"></i>                        
                        <h4 class="mt-3 fw-bold" style="color: #FF6B6B;"><i class="bi bi-exclamation-octagon me-2"></i>Problema</h4>
                        <p class="mb-0 text-white-80 lead">
                          Fallas en sistemas, lentitud y falta de soporte técnico afectan la productividad y generan riesgos operativos.
                        </p>
                    </div>
                  </div>

                  <div class="col-md-7">
                    <div class="p-5 border-start-lg border-green border-4">
                      
                      <h5 class="text-purple mt-3 fw-bold">Solución</h5>
                      <h3 class="fw-bold mb-4 text-gris">Control, productividad y confianza</h3>
                      <p class="lead text-muted">
                        Implementamos y administramos infraestructura tecnológica estable, brindando soporte continuo para mantener tu operación en funcionamiento.
                      </p>
                    </div>
                  </div>

                </div>
              </div>
              
              <!-- QUE INCLUYE -->
              <div class="container mb-5">
                <h2 class="text-center fw-bold text-gris mb-5">¿Qué incluye?</h2>

                <div class="row g-4">

                  <div class="col-6 col-md-4">
                    <div class="item-infra">
                      <i class="bi bi-server"></i>
                      <span>Administración de servidores</span>
                    </div>
                  </div>

                  <div class="col-6 col-md-4">
                    <div class="item-infra">
                      <i class="bi bi-hdd-network"></i>
                      <span>Redes empresariales</span>
                    </div>
                  </div>

                  <div class="col-6 col-md-4">
                    <div class="item-infra">
                      <i class="bi bi-headset"></i>
                      <span>Soporte técnico</span>
                    </div>
                  </div>

                  <div class="col-6 col-md-4">
                    <div class="item-infra">
                      <i class="bi bi-activity"></i>
                      <span>Monitoreo de sistemas</span>
                    </div>
                  </div>

                  <div class="col-6 col-md-4">
                    <div class="item-infra">
                      <i class="bi bi-cloud-arrow-down"></i>
                      <span>Respaldo de información</span>
                    </div>
                  </div>

                  <div class="col-6 col-md-4">
                    <div class="item-infra">
                      <i class="bi bi-key"></i>
                      <span>Gestión de licencias</span>
                    </div>
                  </div>

                </div>
              </div>

              <!-- BENEFICIOS (CARDS HORIZONTALES) -->
              <div class="container mb-5">
                <h2 class="text-center fw-bold text-gris mb-5">Beneficios</h2>

                <div class="row g-4">

                  <div class="col-md-6">
                    <div class="beneficio-card">
                      <i class="bi bi-lightning-charge"></i>
                      <p>Operación continua</p>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="beneficio-card">
                      <i class="bi bi-tools"></i>
                      <p>Reducción de fallas</p>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="beneficio-card">
                      <i class="bi bi-shield-check"></i>
                      <p>Mayor estabilidad</p>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="beneficio-card">
                      <i class="bi bi-person-check"></i>
                      <p>Soporte confiable</p>
                    </div>
                  </div>

                </div>
              </div>

              <!-- PROCESO (TIMELINE VERTICAL) -->
              <div class="container mb-5">
                <h2 class="text-center fw-bold mb-5 text-gris">Nuestro proceso de ingeniería</h2>

                <div class="row g-4 timeline-horizontal position-relative">
                    <div class="col-lg-3 col-md-6">
                        <div class="timeline-item text-center p-4">
                            <div class="timeline-numero bg-purple text-white mb-3 mx-auto">1</div>
                            <h5 class="fw-bold text-dark">Evaluación</h5>
                        </div>
                    </div>

                  <div class="col-lg-3 col-md-6">
                        <div class="timeline-item text-center p-4">
                            <div class="timeline-numero bg-purple text-white mb-3 mx-auto">2</div>
                            <h5 class="fw-bold text-dark">Implementación</h5>
                        </div>
                    </div>

                  <div class="col-lg-3 col-md-6">
                        <div class="timeline-item text-center p-4">
                            <div class="timeline-numero bg-purple text-white mb-3 mx-auto">3</div>
                            <h5 class="fw-bold text-dark">Monitoreo</h5>
                        </div>
                    </div>

                  <div class="col-lg-3 col-md-6">
                        <div class="timeline-item text-center p-4">
                            <div class="timeline-numero bg-purple text-white mb-3 mx-auto">4</div>
                            <h5 class="fw-bold text-dark">Soporte continuo</h5>
                        </div>
                    </div>
                </div>
                
                    
                
              </div>

                <!-- CTA -->
                <div class="container-fluid py-5 text-center" style="background: linear-gradient(135deg, #212B38 0%, #151d26 100%);">
                    <div class="container p-5">
                        <h2 class="display-6 fw-bold text-white mb-4">Contrata soporte profesional para tu empresa</h2>
                        <p class="lead text-white-80 mb-5">Evita que problemas técnicos frenen la productividad de tu equipo. Obtén asesoría de un experto.</p>
                        <a href="#contacto" class="btn btn-pronova-green btn-lg px-5 py-3 rounded-5 fs-5 shadow">
                            Contacta con un experto <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
        </section>
        <section id="detalle-ciberseguridad" class="py-5 detalle-servicio">
            <div class="container-fluid p-0 detalle-consultoria-premium">
                <div class="row g-0 align-items-center pt-5 ps-lg-5 ps-xl-5 mb-5 hero-detalle">
                    <div class="col-lg-7 p-5 ps-lg-5 ps-xl-5">
                        <h6 class="text-purple fw-bold text-uppercase mb-3" style="letter-spacing: 2px;">Servicios</h6>
                        <h2 class="display-5 fw-bold mb-4 text-white" style="color: #212B38;">Ciberseguridad empresarial</h2>
                        <p class="lead  mb-5 text-white">Protege tu información y garantiza la continuidad de tu negocio.</p>
                        <a href="#contacto" class="btn btn-pronova-green px-5 py-3 rounded-5">
                            Agenda una asesoría inicial <i class="bi bi-calendar3 ms-2"></i>
                        </a>
                    </div>
                    <div class="col-lg-5 p-0">
                        <img src="./img/seguridad.webp" loading="lazy" class="img-fluid h-100 object-fit-cover rounded-start-lg" alt="Estrategia TI ProNova">
                    </div>
                </div>

                <div class="container mb-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-md-5">
                            <div class="p-5 rounded-4 position-relative" style="background-color: var(--color-morado); color: #FFFFFF; overflow: hidden;">
                                <i class="bi bi-exclamation-triangle position-absolute text-white-10" style="font-size: 10rem; bottom: -20px; right: -20px; opacity: 0.1;"></i>
                                <h4 class="fw-bold mb-4" style="color: #FF6B6B;"><i class="bi bi-exclamation-triangle-fill me-2"></i>El desafío actual</h4>
                                <p class="mb-0 text-white-80 lead">Las empresas están expuestas a amenazas digitales que pueden provocar pérdida de información, interrupciones y daños económicos.</p>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="p-5 border-start-lg border-green border-4">
                                <h6 class="text-purple fw-bold mb-2">Nuestra propuesta</h6>
                                <h3 class="fw-bold mb-4 text-white" style="color: #212B38;">Integridad, resiliencia y blindaje</h3>
                                <p class="lead">Implementamos estrategias de seguridad que protegen tus sistemas, datos y operación frente a riesgos tecnológicos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mb-5 py-5 bg-light rounded-5 p-5 shadow-inner">
                    <div class="row g-5">
                        <div class="col-lg-7">
                            <h3 class="fw-bold mb-5 text-gris">¿Qué incluye?</h3>

                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-crosshair2 text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Evaluación de seguridad</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-pc-display-horizontal text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Protección de equipos</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-shield-fill-check text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Seguridad de red</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-back text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Respaldo de información</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-shield-lock-fill text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Políticas de seguridad</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card border-0 shadow-sm p-4 h-100 rounded-4 card-hover-purple">
                                        <i class="bi bi-map text-purple fs-1 mb-3"></i>
                                        <h5 class="fw-bold text-dark">Buenas prácticas de seguridad</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <h3 class="fw-bold mb-5 text-gris">Impacto directo en tu negocio</h3>
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex align-items-center p-3 rounded-4 impacto" >
                                    <i class="bi bi-lightning-charge-fill text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Protección de datos</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-4 impacto">
                                    <i class="bi bi-cash-stack text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Reducción de riesgos</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-4 impacto">
                                    <i class="bi bi-graph-up-arrow text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Continuidad del negocio</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-4 impacto">
                                    <i class="bi bi-sort-up text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Confianza operativa</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-4 impacto">
                                    <i class="bi bi-person-arms-up text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Entorno de Trabajo Seguro</span>
                                </div>
                                <div class="d-flex align-items-center p-3 rounded-4 impacto">
                                    <i class="bi bi-shift-fill text-green fs-3 me-3"></i>
                                    <span class="fw-bold fs-5" style="color: #212B38;">Recuperación ante desastres</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mb-5 py-5 text-center">
                    <h2 class="fw-bold mb-5 text-white">Nuestro proceso de ingeniería</h2>

                    <div class="row g-4 timeline-horizontal position-relative">
                        <div class="timeline-line d-none d-lg-block"></div>

                        <div class="col-lg-3 col-md-6">
                            <div class="timeline-item p-4">
                                <div class="timeline-numero bg-purple text-white mb-3 mx-auto">1</div>
                                <h5 class="fw-bold text-dark">Evaluación</h5>
                                <p class="small text-muted">Levantamiento inicial.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="timeline-item p-4">
                                <div class="timeline-numero bg-purple text-white mb-3 mx-auto">2</div>
                                <h5 class="fw-bold text-dark">Implementación</h5>
                                <p class="small text-muted">Politicas de seguridad.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="timeline-item p-4">
                                <div class="timeline-numero bg-purple text-white mb-3 mx-auto">3</div>
                                <h5 class="fw-bold text-dark">Monitoreo</h5>
                                <p class="small text-muted">Protección continua.</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="timeline-item p-4">
                                <div class="timeline-numero bg-green text-white mb-3 mx-auto"><i class="bi bi-check-lg"></i></div>
                                <h5 class="fw-bold text-dark">Mejora continua</h5>
                                <p class="small text-muted">Adaptabilidad.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid py-5 text-center" style="background: linear-gradient(135deg, #212B38 0%, #151d26 100%);">
                    <div class="container p-5">
                        <h2 class="display-6 fw-bold text-white mb-4">Protege tu empresa hoy mismo</h2>
                        <p class="lead text-white-80 mb-5">Proteja la integridad de sus activos digitales antes de que sean vulnerados, contactanos y recibe asesoría personalizada.</p>
                        <a href="#contacto" class="btn btn-pronova-green btn-lg px-5 py-3 rounded-5 fs-5 shadow">
                            Quiero mi Diagnóstico Tecnológico Gratis <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        
        <section id="nosotros" class="py-5 nosotros">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="./img/nosotros.webp" loading="lazy" class="img-fluid rounded-4 shadow-lg" alt="Equipo ProNova core">
                            <!--<div class="experience-badge">
                                <span class="fs-2 fw-bold">100%</span>
                                <p class="mb-0">Compromiso Digital</p>
                            </div>-->
                        </div>
                    </div>

                    <div class="col-lg-6 card border-0 shadow-sm p-4 rounded-4 card-transparent text-white">
                        <h6 class="text-purple fw-bold text-uppercase">¿Quiénes Somos?</h6>
                        <h5 class="display-8 fw-bold mb-4">Impulsando el crecimiento empresarial a través de soluciones tecnológicas estratégicas</h5>
                        <p class="lead ">
                            En <strong>ProNova core</strong>, nacimos con la misión de ser el aliado estratégico que las empresas necesitan para impulsar su crecimiento y productividad.
                        </p>
                        <p class="lead ">
                            Entendemos que la tecnología no solo debe funcionar: debe generar eficiencia, optimizar procesos y convertirse en una ventaja competitiva. Por ello, nos integramos a cada organización para diseñar soluciones a medida, estrictamente alineadas con sus objetivos de negocio.
                        </p>
                        <p class="lead mb-4">
                            Nuestro compromiso es ofrecer tecnología confiable, segura y escalable que permita a nuestros clientes operar con mayor control, productividad y confianza.
                        </p>

                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Consultoría Especializada</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Soporte TI</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Enfoque en PyMEs</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                    <span>Innovación Constante</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="contacto" class="pt-5 contacto">
            <?php //require_once('controladores/controlador_contacto.php'); ?>
            <div class="container">                
                <div class="row g-5 pt-5 ps-lg-5 ps-xl-5 mt-lg-2">
                    <div class="col-lg-5">
                        <h6 class="text-purple fw-bold text-uppercase">Contacto</h6>
                        <h2 class="display-6 fw-bold mb-4">¿Listo para potenciar tu negocio?</h2>
                        <p class="text-muted mb-5">
                            Estamos listos para escucharte y diseñar la solución tecnológica que tu empresa necesita.
                        </p>

                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon me-3">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Ubicación</h5>
                                <p class="text-muted mb-0">Guadalajara, Jalisco, México</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon me-3">
                                <i class="bi bi-envelope-at-fill"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Correo Electrónico</h5>
                                <p class="text-muted mb-0">contacto@pronovacore.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="contact-icon me-3">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h5 class="mb-0">Teléfono</h5>
                                <p class="text-muted mb-0">33 1328 5484</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="card border-0 shadow-sm p-4 rounded-4 bg-light">
                            <form id="contact-form" method="POST" ><!-- action="controladores/controlador_contacto.php" -->
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold small">Nombre<span class="text-danger">*</span></label>
                                        <input type="text" name="nombre" class="form-control" placeholder="Tu nombre" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold small">Empresa</label>
                                        <input type="text" name="empresa" class="form-control" placeholder="Tu empresa">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold small">Teléfono<span class="text-danger">*</span></label>
                                        <input type="number" name="telefono" class="form-control" placeholder="Teléfono de contacto" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-bold small">Correo<span class="text-danger">*</span></label>
                                        <input type="email" name="correo" class="form-control" placeholder="tu@email.com" required>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold small">Asunto</label>
                                        <select name="asunto" class="form-select">
                                            <option selected>Consultoría Estratégica</option>
                                            <option>Desarrollo y Automatización</option>
                                            <option>Infraestructura y soporte</option>
                                            <option>Ciberseguridad</option>
                                            <option>Otro</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label fw-bold small">Mensaje</label>
                                        <textarea name="mensaje" class="form-control" rows="4" placeholder="Cuéntanos sobre tu proyecto..."></textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-pronova-purple w-100 py-3">
                                            Enviar Mensaje <i class="bi bi-send-fill ms-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- FOOTER INTEGRADO -->
                <div class="footer-integrado bg-dark text-white text-center py-4">
                    <div class="container">
                        <p class="mb-2">&copy; <?php echo date("Y"); ?> ProNova Core. Todos los derechos reservados.</p>

                        <!--<div class="social-icons">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>-->
                    </div>
                </div>
        </section>

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <!-- Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JS -->
        <script src="js/script.js"></script>
        
        <!-- Modal Confirmación -->
        <div class="modal fade" id="modalConfirmacion" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content confirmacion-modal text-center p-4">

              <div class="check-icon mb-3">
                <i class="bi bi-shield-check"></i>
              </div>

              <h4 class="fw-bold mb-3">¡Mensaje enviado correctamente!</h4>

              <p class="text-muted">
                Tu información ha sido recibida de forma segura.  
                Uno de nuestros expertos se pondrá en contacto contigo para brindarte atención especializada.
              </p>

              <button class="btn btn-pronova mt-3" data-bs-dismiss="modal">
                Entendido
              </button>

            </div>
          </div>
        </div>
    </main>
</body>
</html>
