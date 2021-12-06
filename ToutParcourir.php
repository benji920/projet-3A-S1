<!DOCTYPE html>
<head>
<title>Paris Shopping</title>
<meta charset="utf-8"/>
<link href="prime.css" rel="stylesheet" type="text/css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

<div id="wrapper">


 <div id="header">
 <img src="images/logo_paris.png" alt="Logo">
 </div>

    <div class="topnav">
        <a href="Accueil.html">Accueil</a>
        <a class="active" href="ToutParcourir.php">Tout Parcourir</a>
        <a href="Notifications.php">Notifications</a>


        <a href="Panier.html">Panier</a>
        <a href="Compte.php">Votre Compte</a>

      </div>

      <?php 
      
      $servername = 'localhost';
      $username = 'root';
      $password = '';
      
      //On établit la connexion
      $db_handle = mysqli_connect($servername, $username, $password);
      $database = "articles";
      $db_found = mysqli_select_db($db_handle, $database);
      //On vérifie la connexion
      if(!$db_handle){
          die('Erreur : ' .mysqli_connect_error());
      }
      $sql= "SELECT * FROM articles WHERE classe='article régulier'";
      $result = mysqli_query($db_handle, $sql);
    
    echo "<table>";
    echo "<h2>Articles réguliers</h2>";
    echo "<tr>";
    while ($data=mysqli_fetch_assoc($result)){
        
        echo "<td class='a'>";
            $image = $data['photo'];
            echo "<img src='$image' width='100'></td>";
        
    }
   echo  "</tr>";
   echo "<tr>";
   $result = mysqli_query($db_handle, $sql);
   while ($data=mysqli_fetch_assoc($result)){
    echo "<td>";
    echo "Marque : ",$data['marque'],"</td>";

}
echo  "</tr>";
echo "<tr>";
$result = mysqli_query($db_handle, $sql);
while ($data=mysqli_fetch_assoc($result)){
 echo "<td>";
 echo "Prix : ",$data['prix'],"</td>";

}
echo  "</tr>";
echo "</table>";
$sql= "SELECT * FROM articles WHERE classe='Article haute gamme'";
$result = mysqli_query($db_handle, $sql);
/////////////////////////HAUT DE GAMME/////////////////////////
echo "<br><h2>Articles Haut de gamme</h2>";
echo "<table>";
    echo "<tr>";
    while ($data=mysqli_fetch_assoc($result)){
        
        echo "<td>";
            $image = $data['photo'];
            echo "<img src='$image' width='100'></td>";
        
    }
   echo  "</tr>";
   echo "<tr>";
   $result = mysqli_query($db_handle, $sql);
   while ($data=mysqli_fetch_assoc($result)){
    echo "<td>";
    echo "Marque : ",$data['marque'],"</td>";

}
echo  "</tr>";
echo "<tr>";
$result = mysqli_query($db_handle, $sql);
while ($data=mysqli_fetch_assoc($result)){
 echo "<td>";
 echo "Prix : ",$data['prix'],"</td>";

}
echo  "</tr>";
echo "</table>";
$sql= "SELECT * FROM articles WHERE classe='article rare'";
$result = mysqli_query($db_handle, $sql);
///////////////////////////:RARES///////////////////////////
echo "<br><h2>Articles Rares</h2>";
echo "<table>";
    echo "<tr>";
    while ($data=mysqli_fetch_assoc($result)){
        
        echo "<td>";
            $image = $data['photo'];
            echo "<img src='$image' width='100'></td>";
        
    }
   echo  "</tr>";
   echo "<tr>";
   $result = mysqli_query($db_handle, $sql);
   while ($data=mysqli_fetch_assoc($result)){
    echo "<td>";
    echo "Marque : ",$data['marque'],"</td>";

}
echo  "</tr>";
echo "<tr>";
$result = mysqli_query($db_handle, $sql);
while ($data=mysqli_fetch_assoc($result)){
 echo "<td>";
 echo "Prix : ",$data['prix'],"</td>";

}
echo  "</tr>";
   echo "</table>";
////////////////////////////:affichage des tableaux//////////////////////:

 
      ?>

 <div id="footer">
    Copyright &copy; 2021 Paris Shopping <br>
    <a href="mailto:paris.shopping@gmail.com">paris.shopping@gmail.com</a>
     </div>
</div>

 </body>
</html>