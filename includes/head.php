<?php

$request_uri = $_SERVER['REQUEST_URI'];
if (strpos($request_uri, '/pages/') === false) {
    $new_uri = '/pages' . $request_uri;
    header("Location: $new_uri");
    exit();
}

// Si la URL ya contiene '/pages/', incluye el archivo correspondiente.
include __DIR__ . '/pages' . $request_uri;

if(!isset($pageClass['class'])){
    $pageClass['class']="";
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/iconos/style.css">
    <title>Canto para Dios</title>
</head>
<body class="<?php echo $pageClass['class'] ?>">