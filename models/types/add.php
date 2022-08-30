<?php
 session_start();
 ob_start();
$statusCode=404;


if(isset($_POST['name'])){
   $name = $_POST['name'];
   include "../../config/conn.php";
   global $conn;

   $query = "INSERT INTO types(name) VALUES(:name)";
   $getting = $conn->prepare($query);
   $getting->bindParam(':name',$name);

   try{
      $result = $getting->execute();
      if($result){
         $statusCode = 201;
        header("Location:../../views/pages/admin/pages/types.php");
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