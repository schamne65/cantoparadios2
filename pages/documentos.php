<?php
$pageClass['class']="documento";
include '../includes/structure_top.php';
$conexiones =connection();
 $consulta = "SELECT * FROM file ";
            try {
                $stmt = $conexiones->query($consulta);
                $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
                if ($resultado) { 
                 
                    foreach ($resultado as $row) { ?>
                    <div>
                        <h4><?php echo $row['name_archive']?></h4>
                        <button><a href="<?php echo $row['url_archive'] ?>" download="" ><span class="icon-file-pdf"></span>Descargar</a></button>
                        <button><a href="<?php echo $row['url_archive'] ?>" target="_blank" ><span class="icon-file-pdf"></span>Leer</a></button>
                        <span class="textarea"><?php echo $row['textarea_archive']?></span>
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