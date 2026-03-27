// 🔥 MODAL CREAR PRODUCTO
function abrirModal() {
    const modal = document.getElementById('modalProducto');
    if (!modal) return;

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

// 🔥 MODAL STOCK GLOBAL
function abrirModalStockGlobal() {
    const modal = document.getElementById('modalStockGlobal');
    if (!modal) return;

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

// 🔥 MODAL STOCK PRODUCTO
function abrirModalStock(id) {
    const modal = document.getElementById('modalStockProducto');
    const input = document.getElementById('producto_id');

    if (!modal || !input) return;

    input.value = id;

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}


// 🔥 EVENTOS
document.addEventListener('DOMContentLoaded', () => {

    console.log("JS PRODUCTOS OK"); // DEBUG

    // ✅ BOTÓN NUEVO PRODUCTO
    document.querySelector('#btnNuevoProducto')?.addEventListener('click', abrirModal);

    // ✅ BOTÓN STOCK GLOBAL
    document.querySelector('#btnStockGlobal')?.addEventListener('click', abrirModalStockGlobal);

    // ✅ BOTONES POR PRODUCTO
    document.querySelectorAll('.btn-stock').forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.dataset.id;
            abrirModalStock(id);
        });
    });

    // 🔥 CERRAR MODALES (CLAVE)
    document.querySelectorAll('.cerrarModal').forEach(btn => {
        btn.addEventListener('click', () => {
            const modal = btn.closest('.fixed');
            modal.classList.add('hidden');
        });
    });

    // 🔥 CERRAR AL HACER CLICK FUERA
    document.querySelectorAll('.modal').forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.add('hidden');
            }
        });
    });

    // 🔥 TOGGLE DESCUENTO
    const toggle = document.getElementById('toggleDescuento');
    const input = document.getElementById('inputDescuento');

    if (toggle && input) {
        toggle.addEventListener('change', () => {
            if (toggle.checked) {
                input.classList.remove('hidden');
            } else {
                input.classList.add('hidden');
                input.value = '';
            }
        });
    }

});

// 🔥 SELECT DINÁMICO
document.addEventListener('DOMContentLoaded', () => {

    const categoria = document.getElementById('selectCategoria');
    const modelo = document.getElementById('selectModelo');
    const talla = document.getElementById('selectTalla');

    if (!categoria) return;

    categoria.addEventListener('change', async () => {

        modelo.innerHTML = '<option>Cargando...</option>';

        const res = await fetch(`/admin/modelos/${categoria.value}`);
        const data = await res.json();

        modelo.innerHTML = '<option value="">Seleccionar</option>';

        data.forEach(m => {
            modelo.innerHTML += `<option value="${m.id}">${m.nombre}</option>`;
        });

    });

    modelo.addEventListener('change', async () => {

        talla.innerHTML = '<option>Cargando...</option>';

        const res = await fetch(`/admin/tallas/${modelo.value}`);
        const data = await res.json();

        talla.innerHTML = '<option value="">Seleccionar</option>';

        data.forEach(t => {
            talla.innerHTML += `<option value="${t.id}">${t.numero}</option>`;
        });

    });

});

const modelo = document.getElementById('selectModelo');
const info = document.getElementById('infoProducto');

modelo?.addEventListener('change', async () => {

    if (!modelo.value) return;

    const res = await fetch(`/admin/producto-info/${modelo.value}`);
    const data = await res.json();

    if (!data) {
        info.classList.remove('hidden');
        document.getElementById('estadoStock').innerText = 'Sin producto';
        return;
    }

    info.classList.remove('hidden');

    // 🔥 IMAGEN
    document.getElementById('imgProducto').src =
        data.imagen ? '/' + data.imagen.url : '/img/default.png';

    // 🔥 COLORES
    const coloresDiv = document.getElementById('colores');
    coloresDiv.innerHTML = '';

    if (data.variaciones.length === 0) {
        document.getElementById('estadoStock').innerText =
            'Sin existencias registradas';
        return;
    }

    document.getElementById('estadoStock').innerText =
        `${data.variaciones.length} variaciones registradas`;

    data.variaciones.forEach(v => {

        if (v.color_primario) {
            coloresDiv.innerHTML += `
                <span class="px-2 py-1 bg-gray-200 rounded text-xs">
                    ${v.color_primario.nombre}
                </span>`;
        }

        if (v.color_secundario) {
            coloresDiv.innerHTML += `
                <span class="px-2 py-1 bg-gray-100 rounded text-xs">
                    ${v.color_secundario.nombre}
                </span>`;
        }

    });

});

function renderStock(variaciones) {

    const container = document.getElementById('stockPorTalla');
    container.innerHTML = '';

    variaciones.forEach(v => {

        const clase = v.stock == 0
            ? 'bg-gray-100 text-gray-400 line-through'
            : 'bg-green-100 text-green-700';

        container.innerHTML += `
            <div class="px-3 py-1 rounded ${clase}">
                ${v.talla.numero} (${v.stock})
            </div>
        `;
    });
}