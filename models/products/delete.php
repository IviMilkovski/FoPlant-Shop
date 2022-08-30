<?php
header("Content-Type: application/json", true);
if(isset($_POST['id'])){
   $id = $_POST['id'];
   include "../../config/conn.php";
   global $conn;

   $query = "DELETE FROM plants WHERE id = :id";
   $getting = $conn->prepare($query);
   $getting->bindParam(':id',$id);

   try{
      $result = $getting->execute();
      if($result){
         $statusCode = 204;
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