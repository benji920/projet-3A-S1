<!DOCTYPE html>
<head>
<title>Paris Shopping</title>
<meta charset="utf-8"/>
<link href="prime.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Here is the wrapper area -->
<div id="wrapper">

 <!-- Here is the logo area -->
 <div id="header">
 <img src="logo_paris.png" alt="Logo">
 </div>

    <div class="topnav">
        <a href="Accueil.html">Accueil</a>
        <a class="active" href="ToutParcourir.php">Tout Parcourir</a>
        <a href="#notif">Notifications</a>
        <a href="Panier.html">Panier</a>
        <a href="#compte">Votre Compte</a>
      </div>

      <?php 
      
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      
      //On établit la connexion
      $conn = mysqli_connect($servername, $username, $password);
      
      //On vérifie la connexion
      if(!$conn){
          die('Erreur : ' .mysqli_connect_error());
      }
      echo 'Connexion réussie';
      
      $sql= "SELECT * FROM articles";
      while ($data=mysqli_fetch_assoc($result)){
          
      }

      
      ?>

 <!-- Here is the footer area -->
 <div id="footer">
    Copyright &copy; 2021 Paris Shopping <br>
    <a href="mailto:paris.shopping@gmail.com">paris.shopping@gmail.com</a>
     </div>
</div>

 </body>
</html>