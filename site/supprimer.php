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
<?php
  //connection au serveur:
  $erreur = false;
try
				{
					$bdd = new PDO('mysql:host=localhost; dbname=exercice_alternance;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				//Afficher l'erreur
				catch (Exception $e)
				{
					die('Erreur : ' . $e->getMessage());
				}
  //récupération de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement supprimer:
  $id  = $_GET['id_actu'];
  //affichage des résultats, pour savoir si la suppression a marchée:
  if($erreur == false)
  {
	  //création de la requête SQL:
$req = $bdd->prepare("DELETE FROM actu WHERE id_actu = $id");
$req->execute(array("id_actu" => $id));
?>
<div class="message">Votre article a bien été supprimer.<br />
<a href="t.php">Retourner à l'accueil</a></div>
<?php
  }
  else
  {
?>
<div class="message">Votre article n'a pas bien été modifier.<br />
<a href="t.php">Retourner à l'accueil</a></div>
<?php
  }
?>
		</body>
</html>