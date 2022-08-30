<?php
ob_start();
session_start();
include "../config/conn.php";
$code = 404;
if(isset($_POST['btnLogin'])){
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
$regEmail = "/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i";
$regPas = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,25}$/";
if(!$email){
   header("Location:../index.php?page=login&error=NoEmail");
   $errors[]= "Email not entered.";
}
else if(!preg_match($regEmail,$email)){
   header("Location:../index.php?page=login&error=BadEmail");
   $errors[]= "Email isn't valid.";
}
if(!$password){
   $errors[]= "Password not entered.";
}
if(!preg_match($regPas,$password)){
   $errors[]= "Password isn't valid.";
}

if(count($errors)>0){
   zabeleziGreske("Login error.");
   $_SESSION['error'] = implode(" ", $errors);

   header("Location:../index.php?page=login&error");
   $code=422;
}else{
   global $conn;
   $pass = md5($password);
   $query = "SELECT * FROM users WHERE email = :email AND password = :password";
   $send = $conn->prepare($query);
   $send->bindParam(":email",$email);
   $send->bindParam(":password",$pass);
   $send->execute();
   
   
   try{
      
      if($send->rowCount()==1){
         $res = $send->fetch();
         $_SESSION['user'] = $res;
         $code = 202;
         if($res->role_id == 2){
            header("Location:../index.php?page=home");
            die();
         }
         else if($res->role_id == 1){
            header("Location:../views/pages/admin/pages/products.php");
            die();
         }
      }else if($send->rowCount()>2){
         $code=422;
         $errors[]= "Wrong password or email.";
         $_SESSION['error'] = implode(" ", $errors);
         $to=$email;
         $text="Someone tried to log into your account a couple of times.";
         $subject="Message from FoPlant - Login";
         $header="From: https://foplant.000webhostapp.com/index.php";
         mail($to, $subject, $text, $header);
      header("Location:../index.php?page=login");
      }
   }catch(Exception $e){
      $code=500;
      }

      http_response_code($code);
      }

      }else{
      header("Location:../index.php?page=home");
      }
     
?>