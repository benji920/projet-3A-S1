<!DOCTYPE html>
<head>
<title>Paris Shopping</title>
<meta charset="utf-8"/>
<link href="prime.css" rel="stylesheet" type="text/css"/>


</head>
<body>

<div id="wrapper">


 <div id="header">
 <img src="images/logo_paris.png" alt="Logo">
 </div>

    <div class="topnav">
        <a href="Accueil.html">Accueil</a>
        <a href="ToutParcourir.php">Tout Parcourir</a>
        <a class="active" href="Notifications.php">Notifications</a>
        <a href="Panier.html">Panier</a>
        <a href="#compte">Votre Compte</a>
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
      $sql= "SELECT DISTINCT marque FROM articles";
      $result = mysqli_query($db_handle, $sql);
     echo "<FORM> <SELECT name='nom' size='1'>";
      while ($data=mysqli_fetch_assoc($result)){
        
        
       echo " <OPTION>",$data['marque'];

    }
    echo "        </SELECT>
    </FORM>";
      ?>
      <FORM>
<SELECT name="nom" size="1">
<OPTION>lundi
<OPTION>mardi
<OPTION>mercredi
<OPTION>jeudi
<OPTION>vendredi
</SELECT>
</FORM>

 <div id="footer">
    Copyright &copy; 2021 Paris Shopping <br>
    <a href="mailto:paris.shopping@gmail.com">paris.shopping@gmail.com</a>
     </div>
</div>

 </body>
</html>