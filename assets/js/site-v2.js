document.addEventListener('DOMContentLoaded', function () {
  // Menú móvil
  var burger = document.querySelector('.v2-burger');
  var offcanvas = document.querySelector('.v2-offcanvas');
  var overlay = document.querySelector('.v2-offcanvas-overlay');
  var cerrar = document.querySelector('.v2-offcanvas-cerrar');

  function abrirMenu() {
    offcanvas.classList.add('abierto');
    overlay.classList.add('abierto');
  }
  function cerrarMenu() {
    offcanvas.classList.remove('abierto');
    overlay.classList.remove('abierto');
  }
  if (burger) burger.addEventListener('click', abrirMenu);
  if (cerrar) cerrar.addEventListener('click', cerrarMenu);
  if (overlay) overlay.addEventListener('click', cerrarMenu);

  // Reveal al hacer scroll (reemplaza AOS)
  var elementos = document.querySelectorAll('.v2-reveal');
  if ('IntersectionObserver' in window && elementos.length) {
    var observador = new IntersectionObserver(function (entradas) {
      entradas.forEach(function (entrada) {
        if (entrada.isIntersecting) {
          entrada.target.classList.add('visible');
          observador.unobserve(entrada.target);
        }
      });
    }, { threshold: 0.15 });
    elementos.forEach(function (el) { observador.observe(el); });
  } else {
    elementos.forEach(function (el) { el.classList.add('visible'); });
  }
});
