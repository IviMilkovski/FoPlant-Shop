<?php

if(isset($_POST['update_menu'])){
   $id = $_POST['idOfEdMe'];
   $name = $_POST['MenuEdname'];
   $href = $_POST['MenuEdhref'];

   global $conn;
   $mes = "";
   $query = "UPDATE menu SET name = :name , href = :href WHERE id_menu = :id";
   $update = $conn->prepare($query);
   $update->bindParam(":name",$name);
   $update->bindParam(":href",$href);
   $update->bindParam(":id",$id);
   $update->execute();
   if($update){
      $mes = "<p>Updated</p>";
   }else{
      $mes="<p>Not Updated. Error.</p>";
   }
}