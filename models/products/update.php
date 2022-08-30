<?php

if(isset($_POST['update_product'])){
   $id = $_POST['idOfPrCol'];
   $name = $_POST['editPname'];
   $description = $_POST['editPdescription'];
   $price = $_POST['editPprice'];
   $type_id = $_POST['typeSel']; 

   $image = $_FILES['editPimage'];
   $maxSize = 3*1024*1024;
   $imgTypes=array("image/jpg", "image/jpeg", "image/png");

   $imgName = $image['name'];
   $tmp = $image['tmp_name'];
   $size = $image['size'];
   $imgType = $image['type'];

   $uploadDir = 'assets/img/img/';
   $filePath = $uploadDir . $imgName;
   $newNameUpload = "assets/img/img/newimg_".time();

   $locationImg = $_SERVER['DOCUMENT_ROOT']."/php1sajtgarden/alazea-gh-pages/assets/img/img/";
   

   require_once "../../config/conn.php";
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