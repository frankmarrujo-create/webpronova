$(document).ready(function() {
    

    // Acción para el botón del Hero
    /*$('#btn-hero').on('click', function() {
        alert('¡Has hecho clic en el botón del Hero!');
        $(this).toggleClass('btn-light btn-warning');
    });

    // Efecto simple al pasar el mouse por los iconos
    $('.bi').on('mouseenter', function() {
        $(this).css('transform', 'scale(1.2)');
        $(this).css('transition', 'transform 0.3s');
    }).on('mouseleave', function() {
        $(this).css('transform', 'scale(1)');
    });
    */
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
    const menuColapsable = document.getElementById('navbarNav');
    let ignorarScroll = false; // Flag crítica
    let scrollTimeout;
    
    const bsCollapse = new bootstrap.Collapse(menuColapsable, {
        toggle: false // Evitamos que se dispare solo al cargar
    });

    navLinks.forEach((link) => {
        link.addEventListener('click', () => {
            // Solo intentamos cerrar si el menú está desplegado (visible)
            // Esto evita errores visuales en pantallas grandes (desktop)
            if (menuColapsable.classList.contains('show')) {
                bsCollapse.hide();
            }
        });
    });
    
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    });
    
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', function () {
            const menuColapsable = document.getElementById('navbarNav');
            const bsCollapse = bootstrap.Collapse.getInstance(menuColapsable);

            if (menuColapsable.classList.contains('show')  && bsCollapse) {
                bsCollapse.hide();
            }
            
            const dropdown = this.closest('.dropdown');
            if (!dropdown) return;

            const toggle = dropdown.querySelector('.dropdown-toggle');
            const bsDropdown = bootstrap.Dropdown.getInstance(toggle);

            if (bsDropdown) {
                bsDropdown.hide();
            }
        });
    });

/*    window.addEventListener("scroll", () => {
        // --- Lógica de Highlighting del Navbar ---
        const sections = document.querySelectorAll("section");
        const navLinks = document.querySelectorAll(".nav-link");
        let current = "";

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (window.scrollY >= sectionTop - 100) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href") === "#" + current) {
                link.classList.add("active");
            }
        });

        // --- Lógica para ocultar secciones al hacer scroll MANUAL ---
        
        // Si el scroll es provocado por el botón (programático), no hacemos nada
        if (ignorarScroll) return;

        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            // Solo ocultamos si no estamos en modo ignorar
            if (!ignorarScroll) {
                //ocultarSecciones();//------------------------------------ DESCOMENTAR ESTA LINEA
            }
        }, 100); 
    });
*/
    // Evento para los links del navbar
/*    document.querySelectorAll('.navbar .nav-link').forEach(link => {
        link.addEventListener('click', () => {
            ocultarSecciones();
        });
    });
*/
    // Hacemos que la función sea accesible globalmente (por el onclick en el HTML)
/*    window.mostrarSeccion = function(id) {
        // 1. Limpiamos cualquier estado previo
        ocultarSecciones();

        const seccion = document.getElementById(id);
        if (!seccion) return;

        // 2. Activamos la bandera ANTES de mostrar y mover
        ignorarScroll = true;

        // 3. Mostramos la sección
        seccion.classList.remove('d-none');

        // 4. Scroll suave
        seccion.scrollIntoView({ behavior: 'smooth' });

        // 5. IMPORTANTE: Rehabilitamos la detección de scroll manual 
        // después de que termine la animación (aprox 800ms)
        setTimeout(() => {
            ignorarScroll = false;
        }, 850); 
    };
*/    
});

    //mostrar las secciones ocultas
/*    function mostrarSeccion(id) {
        ocultarSecciones();

        const seccion = document.getElementById(id);

        if (!seccion) return;

        seccion.classList.remove('d-none');

        ignorarScroll = true;

        // scroll suave hacia la sección
        seccion.scrollIntoView({ behavior: 'smooth' });
        // desactivar después del scroll automático
        setTimeout(() => {
          scrollProgramatico = false;
        }, 700);
        
    }
*/    
/*    function ocultarSecciones() {
        document.querySelectorAll('.detalle-servicio').forEach(sec => {
          sec.classList.add('d-none');
        });
      }
*/