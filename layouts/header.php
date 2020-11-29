<?php
  // //function qui rend les items de la nav dynamiques 
  // //title, href et class active
  // function nav_item(string $link, string $title): string 
  // {
  //   $class = 'nav-item';
  //   if ($_SERVER['SCRIPT_NAME'] === $link) {
  //     $class .= ' active';
  //   }
  //   return 'html' . $class . 'La suite du html';
  //   //les href dynamiques
  // }

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <title><?php echo isset($title) ? $title : 'SVprint'  ?></title>
   
    <!-- Font Awesome : icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <!-- 
    //nav_item('/index.php', 'Accueil'); 
    //nav_item('/blog.php', 'Blog'); 

   -->