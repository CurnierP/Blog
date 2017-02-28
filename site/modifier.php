<html>
<?php
include('config_2.php');
?>
    <head> 
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8" />
        <title>Blog Alternance</title>
		<link  rel="Stylesheet" type="text/css" href="stylee.css"/>
    </head>
	
   <body>
	
	    <div class="header">
		<!-- faire de la photo un lien clicable pour retourner à l'acceuil. -->
        	<a href="<?php echo $url_home; ?>"><img src="bann_p11.jpg" alt="Blog Alternance" /></a>
		</div>
	
	<!-- Création des menus déroulants -->
	<div id="menu">
	<dl>
		
	<!-- Menu déroulant de l'administrateur -->
      <dt>
	  Administrateur
	  </dt>
	  <!-- Sous Menu pour pouvoir gérer les actualités -->
	  <dd>
	     <ul>
		 <li><a href="ajout.php"> Ajouter </a></li>
		 <li><a href="modifier.php"> Modifier </a></li>
		 <li><a href="suppr.php"> Supprimer </a></li>
		 </ul>
	  </dd>
	</dl>
	
	</div>
	<div class="content">
	<br><br>Vous désirez modifier un article:<br><br>

<?php

//On se connecte à la base de données pour afficher tous les articles
//Et ensuite choisir l'article que l'on souhaite modifier

try
				{
					$bdd = new PDO('mysql:host=localhost; dbname=exercice_alternance;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				//Afficher l'erreur
				catch (Exception $e)
				{
					die('Erreur : ' . $e->getMessage());
				}
//Création du tableau qui doit contenir les données des articles
?>
<table align = center border="10px" width=80% height=100 >
<tr>
<th>Titre</th>
<th>Description</th>
 <th>Image</th> 
<th>Date</th>
</tr>
<?php
$reponse = $bdd->query('SELECT * FROM actu ORDER BY date DESC');

// On affiche les articles un à un 
while ($donnees = $reponse->fetch())
{
	  echo '<tr>';?> <br>
<?php echo '<td align = center>' .$donnees ['titre']. '</td>';
      echo '<td align = center>' .$donnees ['description']. '</td>';
      echo '<td align = center> <img src =' .$donnees ['image']. ' width=150 height=200> </img></td>';
      echo '<td align = center>' .$donnees ['date']. '</td>';
	  echo "<td align = center> <a href = 'modif2.php?id_actu=" .$donnees ['id_actu']."'>Modifier</a></td>";
      echo '</tr>';
}
?>
</table>	
</div>
</body>
</html>