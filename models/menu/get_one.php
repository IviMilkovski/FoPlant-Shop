<?php

if(isset($_POST['id'])){
   header("Content-Type: application/json");
   require_once "../../config/conn.php";
   global $conn;
   $code=404;
   $data = null;

   // echo "hello";
   $id = intval($_POST['id']);


   $query = "SELECT * FROM menu WHERE id_menu = :id";
   $edit = $conn->prepare($query);
   $edit->bindParam(":id",$id);

   try{
      $edit->execute();
      $menu=$edit->fetch();
      if($menu){
         $data = $menu;
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