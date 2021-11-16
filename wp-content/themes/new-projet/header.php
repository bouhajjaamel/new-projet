<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<div style="background-image: url(imag/or.jpg);">

<nav class="navbar navbar-light" style="background-color:background: rgb(255,255,255);
background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(240,237,178,0.5494572829131652) 12%, rgba(217,215,133,1) 35%, rgba(154,132,57,1) 66%, rgba(144,96,6,1) 85%);">
<a href="http://localhost/new-projet/"><img src="<?php echo get_bloginfo('template_directory') ?>/imag/logo.jpeg" alt="" width="120px" height="90px"></a>

  <form class="example" action="/action_page.php" style="margin:auto;max-width:400px">
  <input type="search" placeholder="Rechercher Un produits.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<div class="d-md-flex bd-highlight">    
<div class="p-2 flex-fill bd-highlight"><svg xmlns="http://www.w3.org/2000/svg " style="color:rgb(43, 30, 30);" width="30" height="30" fill="currentColor" class="bi bi-cart-x" viewBox="0 0 16 16">
          <path d="M7.354 5.646a.5.5 0 1 0-.708.708L7.793 7.5 6.646 8.646a.5.5 0 1 0 .708.708L8.5 8.207l1.146 1.147a.5.5 0 0 0 .708-.708L9.207 7.5l1.147-1.146a.5.5 0 0 0-.708-.708L8.5 6.793 7.354 5.646z"/>
          <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
         </svg> </a><div class="text-light"></div></div>
         <a href="#"><div class="text-light"></div></a>
         
         <div class="d-md-flex bd-highlight">
         <a href="">  <button type="button" class="btn btn-outline-warning my-2 my-sm-0">Panier</button>
         <a href="connexion.php">  <button type="button" class="btn btn-outline-warning my-2 my-sm-0"> S'inscrire</button>

</div>
        
</div>
</select>
  </div>
</nav>
</nav>
  <!-- Menu header -->
  <nav class="navbar navbar-expand-md navbar-light" role="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu(array(
                    'theme_location'    => 'header_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'header-menu',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
            ?>
        </div>
    </nav>