<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Reserva | Hotel Pava</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../stylesform.css"> 
</head>
<body>
    <?php include_once 'views/html/header.php'; ?>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
                
                <div class="card shadow-lg border-0 rounded-3 custom-form-card">
                    <div class="card-header bg-primary text-white text-center py-3 rounded-top-3">
                        <h2 class="mb-0"><i class="bi bi-calendar-check me-2"></i> Realiza tu Reserva</h2>
                    </div>
                    <div class="card-body p-4 p-md-5">

                    <?php if (!empty($_SESSION['errores'])): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach($_SESSION['errores'] as $error): ?>
                                    <li><?= htmlspecialchars($error) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <?php unset($_SESSION['errores']); ?>
                    <?php endif; ?>
                        
                        <form action="index.php?action=processReservation" method="POST">
                            
                            <div class="mb-4">
                                <label for="room_id" class="form-label fw-semibold">Tipo de Habitación</label>
                                <select class="form-select form-select-lg" id="room_id" name="room_id" >
                                    <option value=""  disabled>Selecciona un tipo</option>
                                    <option value="1" selected>Habitación Simple</option>
                                    <option value="2">Habitación Doble</option>
                                    <option value="3">Suite de Lujo</option>
                                </select>
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label for="checkin" class="form-label fw-semibold">Fecha de Entrada (Check-in)</label>
                                    <input type="date" class="form-control form-control-lg" id="checkin" name="checkin" >
                                </div>
                                <div class="col-md-6">
                                    <label for="checkout" class="form-label fw-semibold">Fecha de Salida (Check-out)</label>
                                    <input type="date" class="form-control form-control-lg" id="checkout" name="checkout" >
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="special_request" class="form-label fw-semibold">Solicitudes Especiales (Opcional)</label>
                                <textarea class="form-control" id="special_request" name="special_request" rows="3" placeholder="Ej: Cama adicional, habitación con vista al mar..."></textarea>
                            </div>
                            
                            <div class="d-grid mt-5">
                                <button type="submit" class="btn btn-warning btn-lg fw-bold custom-submit-btn">
                                    Confirmar Reserva
                                </button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include_once 'views/html/footer.php'; ?>

</body>
</html>