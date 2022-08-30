<?php

$statusCode=404;


if(isset($_POST['name'])){
   $name = $_POST['name'];
   include "../../config/conn.php";
   global $conn;

   $query = "INSERT INTO colors(name) VALUES(:name)";
   $getting = $conn->prepare($query);
   $getting->bindParam(':name',$name);

   try{
      $result = $getting->execute();
      if($result){
         $statusCode = 204;
        header("Location:../../views/pages/admin/pages/color.php");
      }
      else{
         $statusCode = 500;
      }
   }
   catch(PDOException $e){
      $statusCode = 500;
   }
}
http_response_code($statusCode);