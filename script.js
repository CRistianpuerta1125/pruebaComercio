document.addEventListener('DOMContentLoaded', function () {
    new Splide('#splide', {
      type       : 'fade',       // Puedes cambiar el tipo de transición según tus preferencias
      heightRatio: 0.5,          // Altura en relación con el ancho
      pagination : false,        // Si quieres mostrar la paginación
      arrows     : true,         // Si quieres mostrar las flechas de navegación
    }).mount();
  });
