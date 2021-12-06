<!DOCTYPE html>
<head>
<title>Votre Panier</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="panier.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<!-- Here is the wrapper area -->
<div id="wrapper">

 <!-- Here is the logo area -->
 <div id="header">
 <img src="images/logo_paris.png" alt="Logo">
 </div>

    <div class="topnav">
        <a  href="Accueil.html">Accueil</a>
        <a href="ToutParcourir.php">Tout Parcourir</a>
        <a href="#notif">Notifications</a>
        <a class="active" href="#Panier">Panier</a>
        <a href="Compte.php">Votre Compte</a>
      </div>

<div id="container"> 

 <div id="panier"><img src="images/shopping-bag.png" alt="LogoPanier" width="100px" >   </div> 
 <div id="titrePanier"><h2>VOTRE PANIER </h2></div>
</div>

 <br>

<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Article</th>
      <th scope="col">Photo</th>
      <th scope="col">Description</th>
      <th scope="col">Prix</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>DESCRIPTION</td>
      <td>PRIX</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
   
  </tbody>
</table>
 
   <p id="total">TOTAL A PAYER </p>
 <!-- Afficher la somme des prix -->

 
 <!-- Here is the footer area -->
 <div id="footer">
    Copyright &copy; 2021 Paris Shopping <br>
    <a href="mailto:paris.shopping@gmail.com">paris.shopping@gmail.com</a>
     </div>
</div>

 </body>
</html>