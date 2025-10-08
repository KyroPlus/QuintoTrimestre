<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/mvc/views/styleslog.css">

</head>
<body class="d-flex justify-content-center align-items-center vh-100 custom-bg">

    <div class="card shadow p-4 custom-card" style="max-width: 500px; width: 100%;">
        <div class="card-body">

            <div class="text-center mb-4">
                <i class="fas fa-user-lock fa-2x mb-3"></i>
                <h2 class="h4 fw-bold">Iniciar Sesión</h2>
                <p class="text-muted">Accede a tu cuenta en HOTEL PAVA</p>
            </div>

            <form action="<?= SITE_URL ?>index.php?action=logearUser" method="POST">

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>



                <div class="mb-3">
                    <label for="contrasena" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="******" required>
                    </div>
                </div>

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

                <button type="submit" class="btn btn-success w-100">Ingresar</button>
            </form>

            <div class="text-center mt-3">
                <p class="small">¿No tienes cuenta? <a href="#">Regístrate aquí</a></p>
            </div>
        </div>
    </div>

</body>
</html>
