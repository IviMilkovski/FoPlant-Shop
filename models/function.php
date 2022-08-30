<?php
function getProducts(){

global $conn;
$num = "SELECT COUNT(*) as num FROM plants";
$strana = isset($_GET['strana']) ? $_GET['strana'] : 1;
$perPage = 6;
$totalNum = $conn->query($num)->fetch()->num;
$numOfPages = ceil($totalNum/$perPage);
$offset = ($strana - 1) * $perPage;
$query = "SELECT p.*, t.name AS TypeName FROM plants p 
INNER JOIN types t ON t.id = p.type_id GROUP BY p.id LIMIT $perPage OFFSET $offset";
$result = $conn->query($query);
$products = $result->fetchAll();
return ["products"=>$products,"numOfPages"=>$numOfPages,"totalNum"=>$totalNum, "perPage"=>$perPage];
}

function getAllColors(){
global $conn;
$query = "SELECT * FROM colors";
$result = $conn->query($query);
$colors = $result->fetchAll();
return $colors;
}

function getAllTypes(){
global $conn;
$query = "SELECT *FROM types";
$result = $conn->query($query);
$types = $result->fetchAll();
return $types;
}

function getMenu(){
   global $conn;
   $query = "SELECT *FROM menu";
   $result = $conn->query($query);
   $menu = $result->fetchAll();
   return $menu;
   }

   function getForCart($id){
      global $conn;
      $query = "SELECT cp.*,p.price as price,p.name as PlantName FROM cart_plant cp INNER JOIN plants p ON cp.plant_id = p.id WHERE cp.user_id = $id";
      $result = $conn->query($query);
      $cart = $result->fetchAll();
      return $cart;
   }

   function getQuestion(){
      global $conn;
   $query = "SELECT *FROM survey";
   $result = $conn->query($query);
   $survey = $result->fetchAll();
   return $survey;
   }
   function getContactMsg(){
      global $conn;
      $query = "SELECT *FROM contact";
      $result = $conn->query($query);
      $contacts = $result->fetchAll();
      return $contacts;
   }
   
   function getUsers(){
      global $conn;
      $query = "SELECT *FROM users";
      $result = $conn->query($query);
      $types = $result->fetchAll();
      return $types;
   }
      function getSurvey(){
         global $conn;
         $query = "SELECT * FROM survey s INNER JOIN survey_user su ON s.id = su.survey_id
         INNER JOIN users u ON  su.user_id=u.id";
         $result = $conn->query($query);
         $survey = $result->fetchAll();
         return $survey;
      
   }
   
   ?>