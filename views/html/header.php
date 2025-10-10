<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">
      <i class="bi bi-building"></i> Hotel Pava
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#habitaciones">Habitaciones</a></li>
        <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
      </ul>

      <?php if (!isset($_SESSION['correo'])): ?>
        <a href="<?= SITE_URL ?>index.php?action=getFormLogearUser" class="btn btn-success ms-3">Ingresar</a>
        <a href="<?= SITE_URL ?>index.php?action=getFormRegisterUser" class="btn btn-outline-light ms-2">Registrarse</a>

      <?php else: ?>

        <div class="d-flex align-items-center ms-3">
          <p class="text-light mb-0 me-3">
            Bienvenid@ <?= htmlspecialchars($_SESSION['nombre']); ?>
          </p>
          <a href="<?= SITE_URL ?>index.php?action=logoutUser" class="btn btn-danger btn-sm">Cerrar sesion</a>
        </div>
      <?php endif; ?>

    </div>
  </div>
</nav>