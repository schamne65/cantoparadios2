<?
$pageClass['class']="panel";
include '../includes/structure_top.php';
?>

    <form action="./prueba.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="documento" id="document" value="documento">
        <label for="titulo">Titulo del documento</label>
        <input type="text" name="titulo" id="titulo">
        <label for="archivo"></label>
        <input type="file" name="archivo" id="archivo">
        <label for="textarea">Informacion descriptiva</label>
        <textarea name="textarea" id="textarea"></textarea>
      
        <input type="submit" value="subir">
    </form>


<?php 
include '../includes/structure_bottom.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_FILES['archivo']);
}
?>
