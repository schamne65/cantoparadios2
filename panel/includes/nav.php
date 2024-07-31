<header class="header">
<div class="div-bloque"> 
    <span class="icon-file-excel1 deploy"></span>
    <h1><a href="../pages/home.php"><img src="../img/logo-canto-dios.png" alt=""></a></h1>     
    <nav class="nav1 ">
            <ul class="ul"> 
               <!-- <li><a href="../pages/home.php" >Inicio</a></li>
                <li><a href="../pages/videos.php">Videos</a></li>
                <li><a href="../pages/documentos.php">Documentos</a></li>
                <li><a href="../pages/enlaces.php">Enlaces</a></li> -->
                <?php
                if ($_SESSION['username'] == "nicolas") {?>
                    <li><a href="../panel/panel-documento.php">Panel documentos</a></li>
                    <li><a href="../panel/panel-video.php">Panel videos</a></li>
                 <?php }
                ?>
            </ul>
        </nav>
    <span><a href="../pages/usuarios/logout.php">Salir</a></span>
</div>    
</header>
<nav class="nav">
            <ul class="ul"> 
                <li><a href="../pages/home.php" >Inicio</a></li>
                <li><a href="../pages/videos.php">Videos</a></li>
                <li><a href="../pages/documentos.php">Documentos</a></li>
                <li><a href="../pages/enlaces.php">Enlace</a></li>
                <?php
                if ($_SESSION['username'] == "nicolas") {?>
                    <li><a href="../panel/panel-documento.php">Panel documentos</a></li>
                    <li><a href="../panel/panel-video.php">Panel videos</a></li>
                 <?php } ?>
            </ul>
</nav>
<main class="container">
    <section>

  