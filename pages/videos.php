<?php
include '../includes/structure_top.php';
$conexiones =connection();
$consulta = "SELECT * FROM video ";
try {
    $stmt = $conexiones->query($consulta);
    $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($resultado) { 
     
        foreach ($resultado as $row) { ?>
           
           <div>
            <p><?php echo $row['name_archive']?></p>
    <iframe width="521" height="391" src="https://www.youtube.com/embed/<?php echo $row['url_archive'] ?>" title="nicolas" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

    <?php }
    
    
    } else {
        echo "No se encontraron datos en la tabla inventario. 2";
    }
} catch (PDOException $e) {
     echo 'Error en la consulta: 3' . $e->getMessage() ;
 }


 include '../includes/structure_bottom.php';

?>
