<!DOCTYPE html>
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

//On se connecte à la base de donnees

try
				{
					$bdd = new PDO('mysql:host=localhost; dbname=exercice_alternance;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				//Afficher l'erreur
				catch (Exception $e)
				{
					die('Erreur : ' . $e->getMessage());
				}

			
//ON recupere l'id pour savoir quel article on modifie
$id = $_GET['id_actu'];

//Requte SQL pour selectionner que la ligne que l'on souhaite modifier	
		
$reponse = $bdd->query('SELECT * FROM actu WHERE id_actu = '.$id);

if($donnees = $reponse->fetch() )
  {
  ?>

<form name="insertion" action="modif3.php" method="POST">
  <input type="hidden" name="id" value="<?php echo($id) ;?>">
   Titre:   <input type="text" name="titre" value="<?php echo $donnees ['titre'] ;?>"><br><br>
   Description:   <input textarea name="description" rows="15" cols="56" value="<?php echo $donnees ['description'] ;?>"><br><br>
   Lien image;       <input type="text" name="image" value=" "> <br><br>
    
      <input type="submit" value="Modifier">
	  
</form>
 <?php
  }//fin if 
  ?>
	</div>
		</body>
</html>