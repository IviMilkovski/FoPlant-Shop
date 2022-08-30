<?php
$statusCode=404;

if(isset($_POST['id'])){
   $id = $_POST['id'];
   include "../../config/conn.php";
   global $conn;

   $query = "DELETE FROM menu WHERE id_menu = :id";
   $getting = $conn->prepare($query);
   $getting->bindParam(':id',$id);

   try{
      $result = $getting->execute();
      if($result){
         $statusCode = 204;
         header("Location:../../views/pages/admin/pages/menu.php");
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