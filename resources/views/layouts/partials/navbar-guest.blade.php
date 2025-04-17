<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="#">
      <img
        src="{!! url('images/alfamanagerlogo.webp') !!}"
        height="50"
        alt="Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>
      </ul>
      <!-- Left links -->

      <!-- Right side buttons -->
      <div class="d-flex align-items-center">
        <a href="{{ route('login.show') }}" class="btn btn-link px-3 me-2" style="text-decoration: none;">LOGIN</a>
        <a href="{{ route('register.show') }}" class="btn btn-primary me-3">CADASTRAR-SE</a>
        <a
          class="btn btn-dark px-3"
          href="https://accounts.google.com/"
          role="button"
        >
          <i class="fab fa-google"></i>
        </a>
      </div>
    </div>
  </div>
</nav>
<!-- Navbar -->
