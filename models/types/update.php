<?php

if(isset($_POST['update_type'])){
   $id = $_POST['idOfEdTy'];
   $name = $_POST['TypeEdname'];
   

   global $conn;
   $mes = "";
   $query = "UPDATE types SET name = :name WHERE id = :id";
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