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

  <?php include_once 'views/html/header.php'; ?>







  <section class="container text-center my-5">
    <h1 class="display-4 fw-bold">¡Bienvenido a Hotel Pava!</h1>
    <p class="lead mt-3">
      Descubre la comodidad y elegancia que ofrecemos en cada una de nuestras habitaciones.
      Vive una experiencia única con servicios de primera calidad pensados para ti.
    </p>

    <?php if (!isset($_SESSION['correo'])): ?>
      <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="<?= SITE_URL ?>index.php?action=getFormLogearUser" class="btn btn-success btn-lg">Ingresar</a>
        <a href="<?= SITE_URL ?>index.php?action=getFormRegisterUser"
          class="btn btn-outline-primary btn-lg">Registrarse</a>
      </div>
    <?php else: ?>
      <div class="d-grid gap-2 col-6 mx-auto mt-4">
        <a href="<?= SITE_URL ?>index.php?action=getFormReservas" class="btn btn-warning btn-lg shadow">
          <i class="bi bi-calendar-check"></i> Reservar Ahora
        </a>
      </div>
      <div class="container my-5">
        <?php $reservas = $_SESSION['reservas_usuario'] ?? []; ?>
        <?php if (!empty($reservas)): ?>
          <h3 class="mb-3">Mis reservas</h3>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Entrada</th>
                  <th>Salida</th>
                  <th>Solicitud especial</th>
                  <th>Estado</th>
                  <th>Tipo de habitación</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($reservas as $res): ?>
                  <tr>
                    <td><?= htmlspecialchars($res['id']) ?></td>
                    <td><?= htmlspecialchars($res['checkin']) ?></td>
                    <td><?= htmlspecialchars($res['checkout']) ?></td>
                    <td><?= htmlspecialchars($res['special_request']) ?></td>
                    <td><?= htmlspecialchars($res['estado'] ?? '') ?></td>
                    <td><?= htmlspecialchars($res['tipo_habitacion'] ?? '') ?></td>
                    <td>
                      <div class="d-flex justify-content-center gap-2">
                        <a href="index.php?action=editarReserva&id=<?= $res['id'] ?>" 
                          class="btn btn-sm btn-primary">
                          <i class="bi bi-pencil-square"></i> Editar
                        </a>

                        <form action="<?= SITE_URL ?>index.php?action=eliminarReserva" method="POST">
                          <input type="hidden" name="id" value="<?= htmlspecialchars($res['id']) ?>">
                          <button type="submit" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i> Eliminar
                          </button>
                        </form>
                      </div>
                  </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <div class="alert alert-info">Aún no tienes reservas.</div>
        <?php endif; ?>

      <?php endif; ?>


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

  <?php include_once 'views/html/footer.php'; ?>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>