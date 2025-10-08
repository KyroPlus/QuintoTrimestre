  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="<?= SITE_URL ?>">
        <i class="bi bi-building"></i> Hotel Pava
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="<?= SITE_URL ?>">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>#habitaciones">Habitaciones</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>#servicios">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= SITE_URL ?>#contacto">Contacto</a></li>
        </ul>
        <a href="<?= SITE_URL ?>views/html/auth/login.php" class="btn btn-success ms-3">Ingresar</a>
        <a href="<?= SITE_URL ?>views/html/auth/register.php" class="btn btn-outline-light ms-2">Registrarse</a>
      </div>
    </div>
  </nav>
