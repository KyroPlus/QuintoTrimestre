<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Pava</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="../styles.css">
</head>
<body>

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
        <a href="<?= SITE_URL ?>index.php?action=getFormLogearUser" class="btn btn-success ms-3">Ingresar</a>
        <a href="<?= SITE_URL ?>index.php?action=getFormRegisterUser" class="btn btn-outline-light ms-2">Registrarse</a>
      </div>
    </div>
  </nav>


  <section class="container text-center my-5">
        <h1 class="display-4 fw-bold">¡Bienvenido a Hotel Pava!</h1>
        <p class="lead mt-3">
            Descubre la comodidad y elegancia que ofrecemos en cada una de nuestras habitaciones.  
            Vive una experiencia única con servicios de primera calidad pensados para ti.
        </p>

        <div class="d-flex justify-content-center gap-3 mt-4">
            <a href="<?= SITE_URL ?>index.php?action=getFormLogearUser" class="btn btn-success btn-lg">Ingresar</a>
            <a href="<?= SITE_URL ?>index.php?action=getFormRegisterUser" class="btn btn-outline-primary btn-lg">Registrarse</a>
        </div>
  </section>



  <section id="habitaciones" class="container my-5">
    <h2 class="fw-bold mb-3">Nuestras Habitaciones</h2>
    <p class="text-muted">Descubre la comodidad y elegancia de nuestras opciones</p>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="img/simple.jpg" class="card-img-top" alt="Habitación simple">
          <div class="card-body">
            <h5 class="card-title">Habitación Simple</h5>
            <p class="card-text">Ideal para viajes cortos o de negocios. Cómoda y moderna.</p>
            <a href="#" class="btn btn-primary">Reservar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="img/doble.jpg" class="card-img-top" alt="Habitación doble">
          <div class="card-body">
            <h5 class="card-title">Habitación Doble</h5>
            <p class="card-text">Perfecta para parejas o amigos. Espaciosa y confortable.</p>
            <a href="#" class="btn btn-primary">Reservar</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="img/suite.jpg" class="card-img-top" alt="Suite de lujo">
          <div class="card-body">
            <h5 class="card-title">Suite de Lujo</h5>
            <p class="card-text">La mejor experiencia, con vista al mar y todas las comodidades premium.</p>
            <a href="#" class="btn btn-primary">Reservar</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="servicios" class="bg-light py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Nuestros Servicios</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <i class="bi bi-wifi display-4 text-primary"></i>
          <h5 class="mt-3">Wi-Fi Gratis</h5>
          <p>Conéctate en cualquier parte del hotel con internet de alta velocidad.</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-cup-hot display-4 text-success"></i>
          <h5 class="mt-3">Desayuno Incluido</h5>
          <p>Disfruta de un desayuno variado y delicioso cada mañana.</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-water display-4 text-info"></i>
          <h5 class="mt-3">Piscina</h5>
          <p>Relájate en nuestra piscina con vista panorámica al mar.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contacto" class="container my-5">
    <h2 class="fw-bold mb-3">Contáctanos</h2>
    <p class="text-muted">Estamos aquí para resolver tus dudas y ayudarte con tu reserva</p>
    <form>
      <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" placeholder="Tu nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Correo</label>
        <input type="email" class="form-control" placeholder="tucorreo@email.com">
      </div>
      <div class="mb-3">
        <label class="form-label">Mensaje</label>
        <textarea class="form-control" rows="4" placeholder="Escribe tu mensaje"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </section>

  <footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">&copy; 2025 Hotel Pava. Todos los derechos reservados.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
