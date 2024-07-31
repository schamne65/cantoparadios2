<?php
$pageClass['class']="panel";
include '../includes/structure_top.php';
?>

    <form action="./prueba.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="video" id="video" value="video">
        <label for="titulo">Titulo del documento</label>
        <input type="text" name="titulo" id="titulo">
        <label for="archivo-video">URL</label>
        <input type="text" name="archivo-video" id="archivo-video">
        <label for="textarea">Informacion descriptiva</label>
        <textarea name="textarea" id="textarea"></textarea>
      
        <input type="submit" value="subir">
    </form>


<?php 
include '../includes/structure_bottom.php';
?>