<?php
include '../session/check_login.php';
checkLogin();
include '../db/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if ($_POST['documento'] == 'documento') {
    
   if(file_exists($_FILES['archivo']['tmp_name'])){
    if(move_uploaded_file($_FILES['archivo']['tmp_name'],'../img/'.$_FILES['archivo']['name'])){
        $name=$_POST['titulo'];
        $url='../img/'.$_FILES['archivo']['name'];
        $textarea = $_POST['textarea'];
        try{
            $base =connection();
            $consult='INSERT INTO file (name_archive,url_archive,textarea_archive) VALUES ( ?, ?, ?)';
            $stmt= $base->prepare($consult);
            $stmt->execute([$name,$url,$textarea]);
            return true;
    
        }catch(PDOException $e){
            echo "error al cargar archivo" .$e->getMessage();
            return false;
        }
    }else{
        echo "no se subio";
    }
   }else{
    echo "no se subio";
   }
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['video'] == 'video') {       
          $name=$_POST['titulo'];
          $url=$_POST['archivo-video'];
          $textarea = $_POST['textarea'];
          try{
              $base =connection();
              $consult='INSERT INTO video (name_archive,url_archive,textarea_archive) VALUES ( ?, ?, ?)';
              $stmt= $base->prepare($consult);
              $stmt->execute([$name,$url,$textarea]);
              return true;
      
          }catch(PDOException $e){
              echo "error al cargar archivo" .$e->getMessage();
              return false;
          }
      }else{
          echo "aca no se subio" ;
      }
     }else{
      echo "no se subio";
     }
 