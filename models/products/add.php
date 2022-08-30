<?php
$statusCode=404;
header("Content-Type: application/json", true);


if(isset($_POST['send'])){
   include "../../config/conn.php";
   global $conn;

   $name = $_POST['name'];
   $des = $_POST['description'];
   $price = $_POST['price'];
   $colors = $_POST['colors'];
   $type = $_POST['type'];

   try{

      $query = "INSERT INTO plants(name, description, price, type_id) VALUES(:name,:desc,:price,:type)";
      $insertP = $conn->prepare($query);
      $insertP->bindParam(':name',$name);
      $insertP->bindParam(":desc",$des);
      $insertP->bindParam(":price",$price);
      $insertP->bindParam(":type",$type);
      $result = $insertP->execute();
      if($result){
         $statusCode = 204;
        header("Location:../../views/pages/admin/pages/adminColor.php");
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
