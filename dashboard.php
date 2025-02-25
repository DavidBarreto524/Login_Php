<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Bienvenido, <?= $_SESSION['username']; ?>!</h2>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>