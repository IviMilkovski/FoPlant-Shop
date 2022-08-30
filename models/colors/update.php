<?php

if(isset($_POST['update_color'])){
   $id = $_POST['idOfEdCol'];
   $name = $_POST['ColEdname'];
   

   require_once "../../../../config/conn.php";
   global $conn;
   $mes = "";
   $query = "UPDATE colors SET name = :name WHERE id = :id";
   $update = $conn->prepare($query);
   $update->bindParam(":name",$name);
   $update->bindParam(":id",$id);
   $update->execute();
   if($update){
      $mes = "<p>Updated</p>";
   }else{
      $mes="<p>Not Updated. Error.</p>";
   }
}