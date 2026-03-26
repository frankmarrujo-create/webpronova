$(document).ready(function() {
    console.log("jQuery está listo!");

    // Acción para los botones del Hero
    $('.btn-hero').on('click', function() {
        alert('¡Has hecho clic en un botón del carrusel!');
        $(this).toggleClass('btn-light btn-warning');
    });

    // Efecto simple al pasar el mouse por los iconos
    $('.bi').on('mouseenter', function() {
        $(this).css('transform', 'scale(1.2)');
        $(this).css('transition', 'transform 0.3s');
    }).on('mouseleave', function() {
        $(this).css('transform', 'scale(1)');
    });
});
