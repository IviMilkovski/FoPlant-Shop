<?php
ob_start();
session_start();
require_once "config/conn.php";
include "models/function.php";

require_once "views/fixed/head.php";
require_once "views/fixed/nav.php";



$page = 'home';
if(isset($_GET['page'])){
 $page = $_GET['page'];
 switch($page){
   case 'home':
   require_once("views/pages/home.php");
			break;
	case 'about':
	require_once("views/pages/about.php");
			break;
   case 'author':
   require_once("views/pages/author.php");
      break;
   case 'cart':
      require_once("views/pages/cart.php");
      break; 
   case 'contact':
      require_once("views/pages/contact.php");
      break; 
   case 'login':
      require_once("views/pages/login.php");
      break;                
   case 'portfolio':
      require_once("views/pages/portfolio.php");
      break;  
   case 'register':
      require_once("views/pages/register.php");
      break;    
   case 'shop':
      require_once("views/pages/shop.php");
      break;   
   case 'shop-details':
      require_once("views/pages/shop-details.php");
      break;   
   case 'sur':
      require_once("views/pages/sur.php");
      break;   
 }
}else{
   require_once("views/pages/home.php");
}


require_once "views/fixed/footer.php";
?>
