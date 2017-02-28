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
Bonjour et bienvenue sur mon blog qui permet de suivre l'actualité footballistique de ces derniers jours grâce à des petits articles rédigés par moi-même.	<br><br>
  
<?php
//Connextion à la base de données pour afficher les articles

	 
try
				{
					$bdd = new PDO('mysql:host=localhost; dbname=exercice_alternance;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				//Afficher l'erreur
				catch (Exception $e)
				{
					die('Erreur : ' . $e->getMessage());
				}
			
//On récupére le contenu de la table actu grâce à une requete SQL qui permet de ranger les articles du plus récent au plus vieux

$reponse = $bdd->query('SELECT * FROM actu ORDER BY date DESC');	

// On affiche les articles un à un 
while ($donnees = $reponse->fetch())
{
?>
<u><b>  <font size=5> <?php	echo $donnees['titre'] ; ?></font></u></b> 
<img src = "<?php echo $donnees['image'];?>" width="150" height="200" /><br>
<?php
	echo $donnees ['description'] ;?> <br>

<font size=2>	
<?php	
    echo $donnees ['date'] ;?> </font> <br><br>
	
<?php	
}
?>
    </div>
	</body>
</html>