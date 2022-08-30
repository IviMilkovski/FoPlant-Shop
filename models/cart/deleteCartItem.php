<?php
session_start();
header("Content-type:application/json");
include "../../config/conn.php";
global $conn;
$code = 404;
$data = null;
if(isset($_POST['send'])){

   $id=$_POST['id'];
   echo($id);
   try{
      $query = "DELETE FROM cart_plant WHERE plant_id = :id";
      $res = $conn->prepare($query);
      $res->bindParam(":id",$id);
      $res->execute();
      if($res){
         $code = 201;
         $data=["success"=>"You have deleted the item"];
         header("Location:../../index.php?page=cart");
      }
   }catch(PDOException $e){
         $code=409;
         echo $e->getMessage();
         }
         http_response_code($code);
         echo json_encode($data);
         }
      
       