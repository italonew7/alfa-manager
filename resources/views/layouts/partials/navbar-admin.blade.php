<!-- resources/views/layouts/partials/navbar.blade.php -->
<nav class="navbar navbar-light bg-light shadow-sm px-3 d-flex justify-content-between align-items-center">
    <!-- Menu Hamburguer à esquerda -->
    <button class="btn" id="menu-toggle">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Logo ao centro -->
    <div class="text-center flex-grow-1">
    <img class="mb-4" src="{!! url('images/alfamanagerlogo.webp') !!}" alt="" width="50" height="50">
    </div>
</nav>

<!-- Menu lateral à direita -->
<div id="side-menu" class="position-fixed top-0 start-0 bg-light shadow p-4" style="width: 250px; height: 100vh; display: none; z-index: 1050;">
    <h5>Menu</h5>
    <ul class="list-unstyled">
        <li><a href="#">Usuarios</a></li>
        <li><a href="#">Transações</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="{{ route('logout.perform') }}">Sair</a></li>
    </ul>
</div>

<!-- Script para abrir/fechar menu -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('side-menu');

        toggle.addEventListener('click', () => {
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        });
    });
</script>

<script>
    const menu = document.getElementById("side-menu");

    function toggleMenu() {
        menu.style.display = (menu.style.display === "none" || menu.style.display === "") ? "block" : "none";
    }

    // Fecha o menu se clicar fora dele
    document.addEventListener("click", function (event) {
        const isClickInside = menu.contains(event.target);
        const isMenuButton = event.target.closest("button"); // protege o botão de abrir menu

        if (!isClickInside && !isMenuButton && menu.style.display === "block") {
            menu.style.display = "none";
        }
    });
</script>

