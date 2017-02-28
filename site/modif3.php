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
<?php
//On se connecte à la base de donnees
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

 
  //récupération des valeurs des champs:
  //titre:
  $titre     = $_POST["titre"] ;
  //description:
  $description = $_POST["description"] ;
  //image;
  
  $image = $_POST ["image"];
  //récupération de l'identifiant de l'article:
  $id         = $_POST["id"] ;
  
//On sélectionne la table actu

  //affichage des résultats, pour savoir si la modification a marchée:
  if($erreur == false)
  {
	  //création de la requête SQL:
$req = $bdd->prepare("UPDATE actu SET 
titre = '$titre',
description = '$description',
image = '$image'
WHERE id_actu = $id");
$req->execute(array(
'titre' => $titre,
'description' => $description,
'image' => $image,
'id_actu' => $id
));
//La modification c'est bien réalisée.
    echo("La modification a réussi") ;
}
  else
{
    echo("La modification a échouée") ;
}
?>
	</div>
		</body>
</html>