function whatsapo() {
    var mql = window.matchMedia("screen and (max-width: 450px)");
    var msn2 = "necesito información";
    if (mql.matches) {
        window.open("https://api.whatsapp.com/send?phone=+593960489003&text=Hola quisiera más información sobre,%20", '_blank');
    } else {
        window.open("https://web.whatsapp.com/send?phone=+593960489003&text=Hola  quisiera más información sobre,%20", '_blank');
    }
}

function abrirModal() {
    document.getElementById("modalSimulador").style.display = "block";
    calcularcredito();
}

function cerrarModal() {
    document.getElementById("modalSimulador").style.display = "none";
}

// Cerrar si hace clic fuera del modal
window.onclick = function (event) {
    const modal = document.getElementById("modalSimulador");
    if (event.target === modal) {
        modal.style.display = "none";
    }
}

function calcularcredito() {
    // Mostrar carga
    document.getElementById('resultado').innerHTML = '<div class="text-center p-2"><i class="fa-solid fa-circle-notch fa-spin text-white/70 text-xl mb-2"></i><p class="text-[11px] text-white/70 font-medium">Calculando tu cuota...</p></div>';
    // Obtener los datos del formulario
    const formulario = document.getElementById('formularioCredito');
    const formData = new FormData(formulario);
    // Enviar datos por POST usando Fetch API
    fetch('cn/cn-credito.php', {
        method: 'POST',
        body: formData
    })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.text();
            })
            .then(data => {
                // Mostrar resultados
                document.getElementById('resultado').innerHTML = data;
            })
            .catch(error => {
                document.getElementById('resultado').innerHTML =
                        `<div class="w-full bg-white rounded-2xl p-5 text-left"><p class="text-xs font-bold text-red-600">No se pudo calcular tu cuota. Intenta de nuevo en unos segundos.</p></div>`;
            });
}

function enviarContacto() {
    // Obtener los datos del formulario
    const formulario = document.getElementById('formularioContacto');
    const formData = new FormData(formulario);
    // Enviar datos por POST usando Fetch API
    fetch('cn/cn-formulario.php', {
        method: 'POST',
        body: formData
    })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.text();
            })
            .then(data => {
                // Mostrar resultados
                if (data.error) {
                    document.getElementById('resultado').innerHTML = data;
                } else {
                    document.getElementById('resultado').innerHTML = data;
                }
            })
            .catch(error => {
                document.getElementById('resultado').innerHTML =
                        `<div class="error">Error al procesar la solicitud: ${error.message}</div>`;
            });
}