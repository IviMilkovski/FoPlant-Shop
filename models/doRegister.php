<?php

session_start();
include_once "../config/conn.php";

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

$regFirstName = "/^[A-ZČĆŽŠĐ][a-zčćžšđ]{1,20}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{1,20})*$/";
$regLastName = "/^[A-ZČĆŽŠĐ][a-zčćžšđ]{1,30}(\s[A-ZČĆŽŠĐ][a-zčćžšđ]{1,30})*$/";
$regEmail = "/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i";
$regPassword = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,25}$/";

$errors = [];
if(!$firstName){
   header("Location:../index.php?page=register");
   $errors[]= "First Name not entered.";
}
else if(!preg_match($regFirstName,$firstName)){
   header("Location:../index.php?page=register");
   $errors[]= "First name is not valid..";
}
if(!$lastName){
   header("Location:../index.php?page=register");
   $errors[]= "Last name not entered.";
}
else if(!preg_match($regLastName,$lastName)){
   header("Location:../index.php?page=register");
   $errors[]= "Last name is not valid.";
}
if(!$email){
   header("Location:../index.php?page=register");
   $errors[]= "Email not entered.";
}
else if(!preg_match($regEmail,$email)){
   header("Location:../index.php?page=register");
   $errors[]= "Email not valid.";
}
if(!$password){
   header("Location:../index.php?page=register");
   $errors[]= "Password not entered.";
}
else if(!preg_match($regPassword,$password)){
   header("Location:../index.php?page=register");
   $errors[]= "Password not valid.";
}
if(count($errors)>0){
   $_SESSION['errorReg'] = implode(" ", $errors);
   header("Location:../index.php?page=register&error");
   
 } else{
$mdPassword = md5($password);

   global $conn;
   $query = $conn->prepare("INSERT INTO users(first_name, last_name,email,password,role_id) VALUES(?,?,?,?,2)");
   $ex = $query->execute([$firstName,$lastName,$email,$mdPassword]);
   if($ex){
      $message = "Registered! Now you can log in and start your shopping!";
      header("Location:../index.php?page=login&message=".$message);
   }
   else{
      $error = "Connection made but we have a server error.";
      $_SESSION['errorReg'] = implode(" ", $error);
      header("Location:../index.php?page=register&error=".$error); 
      
   }
}



