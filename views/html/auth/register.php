<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/mvc/views/stylesreg.css">


 
</head>
<body class="d-flex justify-content-center align-items-center vh-100 custom-bg">

    <div class="card shadow p-4 custom-card">
        <div class="card-body">

            <div class="text-center mb-4">
                <div class="custom-icon-circle mx-auto mb-3">
                    <i class="fas fa-user-plus fa-lg"></i>
                </div>
                <h1 class="h4 fw-bold custom-title">Crear Cuenta</h1>
                <p class="text-muted small">Registrate a HOTEL PAVA</p>
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

            <form action="<?= SITE_URL ?>index.php?action=registerUser" method="POST">
                
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="tipo_doc" class="form-label custom-label">Tipo de Documento</label>
                        <div class="input-group">
                            <select id="tipo_doc" name="tipo_doc" class="form-select custom-select-border" >
                                <option value="CC" selected>Cédula de Ciudadanía</option>
                                <option value="TI">Tarjeta de Identidad</option>
                                <option value="CE">Cédula de Extranjería</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="num_doc" class="form-label custom-label">Numero de Documento</label>
                        <div class="input-group">
                            <input type="text" id="num_doc" name="num_doc" class="form-control" required  >
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="nombre" class="form-label custom-label">Nombre</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" required  >
                    </div>
                    <div class="col-md-6">
                        <label for="apellido" class="form-label custom-label">Apellido</label>
                        <input type="text" id="apellido" name="apellido" class="form-control" required  >
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="telefono" class="form-label custom-label">Telefono</label>
                        <div class="input-group">
                            <input type="tel" id="telefono" name="telefono" class="form-control" required >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label custom-label">Email</label>
                        <div class="input-group">
                            <input type="email" id="email" name="email" class="form-control" required >
                        </div>
                    </div>
                </div>

                <div class="mb-2">
                    <label for="contrasena" class="form-label custom-label">Contraseña</label>
                    <div class="input-group">
                        <span class="input-group-text custom-addon"><i class="fas fa-lock"></i></span>
                        <input type="password" id="contrasena" name="contrasena" class="form-control custom-password-input" required >
                    </div>
                    <div class="form-text text-muted small ms-1">
                        <i class="fas fa-info-circle me-1"></i> La contraseña debe tener al menos 8 caracteres.
                    </div>
                </div>

                <button type="submit" class="btn custom-btn w-100 mt-4">
                    <i class="fas fa-plus me-2"></i> Crear Cuenta
                </button>
            </form>

            <div class="text-center mt-3">
                <p class="small text-muted">¿Ya tienes una cuenta? <a href="#" class="custom-link">Inicia sesión aquí</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>