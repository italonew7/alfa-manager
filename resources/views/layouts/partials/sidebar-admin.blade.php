<div class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh;">
    <img class="mx-auto d-block mb-3" src="{!! url('images/alfamanagerlogo.webp') !!}" alt="" width="72" height="57">
    <ul class="nav flex-column" style="margin-top: 15px;">
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="{{ route('produtos') }}">
                <i class="bi bi-box-seam me-2"></i> Produtos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="bi bi-people-fill me-2"></i> Usuários
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="bi bi-list-nested me-2"></i> Transações
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="bi bi-magnet-fill me-2"></i> Afiliados
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="#">
                <i class="bi bi-currency-exchange me-2"></i> Financeiro
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white d-flex align-items-center" href="{{ route('logout.perform') }}">
                <i class="bi bi-box-arrow-right me-2"></i> Sair
            </a>
        </li>
        <!-- Add more links as needed -->
    </ul>
</div>
