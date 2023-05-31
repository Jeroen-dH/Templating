<?php
$pagina = null;
if(isset($_GET["content"])){
  $content = $_GET["content"];
  switch ($content){
    case "client";
      $pagina = "1";
      break;
    case "mysql";
      $pagina = "2";
      break;
    case "pdo";
      $pagina = "3";
      break;
    case "php";
      $pagina = "4";
      break;
  }
}
?>



<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<link rel="stylesheet" href="css/style.css">
<body>

  <? include("includes/header.php  ")?>
  

	<? include("pages/onderwerp".$pagina.".php")?>
  
	
  <? include("includes/footer.php  ")?>
	


</body>
</html>