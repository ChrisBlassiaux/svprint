<?php
  // //function qui rend les items de la nav dynamiques 
  // //title, href et class active
  function nav_item(string $link): string 
  {
    if ($_SERVER['SCRIPT_NAME'] === $link) {
     return true;
    }
    return false;
  }

?>

  <!-- 
    //nav_item('/index.php', 'Accueil'); 
    //nav_item('/blog.php', 'Blog'); 

   -->

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/logo.png">
    <title><?php echo isset($title) ? $title : 'SVprint'  ?></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header class="header">
      <div class="navbar">
        <div class="text-center bg-primary text-white">Nos services sont toujours opérationnels même en situation de <strong class="bold">Covid-19</strong></div>
        <div class="container-navbar">
          <h1>
            <a href="index.php">
              <img src="images/logo.png" alt="Logotype de numériqu'elles" class="logo">
            </a>
          </h1>
          <div class="contain-burger">
            <div class="burger-nav"></div>
          </div>
          <nav class="nav">
            <a href="index.php" class="section <?php echo nav_item('/index.php') ? 'active' : '' ?>">Accueil</a>
            <a href="services.php" class="section">Nos services</a> 
            <a href="advices.php" class="section">Conseils</a>
            <a href="contact.php" class="section">Contact</a>
            <a href="#" class="btn">Me faire appeler<i class="fa fa-angle-right"></i></a>
          </nav>  
        </div>
      </div>
      <div class="container-jumbotron">
        <div class="presentation-keys">
          <p class="presentation_key"><span class="fa fa-print fa-2x mr-3"></span>Vente de consommable</p>
          <p class="presentation_key"><span class="fa fa-question fa-2x mr-3"></span>Aides et conseils pour les entreprises</p>
        </div>
        <div class="container-small">
          <div class="jumbotron">
            <div class="presentation">
              <div class="container text-center">
                <a href="services.php" class="btn btn-primary">
                  Des milliers de références
                  <i class="fa fa-angle-right"></i>
                </a>
              </div> 
              <div class="text">
                <div class="container bold text-center">
                  Vente de consommable sur des milliers de références, matériaux fournitures.
                  Et conseils pour les entreprises.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>