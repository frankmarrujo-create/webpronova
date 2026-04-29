$(document).ready(function() {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)');
    const menuColapsable = document.getElementById('navbarNav');
    
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

    // 🔥 FORMULARIO CONTACTO
    $('#contact-form').on('submit', function(e){
        e.preventDefault();

        $.post('controladores/controlador_contacto.php', $(this).serialize(), function(res){

            if(res === 'ok'){

                // limpiar formulario
                $('#contact-form')[0].reset();

                // mostrar modal
                let modal = new bootstrap.Modal(document.getElementById('modalConfirmacion'));
                modal.show();

            } else {
                alert(res);
            }

        }).fail(function(){
            alert('Error de conexión con el servidor');
        });
    });
   
});