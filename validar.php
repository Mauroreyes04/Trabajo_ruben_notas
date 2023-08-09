<?php
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$conexion = mysqli_connect("localhost", "root", "", "notas");

// Escapar las variables para evitar inyección de SQL
$usuario = mysqli_real_escape_string($conexion, $usuario);
$contrasena = mysqli_real_escape_string($conexion, $contrasena);

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";

$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
    $filas = mysqli_fetch_array($resultado);

    if ($filas) {
        if ($filas['id_cargo'] == '1') {
            $_SESSION['usuario'] = $usuario;
            header("Location: instructor.php");
            exit;
        } elseif ($filas['id_cargo'] == '2') {
            $_SESSION['usuario'] = $usuario;
            header("Location: aprendiz.php");
            exit;
        }
    } else {
        echo "Buena Sensei, ponga cuidado, escribe eso de nuevo REY";
    }
} else {
    echo "Error en la consulta: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
