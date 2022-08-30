<?php
session_start();
header("Content-type:application/json");
include "../../config/conn.php";
global $conn;
$code = 404;
$data = null;
if(isset($_POST['send'])){

   $id=$_POST['id'];
   $q = $_POST['q'];
$user = $_SESSION['user']->id;

try{
   $query = "INSERT INTO cart_plant(plant_id,user_id,count,ordered) VALUES(:id,:user,:q,0)";
   $res = $conn->prepare($query);
   $res->bindParam(":id",$id);
   $res->bindParam(":user",$user);
   $res->bindParam(":q",$q);
   $res->execute();
      if($res){
         $code = 201;
         $data=["success"=>"You have successfully added to cart"];
      }
   }catch(PDOException $e){
         $code=409;
         $data=['eror'=>$e->getMessage()];
         echo $e->getMessage();
         }
         http_response_code($code);
         echo json_encode($data);
         }
      
       