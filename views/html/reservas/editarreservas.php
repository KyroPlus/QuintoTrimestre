<!DOCTYPE html>
<html lang="es"> <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Reserva - Hotel Pava</title> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="views/html/reservas/styles/editreservas.css"> 
    </head>
<body>

    <?php include_once 'views/html/header.php'; ?>

    <section class="editar-reserva-section container my-5">
        <h2 class="reserva-title text-center mb-4">Editar Reserva</h2>

        <?php if (isset($reserva) && $reserva): ?>
            <div class="reserva-form-container">
                <form action="<?= SITE_URL ?>index.php?action=actualizarReserva" method="POST">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($reserva['id']) ?>">

                    <div class="mb-3">
                        <label for="checkin" class="form-label">Fecha de Entrada:</label>
                        <input type="date" id="checkin" name="checkin" class="form-control" value="<?= htmlspecialchars($reserva['checkin']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="checkout" class="form-label">Fecha de Salida:</label>
                        <input type="date" id="checkout" name="checkout" class="form-control" value="<?= htmlspecialchars($reserva['checkout']) ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="special_request" class="form-label">Solicitud Especial:</label>
                        <textarea id="special_request" name="special_request" class="form-control" rows="3"><?= htmlspecialchars($reserva['special_request']) ?></textarea>
                    </div>

                    <div class="button-group">
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        <a href="<?= SITE_URL ?>index.php" class="btn btn-secondary">Cancelar</a>
                    </div>
                </form>
            </div>
        <?php else: ?>
            <div class="alert alert-danger reserva-form-container">
                No se encontró la reserva solicitada.
                <div class="text-center mt-3">
                     <a href="<?= SITE_URL ?>index.php" class="btn btn-secondary">Volver al inicio</a>
                </div>
            </div>
        <?php endif; ?>
    </section>

    <?php include_once 'views/html/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>