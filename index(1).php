<?php
$user = $_POST['user'];
$password = $_POST['password'];
$age = $_POST['age'];

$errors = [];

if (empty($user) || empty($password) || empty($age)) {
    $errors[] = "Todos los campos son obligatorios.";
}

if (!is_numeric($age) || $age < 18) {
    $errors[] = "Debes ser mayor de edad (18 años o más).";
}

if ($user !== "luis" || $password !== "mendoza") {
    $errors[] = "Usuario o contraseña incorrectos.";
}

if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo "<p style='color: red;'>$error</p>";
    }
    echo "<p><a href='login.html'>Volver al formulario</a></p>";
} else {
    echo "<p style='color: green;'>Login exitoso. ¡Bienvenido, Luis!</p>";
}
?>

