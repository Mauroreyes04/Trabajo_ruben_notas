<!doctype html>
<html lang="en">
<head>
  <title>Sistema de notas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
<div class="container" >
    <form action="validar.php"  method="post">
        <h1> Sistema de notas</h1>
        <p>Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p>
        <p>Contraseña <input type="password" placerholder="ingrese su contraseña" name="contrasena"></p>
        <div class="boton">
            <input type="submit" value="ingresar">
        </div>
        <h1>
            </h1>
            <div class="boton">
            <td><button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#editar">¿no tienes usuario?</button></td>
            </div>
        </div>
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <h1 class="modal-title fs-5" class="black" id="exampleModalLabel">Si no tiene usuario hable con un Instructor para que lo agregue a la base de datos y le asigne uno</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   </div>
</form>
</body>
</html>