<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh; margin: 0; background-color: #f0f0f0;">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title text-center">Login</h5>
      <form action="FormularioLogin/login" method="POST">
        <div class="mb-3">
          <label for="usuario" class="form-label">Usuario</label>
          <input type="text" class="form-control" id="usuario" placeholder="Usuario" required>
        </div>
        <div class="mb-3">
          <label for="contraseña" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contraseña" placeholder="Contraseña" required>
        </div>
        <!-- Enlace con estilo de botón, sin la clase 'disabled' -->
        <a class="btn btn-primary" href="http://localhost:8081/Logins/formulario" role="button">INGRESAR AL OTRO FORMULARIO</a>
      </form>
    </div>
  </div>

  <!-- Enlace a Bootstrap JS (opcional para interactividad) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0zF1g4nXp/6a06I6Ml07MwcmLZWKhA1pFZ5jrOkGJcmF02hY" crossorigin="anonymous"></script>
</body>
</html>
