<?php
function getProducts(){

   global $conn;
   $query = "SELECT p.*, t.name AS TypeName FROM plants p 
   INNER JOIN types t ON t.id = p.type_id ";
   $result = $conn->query($query);
   $products = $result->fetchAll();
   return $products;
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

