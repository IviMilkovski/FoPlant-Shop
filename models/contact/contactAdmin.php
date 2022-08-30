<?php
session_start();
header("Content-type:application/json");
include "../../config/conn.php";
global $conn;
$code = 404;
$data = null;
if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $mesg = $_POST['msg'];

   try{
      $query = "INSERT INTO contact(name, email, subject, message) VALUES(:name,:email,:sub,:msg)";
      $res = $conn->prepare($query);
      $res->bindParam(":name",$name);
      $res->bindParam(":email",$email);
      $res->bindParam(":sub",$subject);
      $res->bindParam(":msg",$mesg);
      $res->execute();
      if($res){
         $code = 201;
         $data=["success"=>"You have successfully sent the mail"];
      }

   }catch(PDOException $e){
      $code=409;
      $data=['eror'=>$e->getMessage()];
      erors($e->getMessage());
      echo $e->getMessage();
      }
      http_response_code($code);
      echo json_encode($data);
      }
    
