<?php
header("Content-Type: application/json");
require_once "../../config/conn.php";
   global $conn;
   if(isset($_POST['keyword'])){ 
      $keyword = "%".$_POST['keyword']."%"; 

      $findProductsQuery = "SELECT p.*, t.name AS TypeName FROM plants p 
      INNER JOIN types t ON t.id = p.type_id WHERE p.name LIKE :keyword";

$priprema = $conn->prepare($findProductsQuery); 
$priprema->bindParam(":keyword", $keyword); 
$plants = $priprema->execute(); 

if($plants){ 
    $plants= $priprema->fetchAll(); 
       echo json_encode(["plant" => $plants, "success"=>"Success"]); 
}

   }  