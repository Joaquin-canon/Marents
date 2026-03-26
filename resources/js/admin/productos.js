window.abrirModal = function () {
    const modal = document.getElementById('modalProducto');
    if (!modal) return;

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

window.cerrarModal = function () {
    const modal = document.getElementById('modalProducto');
    if (!modal) return;

    modal.classList.add('hidden');
    modal.classList.remove('flex');
}