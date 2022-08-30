<?php
session_start();
header("Content-type:application/json");
include "../config/conn.php";
global $conn;
$code = 404;
$data = null;
if(isset($_POST['send'])){
   $odgovor = $_POST['odgovor'];
   $user = $_SESSION['user']->id;
   
try{
   $query = "INSERT INTO survey_user(user_id,answer) VALUES(:id,:odg)";
   $res = $conn->prepare($query);
   $res->bindParam(":id",$user);
   $res->bindParam(":odg",$odgovor);
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
    
