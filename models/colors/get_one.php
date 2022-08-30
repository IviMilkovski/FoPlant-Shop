<?php

if(isset($_POST['id'])){
   header("Content-Type: application/json");
   require_once "../../config/conn.php";
   global $conn;
   $code=404;
   $data = null;

   // echo "hello";
   $id = intval($_POST['id']);


   $query = "SELECT * FROM colors WHERE id = :id";
   $edit = $conn->prepare($query);
   $edit->bindParam(":id",$id);

   try{
      $edit->execute();
      $col=$edit->fetch();
      if($col){
         $data = $col;
         $code = 201;

      }else{
         $code=500;
      }
   }catch(PDOException $e){
      $code = 500;
      $data = $e->getMessage();
   }



}
http_response_code($code);
echo json_encode($data);