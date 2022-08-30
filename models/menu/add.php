<?php
 session_start();
 ob_start();
$statusCode=404;


if(isset($_POST['name'])){
   $name = $_POST['name'];
   $href = $_POST['href'];
   include "../../config/conn.php";
   global $conn;

   $query = "INSERT INTO menu(name,href) VALUES(:name,:href)";
   $getting = $conn->prepare($query);
   $getting->bindParam(':name',$name);
   $getting->bindParam(':href',$href);
   try{
      $result = $getting->execute();
      if($result){
         $statusCode = 201;
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