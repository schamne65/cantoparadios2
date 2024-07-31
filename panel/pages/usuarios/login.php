<?php
include '../../db/connection.php';

session_start(); // Asegúrate de iniciar la sesión

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName = htmlspecialchars($_POST['user']);
    $userPassword = htmlspecialchars($_POST['password']);

    // Supongo que tienes una función de conexión llamada connection()
    $base = connection();
    $consult = 'SELECT * FROM user_panel WHERE user_name = ?';
    $stmt = $base->prepare($consult);
    $stmt->execute([$userName]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) > 0) {
        $row = $result[0];
        if (password_verify($userPassword, $row['user_password'])) {
            $_SESSION['username'] = $userName;
            header('Location: ../home.php'); // Sin espacios alrededor del colon
            exit();
        } else {
            $error = "Contraseña invalida";
        }
    } else {
        $error = "Usuario no encontrado";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=MedievalSharp&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Login</title>
</head>
<body class="login">
  <div>  
    <form action="" method="POST">
        <label for="user">Usuario</label>
        <input type="text" id="user" name="user">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password">
        <input type="submit" value="Ingresar" name="" id="">
    </form>
  </div>    
</body>
</html>