<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contenedor Centrado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <style>
    body {
      position: relative;
      height: 45vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      width: 400px;
      height: 200px;
      background-color: #f1f1f1;
      border: 1px solid #ccc;
      border-radius: 5px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body>
  <div class="container text-center">
    <div class="row">
      <div class="col-8">
        <!-- Formulario -->
        <div class="card" style="width: 29rem;">
          <div class="card-header">
            <h1 style="color: blue;">Registro de alumnos</h1>
          </div>
          <form action="" method="post">
            <label for="documento"><p style="color: blue;">DOCUMENTO *</p></label>
            <input type="number" name="documento" class="form-control" placeholder="documento" required><br>
            <label for="nombre"><p style="color: blue;">NOMBRE COMPLETO *</p></label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required><br>
            <label for="correo"><p style="color: blue;">CORREO ELECTRÓNICO *</p></label>
            <input type="text" name="correo" class="form-control" placeholder="correo" required><br>
            <label for="telefono"><p style="color: blue;">TELÉFONO *</p></label>
            <input type="number" name="telefono" class="form-control" placeholder="telefono" required><br>
            <label for="programa"><p style="color: blue;">PROGRAMA *</p></label>
            <select name="Id_programa" class="form-control" required>
              <option> --- Seleccione -- </option>
              <!-- Opciones del programa -->
            </select><br>
            <input type="submit" class="btn btn-primary" value="Registrar">
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
